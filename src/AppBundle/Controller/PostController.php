<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class PostController extends Controller
{

    /**
     * @Route("/list/{page}", name="list")
     */
    public function listAction(Request $request, $page)
    {
        return $this->render('default/index.html.twig', [
            'base_dir' => 'vista List',
        ]);
    }

    /**
     * @Route("/{slug}", name="post_view")
     */
    public function viewAction(Request $request, $slug)
    {
        return $this->render('default/index.html.twig', [
            'base_dir' => 'vista post new',
        ]);
    }

    /**
     * @Route("/post/new", name="post_new")
     */
    public function newAction(Request $request)
    {
        return $this->render('default/index.html.twig', [
            'base_dir' => 'vista post new',
        ]);
    }

    /**
     * @Route("/post/edit/{slug}", name="post_edit")
     */
    public function editAction(Request $request, $slug)
    {
        return $this->render('default/index.html.twig', [
            'base_dir' => 'vista post edit',
        ]);
    }



}
