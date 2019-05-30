<?php
namespace ClearSale;

class Passenger extends Entity
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $companyMileCard;

    /**
     * @var string
     */
    protected $mileCard;

    /**
     * @var int
     */
    protected $identificationType;

    /**
     * @var string
     */
    protected $identificationNumber;

    /**
     * @var string
     */
    protected $gender;

    /**
     * @var \DateTime
     */
    protected $birthdate;

    /**
     * @var string
     */
    protected $cpf;

    /**
     * @return int
     */
    public function getIdentificationType()
    {
        return $this->asInteger($this->identificationType);
    }

    /**
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->asDateTimeVal($this->birthdate);
    }
}
