<?php

namespace Twat\MagBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
	public function indexAction($word)
	{
		return $this->render('TwatMagBundle:Default:blog.html.twig', array('word' => $word, 'anotherWord' => 'balls'));
	}

	public function addAction($numberOne, $numberTwo)
	{
		$numberThree = $numberOne + $numberTwo;
		return $this->render('TwatMagBundle:Default:numberyaddadd.html.twig', array('numberFun' => $numberThree));
	}
}


