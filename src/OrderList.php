<?php
namespace ClearSale;

class OrderList extends Entity
{
    /**
     * @var integer
     */
    protected $typeID;

    /**
     * @var string
     */
    protected $id;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->asInteger($this->id);
    }
}
