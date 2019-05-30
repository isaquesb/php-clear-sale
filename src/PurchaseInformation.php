<?php
namespace ClearSale;

class PurchaseInformation extends Entity
{
    /**
     * @var \DateTime
     */
    protected $lastDateInsertedMail;

    /**
     * @var \DateTime
     */
    protected $lastDateChangePassword;

    /**
     * @var \DateTime
     */
    protected $lastDateChangePhone;

    /**
     * @var \DateTime
     */
    protected $lastDateChangeMobilePhone;

    /**
     * @var \DateTime
     */
    protected $lastDateInsertedAddress;

    /**
     * @var bool
     */
    protected $purchaseLogged;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $login;

    /**
     * @return \DateTime
     */
    public function getLastDateInsertedMail()
    {
        return $this->asDateTimeVal($this->lastDateInsertedMail);
    }

    /**
     * @return \DateTime
     */
    public function getLastDateChangePassword()
    {
        return $this->asDateTimeVal($this->lastDateChangePassword);
    }

    /**
     * @return \DateTime
     */
    public function getLastDateChangePhone()
    {
        return $this->asDateTimeVal($this->lastDateChangePhone);
    }

    /**
     * @return \DateTime
     */
    public function getLastDateChangeMobilePhone()
    {
        return $this->asDateTimeVal($this->lastDateChangeMobilePhone);
    }

    /**
     * @return \DateTime
     */
    public function getLastDateInsertedAddress()
    {
        return $this->asDateTimeVal($this->lastDateInsertedAddress);
    }

    /**
     * @return bool
     */
    public function getPurchaseLogged()
    {
        return $this->asBool($this->purchaseLogged);
    }
}
