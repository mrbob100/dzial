<?php

namespace VL\CarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VLCarBundle:Default:index.html.twig', array('name' => $name));
    }
}
