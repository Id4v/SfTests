<?php

namespace Id4v\Bundle\CMSStarterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('Id4vCMSStarterBundle:Default:index.html.twig');
    }
}
