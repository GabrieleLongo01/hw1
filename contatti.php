<?php  session_start();
include 'config.php';
include 'commenti.php';

date_default_timezone_set('Europe/Rome');
?>

<!DOCTYPE html> 

<head>
    <link rel="stylesheet" href="softair4.css"> </link>
    <link rel="stylesheet" href="softair.css"> </link>
    <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&family=PT+Sans+Narrow:wght@700&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://apis.google.com/js/api.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        
    
   
</head>

<body>
    <nav>
 
        <img class="logo reveal4" src="logo.png"/> 
    
    
    
     <div  class="menu reveal1">
    
    <div class="mediumtext"> <a href="PaginaPrincipale.php"> HOME </a></div>
    <div class="mediumtext"> <a href="contatti.php"> FORUM </a> </div>
     <div class="mediumtext">  <a href="fucili.php"> FUCILI </a> </div>
     <div class="mediumtext"> <a href="Pistole.php"> PISTOLE </a></div>
     <div class="mediumtext"> <a href="abbigliamento.php"> ABBIGLIAMENTO</a>   </div>
     <div class="mediumtext"> <a href="regole.php"> REGOLE E MODALITÀ </a> </div>
     
     <?php if(isset($_SESSION['id'])){ echo " <div class='mediumtext'> <a href='logout.php'>LOGOUT </a> </div>" ;} else{
             echo " <div class='mediumtext'> <a href='login.php'>LOGIN </a> </div>";
         }?>
     
    </div>
    
    </nav>
    <div class="video">
        <div class="video__content reveal1" >
    
         <h1 class="bigtext"> FORUM</h1>
           
        </div>
    
        <video autoplay muted loop id="myvideo"> <source src="contatti.mp4" type="video/mp4"> </video>
    </div>

    <?php 

    
    if(isset($_SESSION['id'])){
    echo " <p class='text-commenti normaltext'> La chiave per vincere al softair è il gioco di squadra.Chatta con altre persone per condividere consigli o organizzare una partita! </p>";


    echo "
 <form method='POST' action='".commenta($connessione)."' class='form_commenti'> 

    <input type='hidden' name='id_utente' value ='".$_SESSION['nomeutente']."'>  
    <input type='hidden' name='data' value ='".date('Y-m-d H:i:s:')."'>  
    <textarea name='messaggio' id='messaggio' class='normaltext' ></textarea> <br>
    <button type='submit' name='invia_commenti' class='bottone_commenti normaltext'> Commenta </button>
</form>";
scrivi_commenti($connessione);
eliminaMessaggi_tot($connessione);



}else{
    echo " <p class='text-commenti normaltext'> Accedi per chattare con altri utenti. </p> <div class='text-commenti normaltext'> <a href='login.php' class='a_login'>LOGGA </a>  </div>";
     

}?>


        
    </body>