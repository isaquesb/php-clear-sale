<?php
namespace ClearSale\Service;

use ClearSale\Entity;

class ServiceParameters implements \JsonSerializable
{
    /**
     * @var array|Entity
     */
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    function jsonSerialize()
    {
        if (is_array($this->data)) {
            return $this->data;
        }
        if ($this->data instanceof Entity) {
            return $this->data->toJson();
        }
        return null;
    }
}
