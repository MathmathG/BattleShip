<?php

namespace BattleShip\Controllers;

use BattleShip\Models\Board;

class MainController extends CoreController
{
    public function home()
    {
        //Afficher la page d'accueil
        echo $this->templates->render('main/home', [
            'boardWidth' => Board::WIDTH,
            'boardHeight' => Board::HEIGHT
        ]);
    }

}