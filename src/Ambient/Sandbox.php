<?php
namespace ClearSale\Ambient;

class Sandbox implements Ambient
{
    /**
     * @return string
     */
    public function getUri()
    {
        return 'https://homologacao.clearsale.com.br/api/v1';
    }
}
