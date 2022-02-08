<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Question;
use App\Form\QuestionType;
use App\Repository\QuestionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    #[Route('/question', name: 'question')]
    public function index(QuestionRepository $questionRepository): Response
    {
        $questions = $questionRepository->findAll();

        return $this->render('question/index.html.twig', [
            'questions' => $questions,
        ]);
    }

    #[Route('/question/edit_{id<\d+>?}', name: 'question-edit')]
    public function edit(Request $request, EntityManagerInterface $em, ?Question $question = null): Response
    {
        if (!isset($question)) {
            $question = new Question();
        }

        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($form->getData());
            $em->flush();

            return $this->redirectToRoute('question', [],);
        }

        return $this->renderForm('question/edit.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/question/category_{id<\d+>?}', name: 'question-category')]
    public function viewByCategory(Category $category): Response
    {
        $questions = $category->getQuestions();

        return $this->render('question/index.html.twig', [
            'questions' => $questions,
        ]);
    }

    #[Route('/question/delete_{id<\d+>}', name: 'question-delete')]
    public function delete(EntityManagerInterface $em, Question $question): Response
    {
        $em->remove($question);
        $em->flush();

        return $this->redirectToRoute('question');
    }
}
