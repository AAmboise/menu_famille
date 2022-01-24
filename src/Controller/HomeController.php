<?php

namespace MenuFamille\Controller;

/**
 * Class HomeController
 */
class HomeController
{
    /**
     * Page d'accueil
     */
    public function home()
    {
        // Gestion des données à afficher dans cette partie
        $texte = 'Données récupérées';

        include("../template/accueil.php");
    }

    /**
     * Page d'ajout d'user
     */
    public function addUser()
    {
        // Données à récupérer
        $texte = 'Coucou';

        include("../template/addUser.php");
    }
}
