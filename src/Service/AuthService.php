<?php
namespace ClearSale\Service;

use ClearSale\Auth\Token;

class AuthService extends Service
{
    /**
     * @param string $login
     * @param string $password
     * @return Token
     */
    public function getToken($login, $password)
    {
        $params = $this->parameters([
            'name' => $login,
            'password' => $password
        ]);
        $body = $this->doRequest('Request Token', 'post', '/authenticate', $params);
        return new Token($body['Token'], new \DateTime($body['ExpirationDate']));
    }
}
