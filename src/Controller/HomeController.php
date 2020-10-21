<?php

namespace App\Controller;

use App\Entity\Articles;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $articles = $this->getDoctrine()->getRepository(Articles::class);

        return $this->render('home/index.html.twig', [
            'articles' => $articles->findAll(),
        ]);
    }
}
