<?php
namespace ClearSale\Auth;

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

    public function getToken()
    {

    }
}
