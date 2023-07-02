<?php
session_start();
include("connexion.php");
$login=$_GET["txt_login"];
$pass=$_GET["txt_pass"];
$nom=$_GET["txt_nom"];
$prenom=$_GET["txt_prenom"];
$ville=$_GET["txt_ville"];
$date_naissance=$_GET["txt_date"];
$_SESSION['id_user']=$login;
$id_user=$_SESSION['id_user'];
$sql="select * from user  where LOGIN='".$_SESSION['id_user']."'";
$result=mysqli_query($link,$sql);

$data=mysqli_fetch_assoc ( $result );
if ($data) {
    // Utilisateur existant, exécutez une requête UPDATE
    $sql = "UPDATE user SET LOGIN='$login', PASSWORD='$pass', NOM='$nom', PRENOM='$prenom', VILLE='$ville', DATE_NAISSANCE='$date_naissance' WHERE LOGIN='$id_user'";
    $result = mysqli_query($link, $sql);
    if ($result) {
        echo "Données mises à jour avec succès.";
    } else {
        echo "Erreur lors de la mise à jour des données.";
    }
} else {
    // Nouvel utilisateur, exécutez une requête INSERT
    $sql = "INSERT INTO user (LOGIN, PASSWORD, NOM, PRENOM, VILLE, DATE_NAISSANCE) VALUES ('$login', '$pass', '$nom', '$prenom', '$ville', '$date_naissance')";
    $result = mysqli_query($link,$sql);
}

?>