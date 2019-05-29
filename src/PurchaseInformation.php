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
}
