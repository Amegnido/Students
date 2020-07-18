<?php
//  les informations de connexion

$hote = 'localhost'; // Adresse du serveur 
$log = 'root'; // Login 
$pass = ''; // Mot de passe 
$base = 'formulaire_inscription'; // Base de données à utiliser 
 
// On se connecte à la base de données 

$con=mysqli_connect($hote, $log, $pass); 
 
// On selectionne la base de données souhaitée

mysqli_select_db($con, $base);

//on vérifie si les champs de saisis ne sont pas vide

if (!empty($_POST['Name']) && !empty($_POST['email']) && !empty($_POST['psw'])) {

    // les différents champs

    $nom = $_POST['Name'];
    $email = $_POST['email'];
    $pass = $_POST['psw'];

    //on fait la requete d'insertion des informations 
    $user = "INSERT INTO User (password, email, name) VALUES ('$pass', ' $email', '$nom')";
    $userQuery = mysqli_query($con, $user) or die(mysqli_error($con));

    header("location: login.php");
    }
  
else {
    echo "Veuillez renseigner les champs s'il vous plaît !";
}

 if ( mysqli_query ( $con , $user ))
    {
      echo  "<h3> Inscription effectuée! </h3>" ;

 }
?>