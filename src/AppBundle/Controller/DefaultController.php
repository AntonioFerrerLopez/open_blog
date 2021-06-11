<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        //$url = $this->generateUrl('category_edit' , array('slug' => 'Que tal desde default controler'));
        //return $this->redirect($url);


        return $this->render('default/index.html.twig' , array('base_dir' => 'mis cojones'));
    }





}
