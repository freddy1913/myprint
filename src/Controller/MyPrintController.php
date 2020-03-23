<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MyPrintController extends AbstractController
{
    /**
     * @Route("/myprint", name="my_print")
     */
    public function index()
    {
        return $this->render('my_print/index.html.twig', [
            'controller_name' => 'MyPrintController',
        ]);
    }


    public function mesImpressions()
    {
        $impress = [1 => 'First impress', 2 => 'Second impress'];

        return $this->render('my_print/mesImpressions.html.twig', [
               'impress' => $impress
        ]);
    }
}
