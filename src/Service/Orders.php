<?php
namespace ClearSale\Service;

use ClearSale\Order;

class Orders extends Service
{
    /**
     * @param Order $order
     * @return array
     */
    public function send(Order $order)
    {
        $params = $this->parameters($order);
        return $this->doRequest('Send Order', 'post', '/orders', $params);
    }

    /**
     * @param string $orderCode
     * @return array
     */
    public function statusCheck($orderCode)
    {
        return $this->doRequest('Check Status', 'get', '/orders/' . $orderCode . '/status');
    }

    /**
     * @param string $orderCode
     * @param string $orderStatus
     * @return array
     */
    public function statusUpdate($orderCode, $orderStatus)
    {
        $params = $this->parameters(['status' => $orderStatus]);
        return $this->doRequest('Status Update', 'put', '/orders/' . $orderCode . '/status', $params);
    }

    /**
     * @param array $orderCodes
     * @param string $message
     * @return array
     */
    public function chargeBack(array $orderCodes, $message)
    {
        $codes = [];
        foreach ($orderCodes as $code) {
            $codes[] = (string) $code;
        }
        $params = $this->parameters([
            'message' => $message,
            'orders' => $codes
        ]);
        return $this->doRequest('Charge Back', 'post', '/chargeback', $params);
    }
}
