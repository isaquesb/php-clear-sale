<?php
namespace ClearSale;

class Card extends Entity
{
    const DINERS = 1;
    const MASTERCARD = 2;
    const VISA = 3;
    const OTHERS = 4;
    const AMERICAN_EXPRESS = 5;
    const HIPERCARD = 6;
    const AURA = 7;
    const ELO_CARD = 10;
    const LEADER_CARD = 50;
    const FORTBRASIL = 100;
    const SOROCRED = 101;
    const DEBIT_CARD = 102;
    const MAIS_CARD = 103;
    const CSA_CARD = 105;

    /**
     * @var string
     */
    protected $number;

    /**
     * @var string
     */
    protected $hash;

    /**
     * @var string
     */
    protected $bin;

    /**
     * @var string
     */
    protected $end;

    /**
     * @var int
     */
    protected $type;

    /**
     * @var string
     */
    protected $validityDate;

    /**
     * @var string
     */
    protected $ownerName;

    /**
     * @var string
     */
    protected $document;

    /**
     * @var string
     */
    protected $nsu;

    /**
     * @return int
     */
    public function getType()
    {
        return $this->asInteger($this->type);
    }
}
