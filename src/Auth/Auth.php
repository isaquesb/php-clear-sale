<?php
namespace ClearSale\Auth;

use ClearSale\Service\AuthService;

interface Auth
{
    /**
     * @param AuthService $service
     * @return string
     */
    public function getToken(AuthService $service);
}
