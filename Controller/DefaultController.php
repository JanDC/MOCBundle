<?php

namespace Jan\MOCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
     public function indexAction()
    {
        return $this->render('JanMOCBundle:Default:index.html.twig', array('name' => md5(rand(0,time()))));
    }
}
