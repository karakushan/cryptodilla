<?php


namespace App\Services;


interface ExchangeInterface
{
    /**
     * @return mixed
     */
    public function account();

    /**
     * @return mixed
     */
    public function exchangeInfo();

    public function createOrder(array $data);

    public function cancelOrder($order_id, $symbol = '');

    public function cancelAllOrders();

    /**
     * @param string $symbol
     * @return mixed
     */
    public function getAllOrders(string $symbol);
}
