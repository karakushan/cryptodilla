<?php


namespace App\Services;

class ExchangeConnector
{
    public function connect($exchange, $account_id = null)
    {
        switch ($exchange) {
            case 'binance':
                return new Binance($account_id);
                break;
            default:

                break;
        }
    }

}
