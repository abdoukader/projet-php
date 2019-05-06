<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../codecss/main.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap//js/bootstrap.min.js">
        <title>AJOUTER</title>
    </head>
<body>
    <?php
        include('menu.php');
    ?> 
    <h1 class="title">Ajouter un produit</h1>
    <form action="ajouteProduits.php" method="POST" class="form-horizontal col-lg-6" id="form1">

        <div class="row">
            <div class="form-group" id="login" id="login">
                <label for="produit" class="col-lg-2"></label>
                <div class="col-lg-10">
                    <input type="text" name="produit" id="ajout" class="form-control" placeholder="Produit">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="form-group" id="password">
                <label for="Quantite" class="col-lg-2"></label>
                    <div class="col-lg-10">
                        <input type="text" name="quantite" id="ajout" class="form-control" placeholder="Quantité">
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group" id="password">
                <label for="Prix Unitaire" class="col-lg-2"></label>
                    <div class="col-lg-10">
                        <input type="text" name="prix-unitaire" id="ajout" class="form-control" placeholder="Prix Unitaire">
                    </div>
            </div>
        </div>
        <div class="form-group" id="send">
            <button class="pull-right btn btn-default" name="envoyer">
               <p>Ajouter</p> 
            </button>
        </div>
    </form>
    <!----------------------------------------->
    <?php
    if(isset($_POST['envoyer'])){
    $produits = array(
        array('nom' => 'chaussures', 'prix unitaire' => '5000', 'quantite' => '55'),
        array('nom' => 'chemises', 'prix unitaire' => '8000', 'quantite' => '35'),
        array('nom' => 'pantallons', 'prix unitaire' => '7000', 'quantite' => '18'),
        array('nom' => 'sous-vettements', 'prix unitaire' => '500', 'quantite' => '20'),
        array('nom' => 'tee-shirts', 'prix unitaire' => '2500', 'quantite' => '8'),
        array('nom' => 'costumes', 'prix unitaire' => '50000', 'quantite' => '100'),
        array('nom' => 'chaussettes', 'prix unitaire' => '1000', 'quantite' => '50'),
        array('nom' => 'cravates', 'prix unitaire' => '2000', 'quantite' => '25'),
        array('nom' => 'montres', 'prix unitaire' => '25000', 'quantite' => '40'),
        array('nom' => 'lunettes', 'prix unitaire' => '75000', 'quantite' => '6'),
    );
    // ajouter un élément
    $nouvProd=$_POST['produit'];
    $nouvQuantite=$_POST['quantite'];
    $nouvPU=$_POST['prix-unitaire'];

    if($nouvProd!=""){
        array_push($produits,array('nom' => $nouvProd, 'prix unitaire' => $nouvPU, 'quantite' => $nouvQuantite));
    }
    // Gérer si un l'élément ajouter n'est pas identique à celui présent  

    /* $test=false;
    if(isset($_POST['envoyer']))
    for ($i=0; $i <count($produits) ; $i++) { 
        if(strcmp($produits[$i][0], $nouvProd==0){
            $test=true;
        }
    }
    if($test==true){
        echo"Cette valeur exite déja ";
    }
*/
    ?>

    <table class="table1">
        <tr>
            <th>PRODUITS</th>
            <th>QUANTITE</th>
            <th>PRIX UNITAIRE</th>
            <th>MONTANT</th>
        </tr>

    <?php
            for ($i = 0; $i < count($produits); $i++) {

            if ($produits[$i]['quantite'] >10) {
                echo"<tr>
                    <td>" . $produits[$i]["nom"] . "</td>
                    <td>" . $produits[$i]["quantite"] . "</td>
                    <td>" . $produits[$i]["prix unitaire"] . "</td>
                    <td>" . $produits[$i]["quantite"] * $produits[$i]["prix unitaire"] . "</td>
                </tr>";
            } 
        
            else{
                echo "<tr class='rouge'>
                    <td>" . $produits[$i]["nom"] . "</td>
                    <td>" . $produits[$i]["quantite"] . "</td>
                    <td>" . $produits[$i]["prix unitaire"] . "</td>
                    <td>" . $produits[$i]["quantite"] * $produits[$i]["prix unitaire"] . "</td>
                </tr>";
            }
        }
    }
    
    ?>

    </table>

</body>
</html>