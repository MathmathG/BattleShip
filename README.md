# oBattleShip

:spock-hand: Hello Hyperspace  
Notre mission, aujourd'hui : réaliser un jeu de bataille navale !

Rappel des règles du jeu : https://fr.wikipedia.org/wiki/Bataille_navale_(jeu)

* Le placement des vaisseaux sera aléatoire.
* L'adversaire sera dans un premier temps une IA (Intelligence Artificielle).
* Notre code sera :
  - en objet (POO),
  - basé sur MVC,
  - et nous gérerons les dépendances du projet avec Composer.

## Instructions

0. Explorer le code fourni et l'analyser.

1. Initialisation du projet
Avec Composer :
  - Initialiser ce projet.
  - Configurer les dépendances : Altorouter, Plates et [le var_dumper de Symfony](https://packagist.org/packages/symfony/var-dumper)
  - Configurer le namespace (PSR-4) pour le code de notre jeu, disons : _BattleShip_

2. Base du projet, route `/`

Créer le squelette du projet, et afficher le tableau de jeu sur la page d'accueil.  
_Amélioration : rendre complètement dynamique l'affichage de ces tableaux._

3. Conception des modèles
Quelles classes sont utiles pour notre jeu ?
  - Créer une classe Board représentant un plateau de jeu. Quelles sont ses caractéristiques ?
  - Modifier le code existant pour que les tableaux soient générés selon les caractéristiques de la classe Board créée.

4. Générer une nouvelle map
  - Bouton "Nouvelle partie" qui déclenche un appel AJAX à la route ajax/generate.
  - Créer la méthode de controller correspondante.
  - Afficher le résultat côté Front.

5. Tir
  - Détecter le clic sur le tableau "vos tirs".
  - Faire la méthode de controller correspondante.

6. Tir de l'IA
  - Déclencher l'appel à _dodge_ (on reçoit un tir).
  - Faire la méthode de controller correspondante.
