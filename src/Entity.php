<?php
namespace ClearSale;

use Simple\Hydrate;

abstract class Entity
{
    use Hydrate\HydrateTrait, Hydrate\HydrateProtectedTrait {
        Hydrate\HydrateProtectedTrait::hydrate insteadof Hydrate\HydrateTrait;
    }

    /**
     * Constructor
     * @param array|string $data
     */
    public function __construct($data = [])
    {
        if (is_array($data)) {
            $this->hydrate($data);
        }
    }

    /**
     * @return array
     */
    public function toJson()
    {
        $data = $this->toArray();
        foreach ($data as $key => $value) {
            if ($value instanceof \DateTime) {
                $value = str_replace(' ', 'T', $value->format('Y-m-d H:i:s'));
            } elseif ($value instanceof Entity) {
                $value = $value->toJson();
            } elseif (is_array($value)) {
                $newValue = [];
                foreach ($value as $row) {
                    if ($row instanceof Entity) {
                        $newValue[] = $row->toJson();
                    } else {
                        $newValue[] = $row;
                    }
                }
                $value = $newValue;
            }
            $data[$key] = $value;
        }
        $filtered = array_filter($data);
        if (!count($filtered)) {
            return null;
        }
        return $filtered;
    }

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
