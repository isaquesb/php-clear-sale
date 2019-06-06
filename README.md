# SDK

ClearSale PHP SDK
 
### Requirements

- PHP >= 5.4

### Install

```
composer require isaquesb/clear-sale-php-sdk
```

### Usage
```php
$service = new ClearSale\Service\Orders(
    new \ClearSale\Ambient\Sandbox(),
    new \ClearSale\Auth\Login($login, $pass)
);
try {
    $orderCode = 'ORDER_EXAMPLE_4000';
    $order = new \ClearSale\Order([
        'code' => $orderCode,
        'sessionID' => md5(uniqid('session')),
        'date' => '2019-05-22 13:38:59',
        'email' => 'email@email.com.br',
        'totalValue' => 15.00,
        'numberOfInstallments' => 1,
        'ip' => '192.168.0.1',
        'billing' => new \ClearSale\Billing([
            'clientID' => 'Client123',
            'type' => \ClearSale\Billing::PERSON_NATURAL,
            'primaryDocument' => '12345678910',
            'secondaryDocument' => '12345678',
            'name' => 'Complete Client Name',
            'birthDate' => '1990-01-10',
            'email' => 'email@email.com.br',
            'gender' => \ClearSale\Gender::MALE,
            'address' => new \ClearSale\Address([
                'street' => 'Street name example',
                'number' => '100',
                'additionalInformation' => 'Additional information example',
                'county' => 'County Example',
                'city' => 'City Example',
                'state' => 'SP',
                'zipcode' => '12345678',
                'country' => 'Brasil',
                'reference' => 'Address reference example'
            ]),
            'phones' => [
                new \ClearSale\Phone([
                    'type' => \ClearSale\Phone::HOME,
                    'ddi' => 55,
                    'ddd' => 11,
                    'number' => 33333333
                ])
            ]
        ]),
        'shipping' => new \ClearSale\Shipping([
            'clientID' => 'Client123',
            'type' => 1,
            'primaryDocument' => '12345678910',
            'secondaryDocument' => '12345678',
            'name' => 'Complete Client Name',
            'birthDate' => '1990-01-10',
            'email' => 'email@email.com.br',
            'gender' => \ClearSale\Gender::MALE,
            'address' => new \ClearSale\Address([
                'street' => 'Street name example',
                'number' => '100',
                'additionalInformation' => 'Additional information example',
                'county' => 'County Example',
                'city' => 'City Example',
                'state' => 'SP',
                'zipcode' => '12345678',
                'country' => 'Brasil',
                'reference' => 'Address reference example'
            ]),
            'phones' => [
                new \ClearSale\Phone([
                    'type' => 1,
                    'ddi' => 55,
                    'ddd' => 11,
                    'number' => 33333333,
                    'extension' => '1111'
                ])
            ],
            'deliveryType' => \ClearSale\Delivery::NORMAL,
            'deliveryTime' => '2 dias úteis',
            'price' => 5,
            'pickUpStoreDocument' => '12345678910'
        ]),
        'payments' => [
            new \ClearSale\Payment([
                'sequential' => 1,
                'date' => '2019-05-25 22:36:53',
                'value' => 25.00,
                'type' => 1,
                'installments' => 1,
                'interestRate' => 10,
                'interestValue' => 2.00,
                'currency' => 986,
                'voucherOrderOrigin' => '123456',
                'card' => new \ClearSale\Card([
                    'bin' => '123456',
                    'end' => '1234',
                    'type' => \ClearSale\Card::DINERS,
                    'validityDate' => '02/2021',
                    'ownerName' => 'Owner Card Name',
                    'document' => '12345678910'
                ]),
                'address' => new \ClearSale\Address([
                    'street' => 'Street name example',
                    'number' => '10',
                    'additionalInformation' => 'Additional information example',
                    'county' => 'County Example',
                    'city' => 'City Example',
                    'state' => 'SP',
                    'zipcode' => '12345678',
                    'country' => 'Brasil',
                    'reference' => 'Address reference example'
                ])
            ])
        ],
        'items' => [
            new \ClearSale\Item([
                'code' => 'Item Code',
                'name' => 'Item description',
                'value' => 10,
                'amount' => 1,
                'categoryID' => 1,
                'categoryName' => 'Item category name',
            ])
        ]
    ]);
    $send = $service->send($order);
    print_r($send);
    print_r($service->statusCheck($orderCode));
} catch (\ClearSale\Service\ServiceResponseException $exception) {
    echo $exception->getMessage();
}
```