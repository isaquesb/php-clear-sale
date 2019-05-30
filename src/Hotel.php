<?php
namespace ClearSale;

class Hotel extends Entity
{
    /**
     * @var string
     */
    protected $name;

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
     * @var \DateTime
     */
    protected $reservationDate;

    /**
     * @var \DateTime
     */
    protected $reserveExpirationDate;

    /**
     * @var \DateTime
     */
    protected $checkInDate;

    /**
     * @var \DateTime
     */
    protected $checkOutDate;

    /**
     * @return \DateTime
     */
    public function getReservationDate()
    {
        return $this->asDateTimeVal($this->reservationDate);
    }

    /**
     * @return \DateTime
     */
    public function getReserveExpirationDate()
    {
        return $this->asDateTimeVal($this->reserveExpirationDate);
    }

    /**
     * @return \DateTime
     */
    public function getCheckInDate()
    {
        return $this->asDateTimeVal($this->checkInDate);
    }

    /**
     * @return \DateTime
     */
    public function getCheckOutDate()
    {
        return $this->asDateTimeVal($this->checkOutDate);
    }
}
