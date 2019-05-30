<?php

date_default_timezone_set('America/Sao_Paulo');

require_once __DIR__ . '/../vendor/autoload.php';

$service = new ClearSale\Service\Orders(
    new \ClearSale\Ambient\Sandbox(),
    new \ClearSale\Auth\Login('', '')
);
try {
    $orderCode = 'ORDER_EXAMPLE_4000';
    print_r($service->statusUpdate($orderCode, \ClearSale\Status::STATUS_CANCELLED));
} catch (\ClearSale\Service\ServiceResponseException $exception) {
    echo $exception->getMessage();
}
