<?php

namespace App\Controller;

use App\Form\ReverseType;
use App\Service\ReverseHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReverseController extends AbstractController
{
    #[Route('/reverse', name: 'reverse')]
    public function index(ReverseHelper $reverseHelper, Request $request, ?string $stringReverse = null): Response
    {

        $form = $this->createForm(ReverseType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $stringReverse = $reverseHelper->reverse($form->getData()['string']);
        }

        return $this->renderForm('reverse/index.html.twig', [
            'form' => $form,
            'stringReverse' => isset($stringReverse) ? $stringReverse : '',
        ]);
    }
}
