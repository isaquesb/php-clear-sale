<?php
namespace ClearSale\Service;

use ClearSale\Ambient\Ambient;
use ClearSale\Auth\Auth;
use Simple\Http\Request\Adapter\AdapterInterface;
use Simple\Http\Request\Adapter\CurlAdapter;

abstract class Service
{
    /**
     * @var Ambient
     */
    protected $ambient;

    /**
     * @var Auth
     */
    protected $auth;

    /**
     * @var AdapterInterface
     */
    protected $adapter;

    /**
     * Client constructor.
     * @param Ambient $ambient
     * @param Auth $auth
     * @param AdapterInterface|null $adapter
     */
    public function __construct(Ambient $ambient, Auth $auth, AdapterInterface $adapter = null)
    {
        if (is_null($adapter)) {
            $adapter = new CurlAdapter([]);
        }
        $this->ambient = $ambient;
        $this->auth = $auth;
        $this->adapter = $adapter;
    }
}
