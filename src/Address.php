<?php
namespace ClearSale;

class Address extends Entity
{
    /**
     * @var string
     */
    protected $street;

    /**
     * @var string
     */
    protected $number;

    /**
     * @var string
     */
    protected $additionalInformation;

    /**
     * @var string
     */
    protected $county;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $zipcode;

    /**
     * @var string
     */
    protected $reference;
}
