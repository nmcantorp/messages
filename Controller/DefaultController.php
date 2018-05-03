<?php

namespace Qualityco\MessagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('QualitycoMessagesBundle:Default:index.html.twig');
    }
}
