<?php
namespace ClearSale\Auth;

use ClearSale\Service\AuthService;

class Login implements Auth
{
    /**
     * @var string
     */
    protected $login;

    /**
     * @var string
     */
    protected $password;

    /**
     * Auth constructor.
     * @param string $login
     * @param string $password
     */
    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * @param AuthService $service
     * @return string
     */
    public function getToken(AuthService $service)
    {
        $token = $service->getToken($this->login, $this->password);
        return $token->getToken($service);
    }
}
