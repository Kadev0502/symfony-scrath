<?php

namespace App\Controller;

use App\Entity\Famille;
use App\Repository\FamilleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FamilleController extends AbstractController
{
    /**
     * @Route("/familles", name="familles")
     * @param FamilleRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(FamilleRepository $repository)
    {
        $familles = $repository->findAll();
        return $this->render('famille/familles.html.twig', [
            'familles' => $familles
        ]);
    }

    /**
     * @Route("/famille/{id}", name="afficher_famille")
     * @param Famille $famille
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function afficherFamille(Famille $famille)
    {
        return $this->render('famille/afficherFamille.html.twig', [
            'famille' => $famille
        ]);
    }


}
