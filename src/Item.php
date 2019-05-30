<?php
namespace ClearSale;

class Item extends Entity
{
    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var float
     */
    protected $value;

    /**
     * @var integer
     */
    protected $amount;

    /**
     * @var int
     */
    protected $categoryID;

    /**
     * @var string
     */
    protected $categoryName;

    /**
     * @var bool
     */
    protected $isGift;

    /**
     * @var string
     */
    protected $sellerName;

    /**
     * @var string
     */
    protected $isMarketPlace;

    /**
     * @var string
     */
    protected $shippingCompany;

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->asDecimal($this->value);
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->asInteger($this->amount);
    }

    /**
     * @return int
     */
    public function getCategoryID()
    {
        return $this->asInteger($this->categoryID);
    }

    /**
     * @return bool
     */
    public function getIsGift()
    {
        return $this->asBool($this->isGift);
    }
}
