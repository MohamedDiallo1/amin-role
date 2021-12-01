<?php
require 'inc/bootstrap.php';
// App::getAuth()->restrict();
$auth = App::getAuth();
$db = App::getDatabase();
$auth->connectFromCookie($db);
require 'inc/header.php';
?>
<div class="mote">

    </div>
    <div class="mote2">
        <img src="/Otablier/Graphique\ .png" alt="">
    </div>

<div class="accuei">
    <div class="accs">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quae aliquam sint facere ex fugiat error delectus ullam! Porro officiis animi fugit atque, quibusdam officia totam dicta rem earum maiores.
         <a class="btn bg-info" href="voir plus"> voir plus</a>
    </div>
    <div class="acc">
       <img src="Otablier/11salad-from-tomatoes-cucumber-red-onions-and-lettuce-leaves-healthy-summer-vitamin-menu-vegan-vegetable-food-vegetarian-dinner-table-top-view-flat-lay.png" alt="">
    </div>
</div>

<div class="cotpage">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, natus inventore eligendi tenetur libero praesentium cumque aliquid voluptates obcaecati recusandae explicabo similique quos modi quam repudiandae veritatis deleniti excepturi magnam?
    Quos debitis, earum cum voluptates ad optio fugiat deleniti quam, facere obcaecati magni eos modi nemo asperiores ea iste vero ducimus! Necessitatibus autem impedit ea suscipit. Ipsam in earum cum?
    Rem quo nihil suscipit facilis magnam porro, atque corporis commodi natus veritatis itaque provident sunt minima fuga rerum omnis aspernatur voluptatibus! Exercitationem optio perferendis pariatur id est. Voluptate, reprehenderit omnis!
</div>



<?php require 'inc/footer.php'; ?>

