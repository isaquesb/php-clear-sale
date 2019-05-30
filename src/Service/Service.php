<?php
namespace ClearSale\Service;

use ClearSale\Ambient\Ambient;
use ClearSale\Auth\Auth;
use Simple\Http\Request\Adapter\AdapterInterface;
use Simple\Http\Request\Adapter\CurlAdapter;
use Simple\Http\Request\Request;

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
     * @var Request
     */
    protected $request;

    /**
     * @var string
     */
    protected $token;

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

    public function token()
    {
        $authService = new AuthService($this->ambient, $this->auth, $this->adapter);
        $this->token = $this->auth->getToken($authService);
    }

    /**
     * @param array $params
     * @return ServiceParameters
     */
    protected function parameters($params)
    {
        return new ServiceParameters($params);
    }

    /**
     * @return Request
     */
    protected function request()
    {
        if (!is_null($this->request)) {
            return $this->request;
        }
        return $this->request = new Request($this->adapter);
    }

    /**
     * @throws ServiceResponseException
     * @param string $description
     * @param string $method
     * @param string $uri
     * @param ServiceParameters|null $parameters
     * @return array
     */
    protected function doRequest($description, $method, $uri, ServiceParameters $parameters = null)
    {
        $request = $this->request();
        if (!$this->token && !($this instanceof AuthService)) {
            $this->token();
            $request->setHeaders([
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $this->token,
            ]);
        }
        $request->setTimeout(30);
        $response = $request->$method($this->ambient->getUri() . $uri, $parameters ?: []);
        $status = $response->getHttpStatus();
        $body = $response->getRawBody();
        if ($status != 200) {
            $errors = print_r($response->getErrors(), 1);
            throw new ServiceResponseException($description . ' Failed: ' . $status . ' - ' . $body . ' - '. $errors);
        }
        return json_decode($body, true);
    }
}
