<!DOCTYPE HTML>
<html lang="en-fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../codecss/main.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap//js/bootstrap.min.js">
        <title>Login D2</title>
    </head>

<body> <br>
    <form action="authentification.php" method="POST" class="form-horizontal col-lg-6" id="form">
        <div class="form-group" id="legend" >
            <legend>Se connecter</legend>
        </div>

        <div class="row">
            <div class="form-group" id="login">
                <label for="login" class="col-lg-2"></label>
                <div class="col-lg-10">
                    <input type="text" name="login" id="write" class="form-control" placeholder="Username">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="form-group" id="password">
                <label for="pwd" class="col-lg-2"></label>
                    <div class="col-lg-10">
                        <input type="password" name="pwd" id="write" class="form-control" placeholder="Password">
                    </div>
            </div>
        </div>
        <div class="form-group" id="send">
            <button class="pull-right btn btn-default" name="envoyer">
               <p>Envoyer</p> 
            </button>
        </div>
    </form>

    <?php
        $identifiant1="diene";
        $mdp1="123456";

        $identifiant2="kader";
        $mdp2="abcdef";

        // recuperation des valeurs saisies 
        $nom=$_POST['login'];
        $pass=$_POST['pwd']; 

        if (isset($_POST['envoyer'])) {
        
            if($identifiant1==$nom && $mdp1==$pass){
                header('location:listeProduits.php');
            }
            elseif ($identifiant2==$nom && $mdp2==$pass) {
                header('location:listeProduits.php');
            }
            else {
                header('location:authentification.php');
            }
        }
    ?>
</body>
</html>