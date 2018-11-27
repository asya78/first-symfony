<?php

namespace SoftUniBlogBundle\Controller;


use SoftUniBlogBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends Controller
{
    /**
     * @Route("/", name="blog_index")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        $articles = $this
            ->getDoctrine()
            ->getRepository(Article::class)
            ->findBy([],['viewCount'=>'desc','dateAdded'=>'desc']);
        return $this->render('home/index.html.twig',['articles' => $articles]);
    }
}
