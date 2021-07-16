<?php


namespace App\Services;

use Illuminate\Support\Facades\Http;
use Lin\Bitfinex\Bitfinex as Bf;


class Bitfinex implements ExchangeInterface
{
    const API_TIMEOUT = 60;
    const API_RETRIES = 3; //not implemented yet, will use a counter in output function
    const API_URL = "https://api.bitfinex.com/v2";
    const DISPLAY_ERRORS = false; //not implemented yet

    private $api_key = "";
    private $api_secret = "";
    protected $api;

    public function __construct($account)
    {
        $this->api_key = $account->credentials['apiKey'] ?? '';
        $this->api_secret = $account->credentials['apiSecret'] ?? '';
        $this->api = new Bf($this->api_key, $this->api_secret);


    }

    /**
     * @inheritDoc
     */
    public function account()
    {
        $account = [];
        try {
            $balance = $this->get_balances();
            $account['balances'] = $balance;
        } catch (\Exception $e) {
            $account['balances'] = [];
        }

        return response()->json(compact('account'));
    }

    /**
     * @inheritDoc
     */
    public function exchangeInfo()
    {
        $data = [];
        try {
            $markets = Http::get('https://api-pub.bitfinex.com/v2/conf/pub:map:currency:pool,pub:map:currency:explorer,pub:map:currency:sym')->json();
            if (!empty($markets[0]) && is_array($markets[0])) {
                $data['status'] = 1;
                $data['symbols'] = array_map(function ($item) {
                    return [
                        'symbol' => $item[0] . $item[1],
                        'baseAsset' => $item[0],
                        'quoteAsset' => $item[1],
                        'baseName' => $item[0],
                        'quoteName' => $item[1],
                        'orderTypes' => []
                    ];
                }, $markets[0]);
            } else {
                $data = [
                    'status' => 0,
                    'symbols' => [],
                    'message' => __('The list of currency symbols is empty')
                ];
            }

        } catch (\Exception $e) {
            $data = [
                'status' => 0,
                'symbols' => [],
                'message' => $e->getMessage()
            ];
        }

        return response()->json($data);
    }

    public function createOrder(array $data)
    {
        try {
            $order = $this->api->order()->postSubmit([
                'type' => $data['type'],
                'symbol' => $data['symbol'],
                'price' => $data['price'],
                'amount' => $data['quantity'],
            ]);
            $message = __('Ордер успешно создан');
            $code = 200;

        } catch (\Exception $e) {
            $order=null;
            $message = $e->getMessage();
            $code = 419;
        }

        return response()->json(compact('order','message'),$code);
    }

    public function cancelOrder($order_id, $symbol = '')
    {
        // TODO: Implement cancelOrder() method.
    }

    public function cancelAllOrders()
    {
        // TODO: Implement cancelAllOrders() method.
    }

    /**
     * @inheritDoc
     */
    public function getAllOrders(string $symbol)
    {
        // TODO: Implement getAllOrders() method.
    }

    /* Core api request functions */

    /* Build BFX Headers for v2 API */
    private function headers($path)
    {
        $nonce = (string)number_format(round(microtime(true) * 100000), 0, ".", "");
        $body = "{}";
        $signature = "/api/v2" . $path["request"] . $nonce . $body;
        $h = hash_hmac("sha384", utf8_encode($signature), utf8_encode($this->api_secret));
        return [
            "content-type: application/json",
            "content-length: " . strlen($body),
            "bfx-apikey: " . $this->api_key,
            "bfx-signature: " . $h,
            "bfx-nonce: " . $nonce
        ];
    }

