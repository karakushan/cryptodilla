<?php


namespace App\Services;

use App\Models\UserExchange;

class ExchangeConnector
{
    /**
     * Подключает биржу в зависимости от параметра $exchange
     *
     * @param string $exchange
     * @param UserExchange|null $account
     * @return Binance|Kraken|Poloniex
     */
    public function connect(string $exchange, UserExchange $account = null)
    {
        switch ($exchange) {
            case 'binance':
                return new Binance($account);
            case 'kraken':
                return new Kraken($account);
            case 'poloniex':
                return new Poloniex($account);
            default:
                return abort(419, __('Exchange not found!'));
        }
    }

}
