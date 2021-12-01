<?php
$servname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mohad';

$titre = $_POST["titre"];
$Biographie = $_POST["Biographie"];
$difficulter = $_POST["difficulter"];
$coutt = $_POST["coutt"];
$temps1 = $_POST["temps1"];
$temps2 = $_POST["temps2"];
$temps3 = $_POST["temps3"];
$ingredient = $_POST["ingredient"];
$etape1 = $_POST["etape1"];
$etape2 = $_POST["etape2"];
$etape3 = $_POST["etape3"];
$etape4 = $_POST["etape4"];
$etape5 = $_POST["etape5"];
$etape6 = $_POST["etape6"];
$etape7 = $_POST["etape7"];
$etape8 = $_POST["etape8"];
$conseil = $_POST["conseil"];





try {
    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", 'root', '');
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sth = $dbco->prepare("INSERT INTO recette(titre, Biographie, difficulter, coutt, temps1, temps2, temps3, ingredient, etape1, etape2, etape3, etape4, etape5, etape6, etape7, etape8, conseil)
      VALUES(:titre, :Biographie, :difficulter, :coutt, :temps1, :temps2, :temps3, :ingredient, :etape1, :etape2, :etape3, :etape4, :etape5 , :etape6, :etape7, :etape8, :conseil)");


    $sth->bindParam(':titre', $titre);
    $sth->bindParam(':Biographie', $Biographie);
    $sth->bindParam(':difficulter', $difficulter);
    $sth->bindParam(':coutt', $coutt);
    $sth->bindParam(':temps1', $temps1);
    $sth->bindParam(':temps2', $temps2);
    $sth->bindParam(':temps3', $temps3);
    $sth->bindParam(':ingredient', $ingredient);
    $sth->bindParam(':etape1', $etape1);
    $sth->bindParam(':etape2', $etape2);
    $sth->bindParam(':etape3', $etape3);
    $sth->bindParam(':etape4', $etape4);
    $sth->bindParam(':etape5', $etape5);
    $sth->bindParam(':etape6', $etape6);
    $sth->bindParam(':etape7', $etape7);
    $sth->bindParam(':etape8', $etape8);
    $sth->bindParam(':conseil', $conseil);


    $sth->execute();

    header('Location: nosrecette.php');

    
} catch (PDOException $e) {
    echo ("Erreur : " . $e->getMessage());
    
}

