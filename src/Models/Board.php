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

    //Liste des bateaux du board
    private $ship = [];

}