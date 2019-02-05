<?php

namespace BattleShip\Models;
// On crée la class Board pour représenter un tableau du jeu.
// On va avoir des ifos communes à tous les boards
// Et des infos particulière pour chaque board

class Board
{// Proprité communes qui ne bougeront pas
    const WIDTH = 10;
    const HEIGHT = 10;

    //Intitulé de mon board
    private $title;

    //Liste des cases du board
    private $board = [];

    //Liste des bateaux à positionner

    private $availableShips = ['Battleship', 'Carrier', 'Cruiser', 'Destroyer', 'Submarine'];

    private $availableAxis = ['horizontal', 'vertical'];
    
    //Liste des bateaux du board
    private $ships = [];

    public function __construct()
    {//pour chaque colonne du tableau
        for($x = 1; $x<= self::WIDTH; $x++){
            //pour chaque ligne du tableau
            for($y = 1; $y<= self::HEIGHT; $y++){
                //on indique que la case est vide
                $this->board["$x"-"$y"] = "";

            }
        }

    }



    public function generate()
    {
        foreach ($this->availableShips as $shipClass){
            $className = 'BattleShip\Models\Ships\\'.$shipClass;
            $ship      = new $className;
            dump($ship);
        }
    }

    private function addShip($ship)
    {
        do 
        {
            $x    = mt_rand(1, self::WIDTH);
            $y    = mt_rand(1, self::HEIGHT);
            $axis = shuffle([$this->availableAxis])[0];
        }
        while(!$available);
    }

}