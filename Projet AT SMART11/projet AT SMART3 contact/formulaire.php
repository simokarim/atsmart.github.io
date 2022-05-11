<?php
$bd=new pdo('mysql:host=localhost;dbname=formulaire','root','');
if(isset($_POST['submit'])){
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$number=$_POST['number'];
$sujet=$_POST['sujet'];
$message=$_POST['message'];
$requet=$bd->prepare("INSERT INTO at_smart(nom,prenom,email,numbre,sujet,messages)  VALUES(:nom,:prenom,:email,:numbre,:sujet,:messages)");
$requet->execute(array(
':nom'=>$nom,
':prenom'=>$prenom,
':email'=>$email,
':numbre'=>$number,
':sujet'=>$sujet,
':messages'=>$message

));
header("location:contact.html");
echo '<script>';
echo 'alert("votre message a été bien envoyé")';
echo '</script>';
}


?>