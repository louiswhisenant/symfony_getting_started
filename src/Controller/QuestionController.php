<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */

    public function homepage(Environment $twigEnvironment)
    {
        // $html = $twigEnvironment->render('questions/homepage.html.twig');
        // return new Response($html);
        return $this->render('questions/homepage.html.twig');
    }

    /**
     * @Route("questions/{slug}", name="app_question_show")
     */

    public function show($slug)
    {
        $answers = [
            'Example answer 1',
            'Example answer 2',
            'Example answer 3'
        ];

        $names = ['John', 'Becky', 'Gavin', 'Jeremy', 'Samantha', 'Margot', 'Olive', 'Christina', 'Jack', 'Meredith', 'Janet', 'Georgette', 'Constance', 'Ignatius', 'Maximilian', 'Miranda', 'Ettore', 'Ottavia', 'Camilla'];

        dump($slug);

        return $this->render('questions/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)), 'answers' => $answers, 'usernames' => $names
        ]);
    }
}
