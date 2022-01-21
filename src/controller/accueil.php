<?php

namespace src\Controller;


class Accueil
{

    public function index()
    {
        $test = 'coucou';

        return $this->render('../../template/index.html.twig', [
            'test' => $test,
        ]);
    }
}