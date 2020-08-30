<?php

namespace App\Controller;

use App\Entity\Articles;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ArticlesController
 * @package App\Controller
 * @Route("/actualites", name="actualites_")
 */

class ArticlesController extends AbstractController
{
    /**
     * @Route("/", name="articles")
     */
    public function index()
    {
        // On appelle la liste de tous les articles
        $articles = $this->getDoctrine()->getRepository(Articles::class)->findAll();

        

        return $this->render('articles/index.html.twig', [
            'articles' => $articles
        ]);
    }

   /**
     * @Route("/article/a", name="articles")
     */

    public function article($slug){
        $articles = $this->getDoctrine()->getRepository(Articles::class)->findOneby([
            'slug' => $slug
        ]);

        if(!$articles){
            throw $this->createNotfoundException("l'article recherché n'existe pas");
        }

        $commentaire = new Commentaire();

        $form = $this->createForm(CommentaireFormType::class, $commentaire);
        return $this->render('articles/articles.html.twig', [
            'articles' => $articles,
            'commentForm' => $form->createView()
        ]);
    }
}
