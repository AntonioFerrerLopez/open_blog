<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use AppBundle\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class PostController extends Controller
{

    private $postRepository;

public function __construct()
{
    $this->postRepository = PostRepository::class;
}

    /**
     * @Route("/list/{page}", name="list",  requirements={"page": "\d+"})
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
            'base_dir' => 'vista post new',]);
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
    /**
     * @Route("/post/search/{title}", name="post_search")
     */
    public function searchAction(Request $request ,  $title , PostRepository $repository)
    {

        $repository->findAllByTitle($title);

        return $this->render('default/index.html.twig', [
            'base_dir' => 'vista post edit',
        ]);
    }

}
