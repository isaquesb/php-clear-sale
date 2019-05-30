<?php
namespace ClearSale\Auth;

use ClearSale\Service\AuthService;

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
        $this->token = $token;
        $this->expirationDate = $expirationDate;
    }

    /**
     * @param AuthService $service
     * @return string
     */
    public function getToken(AuthService $service)
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
