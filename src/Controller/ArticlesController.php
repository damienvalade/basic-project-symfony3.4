<?php


namespace App\Controller;

use App\Entity\Articles;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    /**
     * @route("/article/{id_article}", name="app_view_article")
     * @param $id_article
     * @return Response|null
     */
    public function getArticle($id_article): Response
    {
        $article = $this->getDoctrine()->getRepository(Articles::class)->findOneBy(array("id" => $id_article));
        return $this->render('/article/article.html.twig',[
            "article" => $article
        ]);
    }
}