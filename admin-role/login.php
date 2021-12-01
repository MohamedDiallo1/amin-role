<?php
require 'inc/bootstrap.php';
$auth = App::getAuth();
$db = App::getDatabase();
$auth->connectFromCookie($db);
if($auth->user()){
    App::redirect('login.php');
}
if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])) {
    $user = $auth->login($db, $_POST['username'], $_POST['password'], isset($_POST['remember']));
    $session = Session::getInstance();
    if($user){
        $session->setFlash('success', 'Vous êtes maintenant connecté');
        App::redirect('index.php');
    }else{
        $session->setFlash('danger', 'Identifiant ou mot de passe incorrecte');
    }
}
?>
<?php require 'inc/header.php'; ?>
<div class="contancese1">
<div class="conte">
    
    <h3>Se connecter</h3>

    <form method="POST">

        <div class="form-group">
            <label for="pseudo">Pseudo ou email</label>
            <input type="text" name="username" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="password">Mot de passe </label>
            <input type="password" name="password" class="form-control"/>
        </div>

        <div class="form-group">
            <label>
                <input type="checkbox" name="remember" value="1"/> Se souvenir de moi
            </label>
        </div>

        <button type="submit" class="btn btn-primary">SE CONNECTER</button>
        <div class="for">
        <a class="hreuf1" href="forget.php">Mot de passe oublié?</a>
        <a href="register.php">Creér un compte</a>
        </div>
    </form>
    </div>
</div>
<?php require 'inc/footer.php'; ?>