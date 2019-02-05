<?php

namespace BattleShip\Controllers;

use BattleShip\Models\Board;

class AjaxController extends CoreController
{
    public function generate()
    {
        //On génere les deux plateaux de jeu

        $playerBoard = new Board();

        // On génere la position des bateaux
        $playerBoard->generate();
    }

}