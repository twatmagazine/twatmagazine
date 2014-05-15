<?php

namespace Twat\MagBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Twat\MagBundle\Entity\MyObject;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TwatMagBundle:Default:index.html.twig', array('name' => $name));
    }

    public function testAction($value)
    {
    	$myObject = new MyObject();
    	$myObject->setValue($value);

    	return $this->render('TwatMagBundle:Default:index.html.twig', array('name' => $myObject->getValue()));
    }
}
