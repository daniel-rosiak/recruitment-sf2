<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:News');

        $query = $repository->createQueryBuilder('s')
            ->orderBy('s.id', 'DESC')
            ->getQuery();

        return $this->render('AppBundle:News:index.html.twig',array(
                 'news' => $query->getResult()
            )
        );
    }
}
