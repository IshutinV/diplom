<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EventRepository;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(ProductRepository $Repository)
    {
        $products = $Repository->findAll();

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'products'=>$products
        ]);
    }
}
