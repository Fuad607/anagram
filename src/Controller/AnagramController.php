<?php

namespace App\Controller;

use App\Form\AnagramType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnagramController extends AbstractController
{
    #[Route('/anagram', name: 'anagram')]
    public function index(Request $request, Anagram $anagram): Response
    {

        $form = $this->createForm(AnagramType::class);
        $form->handleRequest($request);
        $results = [];
        if ($form->isSubmitted() && $form->isValid()) {
            $searchWord = $form->get('searchWord')->getData();
            $results=$anagram->generateTwoWordAnagram($searchWord);

        }

        return $this->render('anagram/index.html.twig', [
            'controller_name' => 'AnagramController',
            'results' => $results,
            'form' => $form->createView()
        ]);
    }


}
