<?php
namespace ClearSale;

class Shipping extends Billing
{
    /**
     * @var string
     */
    protected $deliveryType;

    /**
     * @var string
     */
    protected $deliveryTime;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var string
     */
    protected $pickUpStoreDocument;

    /**
     * @return int
     */
    public function getDeliveryType()
    {
        return (string) $this->deliveryType;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->asDecimal($this->price);
    }

    /**
     * @param string $deliveryType
     */
    public function setDeliveryType($deliveryType)
    {
        if ($deliveryType < Delivery::OTHERS || $deliveryType > Delivery::WITHDRAWL_AT_STORE_EXPRESS) {
            throw new \InvalidArgumentException('Invalid Delivery Type: ' . $deliveryType);
        }
        $this->deliveryType = $deliveryType;
    }
}
