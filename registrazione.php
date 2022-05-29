
<?php 
include 'config.php';
error_reporting(0);
if(!empty($_POST["nome"]) && !empty($_POST["cognome"]) && !empty($_POST["nomeutente"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["conferma_password"]) ){

$errore=array();


 



if(!preg_match('/^[a-zA-Z0-9_]{5,15}$/',$_POST["nomeutente"])){
        $errore[]="Nome utente errato.";
    }else {
        $nomeutente = mysqli_real_escape_string($connessione, $_POST['nomeutente']);
      
        $query = "SELECT nomeutente FROM utenti WHERE nomeutente = '$nomeutente'";
        $res = mysqli_query($connessione, $query);
        if (mysqli_num_rows($res) > 0) {
            $errore[] = "Nome utente già utilizzato";
            $nome=$_POST["nome"];
$cognome=$_POST["cognome"];
          
            $password=md5($_POST["password"]);
$conferma_password=md5($_POST["conferma_password"]);
$email=$_POST["email"];


            
           
        }
    }

    if(!preg_match('/^[a-zA-Z0-9]{1,15}$/',$_POST["nome"])){
        $errore[]="Nome  non valido.";
    }

    if(!preg_match('/^[a-zA-Z0-9]{1,15}$/',$_POST["cognome"])){
        $errore[]="Nome  non valido.";
    }

    if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
        $errore[]="Email errata.";
    }else {
        $email = mysqli_real_escape_string($connessione, $_POST['email']);
      
        $query = "SELECT email FROM utenti WHERE email = '$email'";
        $res = mysqli_query($connessione, $query);
        if (mysqli_num_rows($res) > 0) {
            $errore[]="";
            $errore[] = "Email già utilizzata";
            $nome=$_POST["nome"];
           
            $cognome=$_POST["cognome"];
            $password=md5($_POST["password"]);
$conferma_password=md5($_POST["conferma_password"]);
        }
    }

    if(!preg_match('/^[a-zA-Z0-9_]{5,15}$/',$_POST["password"])){
        $errore[]="Password errata.";
    }
    if(strlen($_POST["password"])<5){
        $errore[]="Password troppo corta.";
    }

    if($_POST['password']!=$_POST['conferma_password']){
        $errore[]="Le password non corrispondono";
        
            }


if(count($errore)==0) {
$nome=$_POST["nome"];
$cognome=$_POST["cognome"];
$nomeutente=$_POST["nomeutente"];
$email=$_POST["email"];
$password=md5($_POST["password"]);
$conferma_password=md5($_POST["conferma_password"]);
    if ($password == $conferma_password) {

        $sql = "INSERT INTO utenti (nome,cognome,nomeutente, email, password)
                VALUES ('$nome','$cognome','$nomeutente','$email', '$password')";
        $result = mysqli_query($connessione, $sql);
        if ($result) {
            echo "<script>alert('Wow! User Registration Completed.')</script>";
            $nome="";
            $cognome="";
            $nomeutente = "";
            $email = "";
            $_POST['password'] = "";
            $_POST['conferma_password'] = "";
            mysqli_close($connessione);
            header("Location: login.php");
          
        }


    } 
}

        mysqli_close($connessione);
} 
    





       
    

   


    
        




?>


<html>

<head>  <link rel="stylesheet" href="registrazione_style.css"> </link> 
<script src="ConvalidaForm.js"defer="true" ></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&family=PT+Sans+Narrow:wght@700&display=swap" rel="stylesheet"> </head>
<body>
     
         <div class="c_finestra">
         <h1> REGOLE PER REGISTRARSI</h1>
             <ul>
              <li>Nome:Min 1 carattere,Max 15 caratteri.É possibile usare lettere dalla A alla Z sia in minuscolo che maiuscolo.Numeri da 0 a 9 . </li> 
              <li>Cognome:Min 1 carattere,Max 15 caratteri.É possibile usare lettere dalla A alla Z sia in minuscolo che maiuscolo.Numeri da 0 a 9.  </li>
              <li>Nome Utente:Min 5 carattere,Max 15 caratteri.É possibile usare lettere dalla A alla Z sia in minuscolo che maiuscolo.Numeri da 0 a 9 e _ .  </li>
              <li>Email:Utilizzare mail valida ed esistente. </li>
              <li>Password:Min 5 carattere,Max 15 caratteri.É possibile usare lettere dalla A alla Z sia in minuscolo che maiuscolo.Numeri da 0 a 9 e _ . </li>
            
            </ul> 
        
        </div> 

    <div class="blocco_form">
<div class="informazioni">?</div> 
    <form action="" method="POST" class="registrazione_form">
        
  
<p class="testo_registrazione"> Registrazione</p>

<?php  echo "<div class='input'> <input  class='input_form' type='text' name='nome' placeholder='Nome'  id='nome' value='$nome' required> <small class='errore'>   </small> </div>

  <div class='input'> <input class='input_form' type='text' name='cognome' placeholder='Cognome' id='cognome' value='$cognome' required> <small class='errore'>   </small></div>

  <div class='input'>  <input class='input_form' type='text' name='nomeutente' placeholder='Nome utente' id='nomeutente' value='$nomeutente' required> <small class='errore'>  ".$errore[0]."  </small> </div>  

  <div class='input'><input class='input_form' type='email' name='email' placeholder='Email'id='email' value='$email' required> <small class='errore'> ".$errore[1]."</small></div>

 <div class='input'><input class='input_form' type='password' name='password' placeholder='Password' id='password' value='".$_POST["password"]."' required><small class='errore'>   </small></div>

 <div class='input'><input class='input_form' type='password' name='conferma_password' placeholder=' Conferma Password' id='conferma_password' value='" .$_POST["conferma_password"]."' required><small class='errore'>   </small></div>

 <p class='testo_registrazione_login'> Hai già un account? <a href='login.php'>Accedi qui</a> </p> "; ?>







<button  name="submit" class="button">Registrati</button> 


</form>
    </div>
</body>
</html>