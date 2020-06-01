<?php

namespace App\Controller;

use App\Service\MarkdownHelper;
use App\Service\SlackClient;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class HomeController extends AbstractController
{



    /**
     * @Route("/", name="app_indexpage")
     */
    public function indexpage()
    {
        return $this->render('home/indexpage.html.twig');
    }


    /**
     * @Route("/Home", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('home/homepage.html.twig');
    }

    /**
     * @Route("/association", name="app_assopage")
     */
    public function assopage()
    {
        return $this->render('home/agencepage.html.twig');
    }

    /**
     * @Route("/disciplines", name="app_courspage")
     */
    public function courspage()
    {
        return $this->render('home/disciplinespage.html.twig');
    }

    /**
     * @Route("/planning", name="app_planningpage")
     */
    public function planningpage()
    {
        return $this->render('home/planningpage.html.twig');
    }


    /**
     * @Route("/tarifs_inscription", name="app_tarif_inscriptionpage")
     */
    public function tarif_inscriptionpage()
    {
        return $this->render('home/tarifs_inscription.html.twig');
    }

    /**
     * @Route("/contact", name="app_contactpage")
     */
    public function contactpage()
    {
        return $this->render('home/contact.html.twig');
    }




}
