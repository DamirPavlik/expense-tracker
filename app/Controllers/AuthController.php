<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig;

class AuthController
{
    public function __construct(private readonly Twig $twig)
    {
    }

    public function loginView(Request $request, Response $response): Response
    {
        return $this->twig->render(response: $response, template:'auth/login.twig');
    }

    public function registerView(Request $request, Response $response): Response
    {
        return $this->twig->render(response: $response, template:'auth/register.twig');
    }

    public function logIn(Request $request, Response $response): Response
    {

        return $response;
    }

    public function register(Request $request, Response $response): Response
    {

        return $response;
    }


}