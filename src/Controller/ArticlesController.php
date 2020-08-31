<?php

namespace App\Controller;

use App\Entity\Comments;
use App\Controller\Request;
use App\Entity\Articles;
use App\Form\CommentaireFormType;
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
     * @Route("/articlesa/{slug}", name="articlesa")
     */

    public function article($slug, Request $request){
        $articles = $this->getDoctrine()->getRepository(Articles::class)->findOneby([
            'id' => $slug
        ]);

        if(!$articles){
            throw $this->createNotfoundException("l'article recherché n'existe pas");
        }
       
        // on instancie l'entité commentaires
        $commentaire = new Comments();

        // création de l'objet formulaire
        $form = $this->createForm(CommentaireFormType::class, $commentaire);

        // on récupère les données saisies
        $form->handleRequest($request);

        // On vérifie si le formulaire a été envoyé et si les données sont valide
        if($form->isSubmitted()  && $form->isValid()){
            $commentaire->setArticles($articles);

            $commentaire->setCreatedAt(new \DateTime('now'));

            //On instancie Doctrine
            $doctrine = $this->getDoctrine()->getmanager();

            // On hydrate $commentaire
            $doctrine->persist($commentaire);

            //on écrit dans la base de données
            $doctrine->flush();
        }

        return $this->render('articles/articles.html.twig', [
            'articles' => $articles,
            'commentForm' => $form->createView()
        ]);
    }
}
