<?php
//connecter à la bdd
$servername="localhost";
$username ="root";
$password ="root";

$bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');


// récupérer la data in-site
if(isset($_POST['ok'])){
    $nom = $_POST['nom'];
}

//envoyer la data à la bdd
$requete = $bdd->prepare("INSERT INTO users VALUES (0, :pseudo, :nom, :prenom, MD5:mdp, :email)";
$requete-> execute(
array(
    "pseudo" =>$pseudo,
    "nom" =>$nom,
    "prenom" =>$prenom,
    "mdp" =>$email,
    "pseudo" =>$pseudo,
    "email" =>$email,
)
);
    echo "Inscirption réussie !";
?>


https://www.youtube.com/watch?v=_uHaFt5Y9FA
