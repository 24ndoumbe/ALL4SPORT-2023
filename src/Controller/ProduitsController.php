<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProduitsRepository;
use App\Repository\RayonRepository;



class ProduitsController extends AbstractController
{
    #[Route('/produits', name: 'app_produits')]
    public function listeProduits(ProduitsRepository $ProduitsRepository, RayonRepository $RayonRepository): Response
    {
        $produits = $ProduitsRepository->findAll();
        $rayon = $RayonRepository->findAll();
        return $this->render('produits/liste.html.twig', [
            'controller_name' => 'ProduitsController',
            'produits' => $produits,
            'rayons' => $rayon
            
        ]);
    }

    #[Route('/detailsproduits/{id}', name: 'app_detailsproduits')]
    public function detailsProduits($id,ProduitsRepository $ProduitsRepository,RayonRepository $RayonRepository): Response
    {
        $produit = $ProduitsRepository->find($id);

        //$rayon = $RayonRepository->findAll();
        return $this->render('produits/détails.html.twig', [
            'controller_name' => 'ProduitsController',
            'produit' => $produit,
           // 'rayon' => $rayons
            
        ]);
    }


}
