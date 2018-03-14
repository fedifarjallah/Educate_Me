<?php

namespace MyApp\EducateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EducateBundle:Default:index.html.twig');
    }
}
