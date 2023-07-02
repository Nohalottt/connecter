<?php
include ("connexion.php");
session_start();
echo "verifier<br>";
if(isset($_SESSION['id_user'])){
echo "nom et prenom:".$_SESSION['id_user']."
".$_SESSION['pass']."<br>";

// $sql="select * from user where LOGIN='".$_SESSION['id_user']."'";
// $result=mysqli_query($link,$sql);
// $data=mysqli_fetch_assoc($result);

}else{
    echo "pas";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action=" enregistrement.php" method="get">
    <label for=""> login:</label>
    <input type="text" type="hidden"  name="txt_login" value="<?php echo $_SESSION['id_user']; ?>">


    <label for=""> Mot de passe:</label>
    <input type="text" name="txt_pass" type="hidden" value="<?php echo  $_SESSION['pass'];?>">


    <label for="">Nom</label>
    <input type="text" name="txt_nom" type="hidden" value="<?php echo   $_SESSION['nom']; ?>">

    <label for="">Prenom</label>
    <input type="text" name="txt_prenom" type="hidden" value="<?php echo   $_SESSION['prenom']; ?>">

    <label for="">ville</label>
    <input type="text" name="txt_ville" type="hidden" value="<?php echo   $_SESSION['ville']; ?>">

    <label for="">Date de naissance</label>
    <input type="date" name="txt_date" type="hidden" value="<?php echo  $_SESSION['date_naissance']; ?>">

    <input type="submit" value="envoyer">
   </form>
    
</body>
</html>