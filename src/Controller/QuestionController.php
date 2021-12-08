<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */

    public function homepage()
    {
        return $this->render('questions/homepage.html.twig');
    }

    /**
     * @Route("questions/{slug}")
     */

    public function show($slug)
    {
        $answers = [
            'Example answer 1',
            'Example answer 2',
            'Example answer 3'
        ];

        $names = ['John', 'Becky', 'Gavin', 'Jeremy', 'Samantha', 'Margot', 'Olive'];

        dump($slug);

        return $this->render('questions/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)), 'answers' => $answers, 'username' => $names[random_int(0, 6)]
        ]);
    }
}
