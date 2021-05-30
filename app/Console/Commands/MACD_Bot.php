<?php

namespace App\Console\Commands;

use App\Traits\Binance;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Workerman\Worker;
use Binance\API;

class MACD_Bot extends Command
{
    use Binance;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bot:macd {symbol} {interval}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    protected $max_orders = 1;
    protected $open_orders = [];
    protected $symbol = 'BNBBUSD';
    protected $take_profit = 20;
    protected $interval = 20;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();


    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if ($this->argument('symbol')) {
            $this->symbol = $this->argument('symbol');
        }

        if ($this->argument('interval')) {
            $this->interval = $this->argument('interval');
        }

        $api = new API($this->getApiKey(), $this->getApiSecret(), true);
        $this->open_orders = $api->openOrders($this->symbol);
        $ticks = $api->candlesticks($this->symbol, $this->interval, 200);
//        $ticks = array_values(array_map(function ($item) {
//            return $item['close'];
//        }, $ticks));
        dd(Carbon::parse(last($ticks)['closeTime']/1000)->format('d.m.Y H:i'));
//        print_r(trader_macd($ticks, 12, 26, 9));

        $ticker = $api->prices();
        $balances = $api->balances($ticker);
        $balances = array_map(function ($item, $key) {
            return array_merge([$key], $item);
        }, $balances, array_keys($balances));


        $this->table(
            ['Symbol', 'available', 'onOrder', 'btcValue', 'btcTotal'],
            $balances
        );

//        $api->cancelOpenOrders($this->symbol);

        $api->kline([$this->symbol], $this->interval, function ($api, $symbol, $chart) {
            $interval = $chart->i;
            $tick = $chart->t;
            $open = $chart->o;
            $high = $chart->h;
            $low = $chart->l;
            $close = $chart->c;
            $volume = $chart->q; // +trades buyVolume assetVolume makerVolume
//            $this->line("{$symbol} price: {$close} volume: {$volume}");
            $this->line(json_encode($chart));

            // Открываем ордер если к-во ордеров меньше $this->max_orders
            if (count($this->open_orders) < $this->max_orders) {
                $quantity = 0.1;
                $api->buy($symbol, $quantity, $close, 'TAKE_PROFIT_LIMIT', [
                    'stopPrice' => $close - $this->take_profit
                ]);
            }

            $this->open_orders = $api->openOrders($symbol);
            if (!empty($this->open_orders)) {
                $this->info('Открытые ордера:' . count($this->open_orders));
                foreach ($this->open_orders as $order)
                    $this->info(sprintf('[#%s], symbol:%s, side:%s, type:%s, "price:%s, stopPrice:%s ',
                            $order['orderId'],
                            $symbol,
                            $order['side'],
                            $order['type'],
                            $order['price'],
                            $order['stopPrice'])
                    );
            }

        });

    }


}
