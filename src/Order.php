<?php
namespace ClearSale;

class Order extends Entity
{
    const PRODUCT_OTHER = -1;
    const PRODUCT_APPLICATION = 1;
    const PRODUCT_TOTAL = 3;
    const PRODUCT_TOTAL_GUARANTEED = 4;
    const PRODUCT_SCORE = 9;
    const PRODUCT_REAL_TIME_DECISION = 10;
    const PRODUCT_TICKETS = 11;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $sessionID;

    /**
     * @var \DateTime
     */
    protected $date;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $b2bB2c;

    /**
     * @var float
     */
    protected $itemValue;

    /**
     * @var float
     */
    protected $totalValue;

    /**
     * @var integer
     */
    protected $numberOfInstallments;

    /**
     * @var string
     */
    protected $ip;

    /**
     * @var bool
     */
    protected $isGift;

    /**
     * @var string
     */
    protected $giftMessage;

    /**
     * @var string
     */
    protected $observation;

    /**
     * @var integer
     */
    protected $status;

    /**
     * @var string
     */
    protected $origin;

    /**
     * @var string
     */
    protected $channelID;

    /**
     * @var \DateTime
     */
    protected $reservationDate;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $nationality;

    /**
     * @var integer
     */
    protected $product;

    /**
     * @var integer
     */
    protected $customSla;

    /**
     * @var string
     */
    protected $bankAuthentication;

    /**
     * @var OrderList
     */
    protected $list;

    /**
     * @var PurchaseInformation
     */
    protected $purchaseInformation;

    /**
     * @var SocialNetwork
     */
    protected $socialNetwork;

    /**
     * @var Billing
     */
    protected $billing;

    /**
     * @var Shipping
     */
    protected $shipping;

    /**
     * @var Payment[]
     */
    protected $payments = [];

    /**
     * @var Item[]
     */
    protected $items = [];

    /**
     * @var Passenger[]
     */
    protected $passengers = [];

    /**
     * @var Connection[]
     */
    protected $connections = [];

    /**
     * @var Hotel[]
     */
    protected $hotels = [];

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->asDateTimeVal($this->date);
    }

    /**
     * @return float
     */
    public function getItemValue()
    {
        return $this->asDecimal($this->itemValue);
    }

    /**
     * @return float
     */
    public function getTotalValue()
    {
        return $this->asDecimal($this->totalValue);
    }

    /**
     * @return int
     */
    public function getNumberOfInstallments()
    {
        return $this->asInteger($this->numberOfInstallments);
    }

    /**
     * @return bool
     */
    public function getIsGift()
    {
        return $this->asBool($this->isGift);
    }

    /**
     * @return \DateTime
     */
    public function getReservationDate()
    {
        return $this->asDateTimeVal($this->reservationDate);
    }

    /**
     * @return int
     */
    public function getProduct()
    {
        return $this->asInteger($this->product);
    }

    /**
     * @return int
     */
    public function getCustomSla()
    {
        return $this->asInteger($this->customSla);
    }

    /**
     * @return OrderList
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @return PurchaseInformation
     */
    public function getPurchaseInformation()
    {
        return $this->purchaseInformation;
    }

    /**
     * @return SocialNetwork
     */
    public function getSocialNetwork()
    {
        return $this->socialNetwork;
    }

    /**
     * @return Billing
     */
    public function getBilling()
    {
        return $this->billing;
    }

    /**
     * @return Shipping
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @return Payment[]
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * @return Item[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return Passenger[]
     */
    public function getPassengers()
    {
        return $this->passengers;
    }

    /**
     * @return Connection[]
     */
    public function getConnections()
    {
        return $this->connections;
    }

    /**
     * @return Hotel[]
     */
    public function getHotels()
    {
        return $this->hotels;
    }

    /**
     * @param OrderList $list
     */
    public function setList(OrderList $list = null)
    {
        $this->list = $list;
    }

    /**
     * @param PurchaseInformation $purchaseInformation
     */
    public function setPurchaseInformation(PurchaseInformation $purchaseInformation = null)
    {
        $this->purchaseInformation = $purchaseInformation;
    }

    /**
     * @param SocialNetwork $socialNetwork
     */
    public function setSocialNetwork(SocialNetwork $socialNetwork = null)
    {
        $this->socialNetwork = $socialNetwork;
    }

    /**
     * @param Billing $billing
     */
    public function setBilling(Billing $billing = null)
    {
        $this->billing = $billing;
    }

    /**
     * @param Shipping $shipping
     */
    public function setShipping(Shipping $shipping = null)
    {
        $this->shipping = $shipping;
    }

    /**
     * @param Payment[] $payments
     */
    public function setPayments(array $payments = [])
    {
        foreach ($payments as $payment) {
            if (!($payment instanceof Payment)) {
                throw new \UnexpectedValueException('Invalid Payment Object');
            }
        }
        $this->payments = $payments;
    }

    /**
     * @param Item[] $items
     */
    public function setItems(array $items = [])
    {
        foreach ($items as $item) {
            if (!($item instanceof Item)) {
                throw new \UnexpectedValueException('Invalid Item Object');
            }
        }
        $this->items = $items;
    }

    /**
     * @param Passenger[] $passengers
     */
    public function setPassengers(array $passengers = [])
    {
        foreach ($passengers as $passenger) {
            if (!($passenger instanceof Passenger)) {
                throw new \UnexpectedValueException('Invalid Passenger Object');
            }
        }
        $this->passengers = $passengers;
    }

    /**
     * @param Connection[] $connections
     */
    public function setConnections(array $connections = [])
    {
        foreach ($connections as $connection) {
            if (!($connection instanceof Connection)) {
                throw new \UnexpectedValueException('Invalid Connection Object');
            }
        }
        $this->connections = $connections;
    }

    /**
     * @param Hotel[] $hotels
     */
    public function setHotels(array $hotels = [])
    {
        foreach ($hotels as $hotel) {
            if (!($hotel instanceof Hotel)) {
                throw new \UnexpectedValueException('Invalid Hotel Object');
            }
        }
        $this->hotels = $hotels;
    }
}
