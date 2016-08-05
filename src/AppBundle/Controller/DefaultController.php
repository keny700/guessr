<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/login.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    public function homeAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/home.html.twig');
    }

    public function mission1Action(Request $request)
    {
        

        return $this->render('default/mission1.html.twig');
    }
    public function mission2Action(Request $request)
    {
        

        return $this->render('default/mission2.html.twig');
    }
    public function mission3Action(Request $request)
    {
        

        return $this->render('default/mission3.html.twig');
    }
    public function mission4Action(Request $request)
    {
        

        return $this->render('default/mission4.html.twig');
    }
    public function map1Action(Request $request)
    {
        

        return $this->render('default/map1.html.twig');
    }
    public function map2Action(Request $request)
    {
        

        return $this->render('default/map2.html.twig');
    }
    public function map3Action(Request $request)
    {
        

        return $this->render('default/map3.html.twig');
    }
    public function map4Action(Request $request)
    {
        

        return $this->render('default/map4.html.twig');
    }
}
