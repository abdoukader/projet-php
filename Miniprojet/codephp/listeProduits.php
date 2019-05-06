<!DOCTYPE html>
<html lang="en-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title class="titre">LISTE PRODUIT</title>
    <link rel="stylesheet" href="../codecss/main.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap//js/bootstrap.min.js">
</head>
<body>
    <?php
        include('menu.php');
    ?>   <br> <br>
    <?php
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

    ?>

    </table>
    
</body>
</html>
 