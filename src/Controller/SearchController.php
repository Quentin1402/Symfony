<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductFormType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    public function __construct(private RequestStack $requestStack) {
        $this->requestStack = $requestStack;
    }

    #[Route('/search', name: 'app_search')]
    public function index(Request $request, ProductRepository $productRepository): Response
    {
        $name = $request->request->get('_name');
        $product = $productRepository->search($name);
        return $this->render('search/index.html.twig', ['product' => $product]);
    }

    #[Route('/', name: 'app')]
    public function accueil(): Response
    {
        return $this->render('base.html.twig');
    }
}
