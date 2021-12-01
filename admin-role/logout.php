<style>
    .setFlash{
        top:0;
        background-color: rgb(125, 255, 125);
    }
</style>

<?php
require 'inc/bootstrap.php';
App::getAuth()->logout();
Session::getInstance()->setFlash('success', 'Vous êtes maintenant déconnecté');
App::redirect('login.php');