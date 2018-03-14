<?php

namespace MyApp\EducBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EducBundle:Default:index.html.twig');
    }
    public function pageAction()
    {
        return $this->render('EducBundle:Default:page_une.html.twig');
    }
    public function layoutAction()
    {
        return $this->render('EducBundle::layout.html.twig');
    }
}
