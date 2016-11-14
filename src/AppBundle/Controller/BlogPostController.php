<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class BlogPostController
 * @package AppBundle\Controller
 * @Route("/blog")
 */
class BlogPostController extends Controller
{
    /**
     * @Route("/view/{slug}")
     */
    public function viewAction()
    {
        return $this->render(':BlogPost:view.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render(':BlogPost:index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/comment")
     */
    public function commentAction()
    {
        return [];
    }

}
