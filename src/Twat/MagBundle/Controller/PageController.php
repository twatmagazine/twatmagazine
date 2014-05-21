<?php

namespace Twat\MagBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('TwatMagBundle:Page:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('TwatMagBundle:Page:about.html.twig');
    }
}