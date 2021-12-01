<?php
require 'inc/bootstrap.php';
$auth = App::getAuth();
 require 'inc/header.php';
?>

<div class="row">
        <?php
        $servname = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'mohad';

        $dbco = new PDO("mysql:host=$servname; dbname=$dbname", 'root', '');
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sth = $dbco->prepare("SELECT * FROM recette ORDER BY id ASC ");
        $sth->execute();

        $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultat as $enreg) {
            $titre = $enreg["titre"];
            $Biographie = $enreg["Biographie"];
            $difficulter = $enreg["difficulter"];
            $coutt = $enreg["coutt"];
            $temps1 = $enreg["temps1"];
            $temps2 = $enreg["temps2"];
            $temps3 = $enreg["temps3"];
            $ingredient = $enreg["ingredient"];
            $etape1 = $enreg["etape1"];
            $etape2 = $enreg["etape2"];
            $etape3 = $enreg["etape3"];
            $etape4 = $enreg["etape4"];
            $etape5 = $enreg["etape5"];
            $etape6 = $enreg["etape6"];
            $etape7 = $enreg["etape7"];
            $etape8 = $enreg["etape8"];
            $conseil = $enreg["conseil"];
            $id = $enreg['id'];
            

            echo "
                <div  class=\"col-lg-4 text-center\">
                <img class=\"br-20px\" src=\"./Id031-St_Tropez-042-Copie.PNG\" alt=\"\">

                    <h2>$etape5</h2>
                    <p>$etape5 representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                    <p><a class=\"btn btn-secondary\" href=\"#\">View details &raquo;</a></p>
                </div>
                ";
        }


        ?>

</div>