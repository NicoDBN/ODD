<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('pages/index.html.twig', [
            'title' => 'HOME',
            'text' => 'Lorem home coucou',
        ]);
    }
     /**
     * @Route("/aboire", name="aboire")
     */
    public function aboire(): Response
    {
        return $this->render('pages/aboire.html.twig', [
            'title' => 'A BOIRE',
            'text' => 'Lorem mentions coucou',
        ]);
    }
    /**
     * @Route("/letsplay", name="letsplay")
     */
    public function letsplay(): Response
    {
        return $this->render('pages/letsplay.html.twig', [
            'title' => 'LET\'S PLAY',
            'text' => 'Lorem contact coucou',
        ]);
    }

    /**
     * @Route("/team", name="team")
     */

    public function team(): Response
    {
        return $this->render('pages/team.html.twig', [
            'title' => 'TEAM',
            'text' => 'Lorem contact coucou',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('pages/contact.html.twig', [
            'title' => 'CONTACT',
            'text' => 'Lorem contact coucou',
        ]);
    }
    
  
    
}
