<?php


namespace App\Controller;

use App\Repository\RecipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class RandomRecipeController extends AbstractController
{
    /**
     * @Route("/", name="randomrecipe_index", methods={"GET"})
     */
    public function index(RecipeRepository $recipeRepository): Response
    {
        return $this->render('randomrecipe/index.html.twig', [
            'recipes' => $recipeRepository->findAll(),
        ]);
    }
}