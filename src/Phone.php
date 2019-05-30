<?php
namespace ClearSale;

class Phone extends Entity
{
    const UNDEFINED = 0;
    const HOME = 1;
    const WORK = 2;
    const MESSAGES = 3;
    const BILLING = 4;
    const TEMPORARY = 5;
    const MOBILE = 6;

    /**
     * @var int
     */
    protected $type;

    /**
     * @var int
     */
    protected $ddi;

    /**
     * @var int
     */
    protected $ddd;

    /**
     * @var int
     */
    protected $number;

    /**
     * @var string
     */
    protected $extension;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->asInteger($this->type);
    }

    /**
     * @return int
     */
    public function getDdi()
    {
        return $this->asInteger($this->ddi);
    }

    /**
     * @return int
     */
    public function getDdd()
    {
        return $this->asInteger($this->ddd);
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->asInteger($this->number);
    }

    /**
     * @param int $type
     */
    public function setType($type)
    {
        if ($type < self::UNDEFINED || $type > self::MOBILE) {
            throw new \InvalidArgumentException('Invalid Phone Type: ' . $type);
        }
        $this->type = $type;
    }
}
