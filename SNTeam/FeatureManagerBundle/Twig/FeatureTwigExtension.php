<?php

namespace SNTeam\FeatureManagerBundle\Twig;

use Twig_SimpleFunction;
use SNTeam\FeatureManagerBundle\Manager\FeatureManager;

class FeatureTwigExtension extends \Twig_Extension
{
    /**
     * @var FeatureManager
     */
    protected $featureManager;

    /**
     * FeatureTwigExtension constructor.
     *
     * @param FeatureManager $featureManager
     */
    public function __construct($featureManager)
    {
        $this->featureManager = $featureManager;
    }

    public function getFunctions() {
        return array(
            new Twig_SimpleFunction('is_feature_enabled', array($this, 'checkEnabledFeature'))
        );
    }

    public function checkEnabledFeature($name) {
        return $this->featureManager->isEnabled($name);
    }

    public function getName() {
        return "is_feature_enabled";
    }
}