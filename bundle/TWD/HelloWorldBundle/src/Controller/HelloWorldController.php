<?php

namespace TWD\HelloWorldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController extends AbstractController
{
    #[Route('/twd/hello-bundle', 'twd_hello_world_massage')]
    public function __invoke()
    {
        return $this->render("@TWDHelloWorldBundle/hello_world.html.twig");
    }
}