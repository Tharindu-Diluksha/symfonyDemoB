<?php

namespace Application\ItemBundle\Controller;

use Application\ItemBundle\Entity\Students;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ApplicationItemBundle:Default:index.html.twig');
    }

    public function aboutAction()
    {

        $em =$this->getDoctrine()->getManager();

        $student = new Students();
        $student->setFirstname("asdasd");

        $em->persist($student);

        return $this->render('ApplicationItemBundle:Default:about.html.twig');
    }
}
