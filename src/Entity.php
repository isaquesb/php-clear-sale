<?php
namespace ClearSale;

use Simple\Hydrate;

abstract class Entity extends Hydrate\Entity
{
    /**
     * @param string|\DateTime $val
     * @return \DateTime|null
     */
    protected function asDateTimeVal($val)
    {
        if (is_null($val)) {
            return null;
        }
        if (is_string($val)) {
            $asDate = strlen($val) == 10;
            return \DateTime::createFromFormat('Y-m-d H:i:s', $asDate ? $val . ' 00:00:00' : $val);
        }
        return $val;
    }

    /**
     * @param string|int $val
     * @return \DateTime|null
     */
    protected function asInteger($val)
    {
        if (is_null($val)) {
            return null;
        }
        if (is_string($val)) {
            return intval($val);
        }
        return $val;
    }

    /**
     * @param string|float $val
     * @return float|null
     */
    protected function asDecimal($val)
    {
        if (is_null($val)) {
            return null;
        }
        if (is_string($val)) {
            return floatval($val);
        }
        return $val;
    }

    /**
     * @param string|int|bool $val
     * @return bool|null
     */
    protected function asBool($val)
    {
        if (is_null($val)) {
            return null;
        }
        if (!is_bool($val)) {
            return boolval($val);
        }
        return $val;
    }
}
