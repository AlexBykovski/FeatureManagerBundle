<?php

namespace SNTeam\FeatureManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FeatureManagerBundle:Default:index.html.twig');
    }
}
