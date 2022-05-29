<?php 
require_once('config.php');
session_start();

$commento_id=$_POST['commento_id'];
$id_utente=$_POST['id_utente'];

$sql="SELECT * FROM commenti";
$select=mysqli_query($connessione,$sql);

if($row=mysqli_fetch_assoc($select)){

if($_SESSION["nomeutente"]){
  
    $sql2="DELETE  FROM commenti  WHERE commento_id='$commento_id' AND id_utente='$id_utente' ";
    if($delete=mysqli_query($connessione,$sql2)){
        $data=["messaggio"=>"Messaggio eliminato con successo", "response"=>1];
        echo json_encode($data);
    }else{
        $data=["messaggio"=>"Errore eliminazione messaggio", "response"=>0];
        echo json_encode($data);
    }
   
   

}
 

}

?>