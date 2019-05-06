<!DOCTYPE html>
<html lang="en-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../codecss/main.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap//js/bootstrap.min.js">
    <title>RECHERCHE</title>
</head>
<body>
    <?php
        include('menu.php');
    ?> 
    <h1 class="title">Rechercher un produit</h1>
    <form action="rechercheProduits.php" method="POST" class="form-horizontal col-lg-6" id="form1">

        <div class="row">
            <div class="form-group" id="login" id="login">
                <label for="Quantite" class="col-lg-2"></label>
                <div class="col-lg-10">
                    <input type="number" name="quantite" id="ajout" class="form-control" placeholder="Quantité">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="form-group" id="password">
                <label for="prixMin" class="col-lg-2"></label>
                    <div class="col-lg-10">
                        <input type="number" name="prixMin" id="ajout" class="form-control" placeholder="Prix min">
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group" id="password">
                <label for="prixMax" class="col-lg-2"></label>
                    <div class="col-lg-10">
                        <input type="number" name="prixMax" id="ajout" class="form-control" placeholder="Prix max">
                    </div>
            </div>
        </div>
        <div class="form-group" id="send">
            <button class="pull-right btn btn-default" name="envoyer">
               <p>Rechercher</p> 
            </button>
        </div>
    </form>
<?php
if(isset($_POST['envoyer'])){
$produits = array(
    array('nom' => 'chaussures', 'prix unitaire' => '5000', 'quantite' => '55'),
    array('nom' => 'chemises', 'prix unitaire' => '10000', 'quantite' => '350'),
    array('nom' => 'pantallons', 'prix unitaire' => '7500', 'quantite' => '218'),
    array('nom' => 'sous-vettements', 'prix unitaire' => '15000', 'quantite' => '20'),
    array('nom' => 'tee-shirts', 'prix unitaire' => '7500', 'quantite' => '8'),
    array('nom' => 'costumes', 'prix unitaire' => '100000', 'quantite' => '100'),
    array('nom' => 'chaussettes', 'prix unitaire' => '500', 'quantite' => '25'),
    array('nom' => 'cravates', 'prix unitaire' => '12000', 'quantite' => '250'),
    array('nom' => 'montres', 'prix unitaire' => '25000', 'quantite' => '140'),
    array('nom' => 'lunettes', 'prix unitaire' => '75000', 'quantite' => '6'),
);
?>
<?php

    ?>
    <table class="table1">
        <tr>
            <th>PRODUITS</th>
            <th>QUANTITE</th>
            <th>PRIX UNITAIRE</th>
            <th>MONTANT</th>
        </tr>
        <?php
      
    $qte=$_POST['quantite'];
    $pmin=$_POST['prixMin'];
    $pmax=$_POST['prixMax'];
    
    for ($i = 0; $i < count($produits); $i++) {
        if($qte<=$produits[$i]['quantite'] && $qte!="" && $qte>0){
            if($produits[$i]['quantite']<=10 ){ 
            echo "<tr class='rouge'>
                <td>" . $produits[$i]["nom"] . "</td>
                <td>" . $produits[$i]["quantite"] . "</td>
                <td>" . $produits[$i]["prix unitaire"] . "</td>
                <td>" . $produits[$i]["quantite"] * $produits[$i]["prix unitaire"] . "</td>
            </tr>";
            }
            else {
                echo "<tr>
                <td>" . $produits[$i]["nom"] . "</td>
                <td>" . $produits[$i]["quantite"] . "</td>
                <td>" . $produits[$i]["prix unitaire"] . "</td>
                <td>" . $produits[$i]["quantite"] * $produits[$i]["prix unitaire"] . "</td>
            </tr>";
            }

        }
        elseif ($pmin<=$produits[$i]['prix unitaire'] && $pmax=="" && $qte==""){
           if($produits[$i]['quantite'] <=10){

                echo "<tr class='rouge'>
                    <td>" . $produits[$i]["nom"] . "</td>
                    <td>" . $produits[$i]["quantite"] . "</td>
                    <td>" . $produits[$i]["prix unitaire"] . "</td>
                    <td>" . $produits[$i]["quantite"] * $produits[$i]["prix unitaire"] . "</td>
                </tr>";
            }
            else {
                echo "<tr>
                <td>" . $produits[$i]["nom"] . "</td>
                <td>" . $produits[$i]["quantite"] . "</td>
                <td>" . $produits[$i]["prix unitaire"] . "</td>
                <td>" . $produits[$i]["quantite"] * $produits[$i]["prix unitaire"] . "</td>
            </tr>"; 
            }
        }
        elseif ($pmax<=$produits[$i]['prix unitaire'] && $pmin=="" && $qte==""){
            if($produits[$i]['quantite'] <=10){

                echo "<tr class='rouge'>
                    <td>" . $produits[$i]["nom"] . "</td>
                    <td>" . $produits[$i]["quantite"] . "</td>
                    <td>" . $produits[$i]["prix unitaire"] . "</td>
                    <td>" . $produits[$i]["quantite"] * $produits[$i]["prix unitaire"] . "</td>
                </tr>";
            }
            else {
                echo "<tr>
                <td>" . $produits[$i]["nom"] . "</td>
                <td>" . $produits[$i]["quantite"] . "</td>
                <td>" . $produits[$i]["prix unitaire"] . "</td>
                <td>" . $produits[$i]["quantite"] * $produits[$i]["prix unitaire"] . "</td>
            </tr>"; 
            }
        }
        elseif ($pmin<=$produits[$i]['prix unitaire'] && $pmax>=$produits[$i]['prix unitaire'] && $pmax>$pmin && $pmax!="" && $pmin!="" && $qte==""){
            if($produits[$i]['quantite'] <=10){

                echo "<tr class='rouge'>
                    <td>" . $produits[$i]["nom"] . "</td>
                    <td>" . $produits[$i]["quantite"] . "</td>
                    <td>" . $produits[$i]["prix unitaire"] . "</td>
                    <td>" . $produits[$i]["quantite"] * $produits[$i]["prix unitaire"] . "</td>
                </tr>";
            }
            else {
                echo "<tr>
                <td>" . $produits[$i]["nom"] . "</td>
                <td>" . $produits[$i]["quantite"] . "</td>
                <td>" . $produits[$i]["prix unitaire"] . "</td>
                <td>" . $produits[$i]["quantite"] * $produits[$i]["prix unitaire"] . "</td>
            </tr>"; 
            }
        }
        elseif ($qte<=$produits[$i]['quantite'] && $pmin<=$produits[$i]['prix unitaire'] && $pmax>=$produits[$i]['prix unitaire'] && $pmax>$pmin && $pmax!="" && $pmin!="" && $qte!=""){
            if($produits[$i]['quantite'] <=10){

                echo "<tr class='rouge'>
                    <td>" . $produits[$i]["nom"] . "</td>
                    <td>" . $produits[$i]["quantite"] . "</td>
                    <td>" . $produits[$i]["prix unitaire"] . "</td>
                    <td>" . $produits[$i]["quantite"] * $produits[$i]["prix unitaire"] . "</td>
                </tr>";
            }
            else {
                echo "<tr>
                <td>" . $produits[$i]["nom"] . "</td>
                <td>" . $produits[$i]["quantite"] . "</td>
                <td>" . $produits[$i]["prix unitaire"] . "</td>
                <td>" . $produits[$i]["quantite"] * $produits[$i]["prix unitaire"] . "</td>
            </tr>"; 
            }
        }
        
    }
}
?>

    </table>
    
</body>
</html>