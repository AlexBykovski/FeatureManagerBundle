<?php
namespace SNTeam\FeatureManagerBundle\Manager;

class FeatureManager
{
    /**
     * @var array
     */
    protected $features;

    /**
     * FeatureManager constructor.
     *
     * @param array $featuresFromConfigs
     */
    public function __construct($featuresFromConfigs)
    {
        $this->features = $featuresFromConfigs;
    }

    /**
     * @param $name
     *
     * @return boolean
     */
    public function isEnabled($name)
    {
        if(!array_key_exists($name, $this->features)){
            return false;
        }

        return $this->features[$name];
    }
}