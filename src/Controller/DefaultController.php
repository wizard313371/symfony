<?php

namespace App\Controller;

use App\Entity\User;
use App\Services\GiftsService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     * @param GiftsService $gifts
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(GiftsService $gifts)
    {
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'users' => $users,
            'random_gift' => $gifts->gifts
        ]);
    }

    /**
     * @Route("/blog/{page}", name="blog_list", requirements={"page"="\d+"})
     */

    public function index2()
    {
        return new Response('Optional parametrs');
    }
}
