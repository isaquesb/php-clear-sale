<?php
namespace ClearSale;

class SocialNetwork extends Entity
{
    const FACEBOOK = 1;
    const TWITTER = 2;
    const LINKEDIN = 3;
    const GOOGLE = 4;
    const OTHERS = 5;

    /**
     * @var int
     */
    protected $optInCompreConfie;

    /**
     * @var int
     */
    protected $typeSocialNetwork;

    /**
     * @var string
     */
    protected $authenticationToken;

    /**
     * @return int
     */
    public function getOptInCompreConfie()
    {
        return $this->asInteger($this->optInCompreConfie);
    }

    /**
     * @return int
     */
    public function getTypeSocialNetwork()
    {
        return $this->asInteger($this->typeSocialNetwork);
    }
}
