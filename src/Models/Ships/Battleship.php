<?php

namespace BattleShip\Models\Ships;

class BattleShip extends CoreShip
{
    public function __construct()
    {
        $this->setName('Battleship');
        $this->setSize(4);
    }

}