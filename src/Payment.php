<?php
namespace ClearSale;

class Payment extends Entity
{
    const TYPE_CREDIT_CARD = 1;
    const TYPE_BANK_SLEEP = 2;
    const TYPE_BANK_DEBIT = 3;
    const TYPE_BANK_DEBIT_MONEY = 4;
    const TYPE_BANK_DEBIT_CHECK = 5;
    const TYPE_BANK_TRANSFER = 6;
    const TYPE_SEDEX = 7;
    const TYPE_CHECK = 8;
    const TYPE_MONEY = 9;
    const TYPE_FINANCING = 10;
    const TYPE_INVOICE = 11;
    const TYPE_COUPON = 12;
    const TYPE_MULTICHEQUE = 13;
    const TYPE_OTHER = 14;
    const TYPE_VOUCHER = 16;
    const TYPE_VIRTAL_GIFT_CARD = 1041;
    const TYPE_DEBIT_CARD = 4011;
    const TYPE_ELETRONIC_TRANSFER = 4011;

    /**
     * @var int
     */
    protected $sequential;

    /**
     * @var \DateTime
     */
    protected $date;

    /**
     * @var float
     */
    protected $value;

    /**
     * @var integer
     */
    protected $type;

    /**
     * @var integer
     */
    protected $installments;

    /**
     * @var float
     */
    protected $interestRate;

    /**
     * @var float
     */
    protected $interestValue;

    /**
     * @var integer
     */
    protected $currency;

    /**
     * @var string
     */
    protected $voucherOrderOrigin;

    /**
     * @var Address
     */
    protected $address;

    /**
     * @var Card
     */
    protected $card;

    /**
     * @return int
     */
    public function getSequential()
    {
        return $this->asInteger($this->sequential);
    }

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
    public function getValue()
    {
        return $this->asDecimal($this->value);
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->asInteger($this->type);
    }

    /**
     * @return int
     */
    public function getInstallments()
    {
        return $this->asInteger($this->installments);
    }

    /**
     * @return float
     */
    public function getInterestRate()
    {
        return $this->asDecimal($this->interestRate);
    }

    /**
     * @return float
     */
    public function getInterestValue()
    {
        return $this->asDecimal($this->interestValue);
    }

    /**
     * @return int
     */
    public function getCurrency()
    {
        return $this->asInteger($this->currency);
    }

    /**
     * @param Address $address
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;
    }

    /**
     * @param Card $card
     */
    public function setCard(Card $card)
    {
        $this->card = $card;
    }
}
