<?php defined('CONTROL') or die('Acesso negativo') ?>


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
        </div>
    </div>
</div>
