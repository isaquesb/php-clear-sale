<?php
namespace ClearSale;

class Connection extends Entity
{
    /**
     * @var string
     */
    protected $company;

    /**
     * @var int
     */
    protected $identificationNumber;

    /**
     * @var \DateTime
     */
    protected $date;

    /**
     * @var string
     */
    protected $seatClass;

    /**
     * @var string
     */
    protected $origin;

    /**
     * @var string
     */
    protected $destination;

    /**
     * @var \DateTime
     */
    protected $boarding;

    /**
     * @var \DateTime
     */
    protected $arriving;

    /**
     * @var string
     */
    protected $fareClass;

    /**
     * @return int
     */
    public function getIdentificationNumber()
    {
        return $this->asInteger($this->identificationNumber);
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->asDateTimeVal($this->date);
    }

    /**
     * @return \DateTime
     */
    public function getBoarding()
    {
        return $this->asDateTimeVal($this->boarding);
    }

    /**
     * @return \DateTime
     */
    public function getArriving()
    {
        return $this->asDateTimeVal($this->arriving);
    }
}
