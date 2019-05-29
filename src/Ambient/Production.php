<?php
namespace ClearSale\Ambient;

class Production implements Ambient
{
    /**
     * @return string
     */
    public function getUri()
    {
        return 'https://api.clearsale.com.br/v1';
    }
}
