
<?php

include 'config.php';
error_reporting(0);
session_start();
if (!empty($_POST["nomeutente"]) && !empty($_POST["password"]) )
    {
        $errore=array();
$nomeutente= $_POST["nomeutente"];
$password=md5($_POST["password"]);
$query="SELECT id,nomeutente,password FROM utenti where nomeutente='$nomeutente' AND password='$password'";
$res=mysqli_query($connessione,$query);

if(mysqli_num_rows($res) >0 ){
$row=mysqli_fetch_assoc($res);

if (md5($_POST['password'])==$row['password']){

    
$_SESSION['nomeutente']=$row['nomeutente'];
$_SESSION["id"] = $row['id'];



header("Location: PaginaPrincipale.php");
mysqli_free_result($res);
mysqli_close($connessione);
exit;
    }


}else{  $errore[]="Nome utente o Password errati.";
    

}



    } 

?>




<html>

<head>  <link rel="stylesheet" href="registrazione_style.css"> </link> 
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&family=PT+Sans+Narrow:wght@700&display=swap" rel="stylesheet"> </head>
<body>
    <div class="blocco_form2">

    <form action="" method="POST" class="registrazione_form">

<p class="testo_registrazione"> Accesso</p>



 <div class="input">  <input   class="input_form" type="text" name="nomeutente" placeholder="Nome utente" value="<?php  echo $nomeutente;?>" required>  </div>



<div class="input"><input  class="input_form" type="password" name="password" placeholder="Password" value="<?php  echo $_POST["password"];?>" required></div>

 <?php  echo"<small class='errore'> ".$errore[0]."</small>";?>

<p class="testo_registrazione_login"> Non hai ancora  un account? <a href="registrazione.php">Registrati qui</a> </p>








<button  name="submit" class="button">Accedi</button>
</form>
    </div>
</body>
</html>