<?php 
require_once('config.php');

$id_utente=$_POST['id_utente'];
       $data=$_POST['data'];
       $messaggio=$_POST['messaggio'];
      

       $sql ="INSERT INTO commenti(id_utente,data,messaggio) VALUES ('$id_utente','$data','$messaggio')";
       $insert=mysqli_query($connessione,$sql);
       if($insert){
           $data=["messaggio"=>"Messaggio inserito con successo", "response"=>1];
           echo json_encode($data);
         
       }else {
        $data=["messaggio"=>"Errore inserimento messaggio", "response"=>0];
        echo json_encode($data);
       }



?>