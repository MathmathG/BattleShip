<?php

namespace BattleShip\Controllers;

// une classe abstraite, désignée par le mot clé "abstract"
// indique une classe qui ne peut être instanciée
// on peut par contre HERITER de cette classe, et instancier la classe qui en hérite
// on indiquera souvent "abstract" devant une classe qui nous permet de définir un "comportement type", mais pas de traitement à proprement parler.
// ces traitement seront executés par les classes qui héritent de cette classe abstraite

abstract class CoreController{
// En private, les enfants ne pourraient y accéder,
// on passe donc les propriétés en protected
    protected $router;
    protected $template;

    public function __construct($router){


        $this->router = $router;

        $this->templates = new \League\Plates\Engine(ABS_BASE_PATH.'/src/Views');

        $this->templates->addData([
            'basePath' => $_SERVER['BASE_URI'] ?: '',
        ]);

    }

    public function error404()
    {
        header('HTTP/1.0 404 Not Found');
        echo 'Page non trouvée 😱';
        exit;
    }

}