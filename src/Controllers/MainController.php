<?php

namespace BattleShip\Controllers;

class MainController extends CoreController
{
    public function home()
    {
        //Afficher la page d'accueil
        echo $this->templates->render('main/home');
    }

}