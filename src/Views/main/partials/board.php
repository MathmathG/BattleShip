<!-- VOS TIRS -->
<div class="column">
          <h3 class="subtitle has-text-centered"><?php echo $title ?></h3>
          <div class="columns is-gapless is-mobile bs-cases">


            <div class="column bs-case">
              <div class="bs-case__none"></div>
            </div>
             <!-- parcourt de la table ASCII -->
            <?php for ($ascii=65; $ascii < 65 + $boardWidth; $ascii++):?>
            <div class="column bs-case">
              <div class="bs-case__title"><?php echo chr($ascii) ?></div>
            </div>
            <?php endfor; ?>
          </div>


          <?php for ($ligne = 0; $ligne < $boardHeight; $ligne++):?>
          <div class="columns is-gapless is-mobile bs-cases">
            <div class="column bs-case">
              <div class="bs-case__title"><?php echo $ligne + 1 ?></div>
            </div>
            <?php for ($col=0; $col < $boardWidth; $col++):?>
            <div class="column bs-case">
              <div></div>
          </div>
          <?php endfor;?>
          </div>
          <?php endfor;?>
        </div>


        