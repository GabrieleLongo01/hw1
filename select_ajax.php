<?php 
require_once('config.php');


 
$sql="SELECT * FROM commenti";
   if($select=mysqli_query($connessione,$sql)){

    $data=[];
    while($row=$select->fetch_array(MYSQLI_ASSOC)){
        $tmp;
        $tmp['commento_id']=$row['commento_id'];
        $tmp['id_utente']=$row['id_utente'];
        $tmp['data']=$row['data'];
        $tmp['messaggio']=$row['messaggio'];
        array_push($data,$tmp);
        
    }echo json_encode($data);
}else echo"Non ci sono righe";
  



?>