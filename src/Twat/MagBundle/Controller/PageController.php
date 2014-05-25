<?php

namespace Twat\MagBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Twat\MagBundle\Entity\Enquiry;
use Twat\MagBundle\Form\EnquiryType;

class PageController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()
                   ->getEntityManager();

        $blogs = $em->getRepository('TwatMagBundle:Blog')
                    ->getLatestBlogs();

        return $this->render('TwatMagBundle:Page:index.html.twig', array(
            'blogs' => $blogs
        ));
    }

    public function aboutAction()
    {
        return $this->render('TwatMagBundle:Page:about.html.twig');
    }

	public function contactAction()
	{
	    $enquiry = new Enquiry();
	    $form = $this->createForm(new EnquiryType(), $enquiry);

	    $request = $this->getRequest();
	    if ($request->getMethod() == 'POST') {
	        $form->submit($request);

	        if ($form->isValid()) {
	            return $this->redirect($this->generateUrl('TwatMagBundle_contact'));
	        }
	    }

	    return $this->render('TwatMagBundle:Page:contact.html.twig', array(
	        'form' => $form->createView()
	    ));
	}
}