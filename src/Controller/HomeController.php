<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/qui-sommes-nous", name="qui-sommes-nous")
     */
    public function QuiSommesNous()
    {
        return $this->render('home/sommes.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/prestations", name="prestations")
     */
    public function Prestations()
    {
        return $this->render('home/prestations.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function Contact()
    {
        return $this->render('home/contact.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
