<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class CategoryController extends Controller
{
    /**
     * @Route("/category/{page}", name="category" , requirements={"page": "\d+"})
     */
    public function listAction(Request $request, $page)
    {
        return $this->render('default/index.html.twig', [
            'base_dir' => 'vista category',
        ]);
    }

    /**
     * @Route("/category/new", name="category_new")
     */
    public function newAction(Request $request)
    {
        return $this->render('default/index.html.twig', [
            'base_dir' => 'vista category new',
        ]);
    }

    /**
     * @Route("/category/edit/{slug}", name="category_edit")
     */
    public function editAction(Request $request, $slug)
    {
        return new Response('<html lang="es"><body><small>'.$slug.'</small></body></html>');
    }


}
