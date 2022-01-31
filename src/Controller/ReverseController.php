<?php

namespace App\Controller;

use App\Service\ReverseHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReverseController extends AbstractController
{
    #[Route('/reverse', name: 'reverse')]
    public function index(ReverseHelper $reverseHelper): Response
    {
        $string = "j'adore Aktarma c'est une bonne entreprise";
        $stringReversed = $reverseHelper->reverse($string);
        return $this->render('reverse/index.html.twig', [
            'stringReverse' => $stringReversed,
        ]);
    }
}
