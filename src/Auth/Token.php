<?php
namespace ClearSale\Auth;

class Token implements Auth
{
    /**
     * @var string
     */
    protected $token;

    /**
     * @var \DateTime
     */
    protected $expirationDate;

    /**
     * Auth constructor.
     * @param string $token
     * @param \DateTime $expirationDate
     */
    public function __construct($token, \DateTime $expirationDate)
    {
        $this>$token = $token;
        $this->expirationDate = $expirationDate;
    }

    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
}
