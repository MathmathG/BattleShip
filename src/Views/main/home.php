<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BattleShip In The Galaxy</title>
  <link rel="stylesheet" href="<?php echo $basePath ?>/css/app.css">
</head>
<body>

  <header class="section">
    <div class="container">
      <h1 class="title has-text-centered">
        BattleShip In The Galaxy
      </h1>
      <h2 class="subtitle has-text-centered">
        Le premier jeu de bataille navale 100% Galaxy
      </h2>
    </div>
  </header>

  <section class="section">
    <div class="content">
      <h3>Instructions</h3>
      <blockquote id="instructions">
        A vous de jouer
      </blockquote>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="columns">
          
        <?php $this->insert('main/partials/board', [
            'title' => 'Vos tirs'

        ]);?>
         <!-- VOS VAISSEAUX -->
         <?php $this->insert('main/partials/board',[
             'title' => 'Vos vaisseaux'

         ]);?>

        

       
        </div>
        </div>
        </div>
  </section>


  <footer class="footer">
    <div class="container">
      <div class="content has-text-centered">
        <p>
          <strong>BattleShip</strong> by <a href="http://oclock.io">Galaxy</a>. Just have fun !
        </p>
      </div>
    </div>
  </footer>

</body>
