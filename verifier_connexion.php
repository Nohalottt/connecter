<?php
 $link=mysqli_connect("localhost","root","","inscription") or die("Echec de connexion a la base");
//  $sql="select * from user where LOGIN='".$login."'";
//  $result=mysqli_query($link,$sql);
//  $row=mysqli_fetch_assoc($result);
$login=$_GET["login"];
session_start();
$sql="select * from user  where LOGIN='".$login."'";
$result=mysqli_query($link,$sql);

$data=mysqli_fetch_assoc ( $result );

if($data){
    $_SESSION['id_user']=$data["LOGIN"];;
    $_SESSION['pass']=$data["PASSWORD"];
    $_SESSION['nom']=$data['NOM'];
    $_SESSION['prenom']=$data['PRENOM'];
    $_SESSION['ville']= $data['VILLE'];
    $_SESSION['date_naissance']=$data['DATE_NAISSANCE'];
    echo "hello";

    header("Location:accueil.php");
}else{
    $_SESSION['id_user']=$_GET["login"];;
    $_SESSION['pass']=$_GET["pass"];
    $_SESSION['nom']="";
    $_SESSION['prenom']="";
    $_SESSION['ville']= "";
    $_SESSION['date_naissance']="";
    echo "hello2";
    header("Location:accueil.php");
    // $link=mysqli_connect("localhost","root","","inscription") or die("Echec de connexion a la base");
    // $sql="select * from user where LOGIN='".$login."' and  PASSWORD='".$pass."' ";
    // $result=mysqli_query($link,$sql);
    // $row=mysqli_fetch_assoc($result);
    // if($row!=False){
      
        
    //     $_SESSION['prenom']=$row['PRENOM'];
    //     $_SESSION['ville']=$row['VILLE'];
        
    }
















?>