    /* Authenticated Endpoints Request */
    private function send_auth_endpoint_request($data)
    {
        $ch = curl_init();
        $url = self::API_URL . $data["request"];
        $headers = $this->headers($data);

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, self::API_TIMEOUT);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "{}");

        if (!$result = curl_exec($ch)) {
            return $this->curl_error($ch);
        } else {
            $out = $this->output($result, $this->is_bitfinex_error($ch), $data);
            return $out;
        }
    }

    /* Public Endpoints Request */
    private function send_public_endpoint_request($request, $params = NULL)
    {
        $ch = curl_init();
        $query = "";

        if (count($params)) {
            $query = "?" . http_build_query($params);
        }

        $url = self::API_URL . $request . $query;

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, self::API_TIMEOUT);

        if (!$result = curl_exec($ch)) {
            return $this->curl_error($ch);
        } else {
            return $this->output($result, $this->is_bitfinex_error($ch), $request);
        }
    }

    /* Handle CURL errors */
    private function curl_error($ch)
    {
        if ($errno = curl_errno($ch)) {
            $error_message = curl_strerror($errno);
            echo "CURL err ({$errno}): {$error_message}";
            return false;
        }

        return true;
    }

    /* Handle Bitfinex errors - but may move this to output...*/
    private function is_bitfinex_error($ch)
    {
        $http_code = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if ($http_code !== 200) {
            return true;
        }

        return false;
    }

    /* Retrieve CURL response, if API err or RATE LIMIT hit, recall routine. Need to implement max retries. */
    private function output($result, $is_error = false, $command)
    {
        return json_decode($result, true);
    }

    /* Build URL path from functions */
    private function build_url_path($method, $params = NULL)
    {
        $parameters = "";

        if ($params !== NULL) {
            $parameters = "/";

            if (is_array($params)) {
                $parameters .= implode("/", $params);
            } else {
                $parameters .= $params;
            }
        }

        return "/$method$parameters";
    }

    /* End core api request functions */

    /* v2 api requests */

    /* API: Get Tickers - Ugly, need to fix this.*/
    public function get_tickers($symbols)
    {
        $request = $this->build_url_path("tickers", "?symbols=" . implode(",", $symbols));

        $tickers = $this->send_public_endpoint_request($request);
        $t = array();
        for ($z = 0; $z < count($tickers); $z++) {
            if (substr($tickers[$z][0], 0, 1) == "t") {
                $t[substr($tickers[$z][0], 1, strlen($tickers[$z][0]))]["last_price"] = $tickers[$z][7];
                $t[substr($tickers[$z][0], 1, strlen($tickers[$z][0]))]["ask"] = $tickers[$z][3];
            } elseif (substr($tickers[$z][0], 0, 1) == "f") {
                $t[substr($tickers[$z][0], 1, strlen($tickers[$z][0]))]["last_price"] = $tickers[$z][10];
                $t[substr($tickers[$z][0], 1, strlen($tickers[$z][0]))]["ask"] = $tickers[$z][5];
            }
        }

        return $t;
    }

    /* API: Get Orders */
    public function get_orders()
    {
        $request = $this->build_url_path("auth/r/orders");
        $data = array("request" => $request);

        $orders = $this->send_auth_endpoint_request($data);
        $o = array();
        for ($z = 0; $z < count($orders); $z++) {
            if (substr($orders[$z][3], 0, 1) == "t") {
                $sym_fix = substr($orders[$z][3], 1, strlen($orders[$z][3]));
                $o[$orders[$z][0]]["symbol"] = $sym_fix;
                $o[$orders[$z][0]]["type"] = $orders[$z][8];
                $o[$orders[$z][0]]["amount"] = $orders[$z][6];
                $o[$orders[$z][0]]["amount_orig"] = $orders[$z][7];
                $o[$orders[$z][0]]["price"] = "$" . $orders[$z][16];
                $o[$orders[$z][0]]["order_status"] = $orders[$z][13];
            }
        }

        return $o;
    }


    /**
     * Get account balance
     *
     * @return array[]
     */
    public function get_balances()
    {
        $request = $this->build_url_path("auth/r/wallets");
        $data = array("request" => $request);

        $balances = $this->send_auth_endpoint_request($data);

        return array_map(function ($item) {
            return [
                'asset' => $item[1],
                'free' => $item[2],
                'locked' => $item[4],
            ];
        }, $balances);
    }

    /* API: Get orders history - by symbol */
    public function get_orderhist($symbol)
    {
        $request = $this->build_url_path("auth/r/orders/" . $symbol . "/hist");
        $data = array("request" => $request);
        $balances = $this->send_auth_endpoint_request($data);
        //format data
        $b = array();
        $count = 0;
        for ($z = 0; $z < count($balances); $z++) {
            $b[$count]["id"] = $balances[$z][0];
            $b[$count]["gid"] = $balances[$z][1];
            $b[$count]["cid"] = $balances[$z][2];
            $b[$count]["symbol"] = $balances[$z][3];
            $b[$count]["created"] = $balances[$z][4];
            $b[$count]["updated"] = $balances[$z][5];
            $b[$count]["amount"] = $balances[$z][6];
            $b[$count]["amount_orig"] = $balances[$z][7];
            $b[$count]["type"] = $balances[$z][8];
            $b[$count]["type_prev"] = $balances[$z][9];
            $b[$count]["flags"] = $balances[$z][12];
            $b[$count]["order_status"] = $balances[$z][13];
            $b[$count]["price"] = number_format($balances[$z][16], 10);
            $b[$count]["price_avg"] = number_format($balances[$z][17], 10);
            $b[$count]["price_trailing"] = $balances[$z][18];
            $b[$count]["price_aux_limit"] = $balances[$z][19];
            $b[$count]["hidden"] = $balances[$z][24];
            $b[$count]["placed_id"] = $balances[$z][25];
            $b[$count]["routing"] = $balances[$z][28];
            $b[$count]["meta"] = $balances[$z][31];
            $count++;
        }
        return $b;
    }
}
