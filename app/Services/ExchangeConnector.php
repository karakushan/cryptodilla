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
            case 'kraken':
                return new Kraken($account_id);
                break;

            case 'poloniex':
                return new Poloniex($account_id);
                break;
            default:
                break;
        }
    }

}
