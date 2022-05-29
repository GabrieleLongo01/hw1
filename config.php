<?php 
$host="127.0.0.1";
$username="root";
$pass="";
$db="homework";

$connessione=mysqli_connect($host,$username,$pass,$db);

if(!$connessione){
   die(" <script> alert('Errore:Connessione fallita') </script>") ;
}



?>