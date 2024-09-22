<?php
 defined('CONTROL') or die('Acesso negativo');

 if(isset($_GET['player']) && isset($_GET['x']) && isset($_GET['y'])){
    
 }
 ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col">
            <h3 class="text-center text-white">Tic Tac Toe</h3>
            <hr class="text-white">
            <div class="row">
                <div class="col">
                    <h3 class="text-center <?= $_SESSION['active_player'] == 1 ? 'text-warning': '' ?>"><?= $_SESSION['player_1_name'] ?></h3>
                    <h3 class="text-center text-white"><?= $_SESSION['player_1_score'] ?></h3>
                </div>
                <div class="col text-end">
                    <h3 class="text-center <?= $_SESSION['active_player'] == 2 ? 'text-warning': '' ?>"><?= $_SESSION['player_2_name'] ?></h3>
                    <h3 class="text-center text-white"><?= $_SESSION['player_2_score'] ?></h3>
                </div>
            </div>
            <hr class="text-white">

            <?php for($row = 0; $row <=2; $row++) : ?>

                <div class="d-flex justify-content-center">

                     <?php for($col = 0; $col <=2; $col++) : ?>

                <a href="index.php?route=game&player=<?= $_SESSION['active_player'] ?>&x=<?= $col ?>&y=<?= $row ?>">
                    <div class="board-cell text-center">
                       <?php if($_SESSION['game_board'][$row][$col] == 'X') : ?>
                            <img src="assets/img/times.png">
                       <?php elseif($_SESSION['game_board'][$row][$col] == 'O') : ?>
                          <img src="assets/img/circle.png">
                       <?php endif; ?>
                    </div>
                </a>

                <?php endfor; ?>
                </div>
            <?php endfor; ?>

        </div>
    </div>
</div>

<!--
    |-|-|-|
    |-|-|-|
    |-|-|-|
-->
