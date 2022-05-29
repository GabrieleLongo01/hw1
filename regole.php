<?php  session_start();
?>

<!DOCTYPE html> 

<head>
  
<meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="softair.css"> </link>
    <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&family=PT+Sans+Narrow:wght@700&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       
        <script src="https://unpkg.com/scrollreveal"></script>
    
    <script src="softair.js" defer="true"></script>
</head>

<body>
    <nav>
 
        <img class="logo reveal4" src="logo.png"/> 
    
    
    
     <div  class="menu reveal1">
    
    <div class="mediumtext"> <a href="PaginaPrincipale.php"> HOME </a></div>
    <div class="mediumtext"> <a href="forum.php">FORUM </a> </div>
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
    
         <h1 class="bigtext"> Regole Softair</h1>
           
        </div>
    
        <video autoplay muted loop id="myvideo"> <source src="regole.mp4" type="video/mp4"> </video>
    </div>



    <div class="blocco1 ">

        
        
        <div class="contenuto__1 reveal4">
        <h3 class="bigtext"> Quali sono le regole del softair?</h3>
        
        
        <p>  Tra le diverse regole del gioco ne troviamo una che è fondamentale per chi vuole giocare al Softair:

<strong> AUTODICHIARARSI</strong>   quando si viene colpiti!

Se c’è una persona che viene screditata all’interno dei giocatori di Softair quella è  l’ <strong>HIGHLANDER</strong>.

L’Highlander è il giocatore che ormai è diventato famoso perché anche se viene colpito ed è evidente, non ammette di esserlo stato.

Purtroppo per lui nel Softair, si dà molta importanza al rispetto del gioco e se questo succede, può comportare l’espulsione dall’associazione sportiva per la quale si è iscritti.

Quindi ricorda, la regola più importante è autodichiararsi quando si viene colpiti.

Le altre regole, importanti soprattutto per garantire il divertimento e l’incolumità di tutti i partecipanti,sono:
<ul> 
    <li>usare repliche che rispettino la normativa vigente in Italia;</li>
    <li>evitare di parlare con la propria squadra quando si è stati colpiti e abbandonare l’area di gioco;</li>
    <li>Utilizzare le protezioni obbligatorie (gli occhialini di protezione sono tra questi);</li>
<li>Nel rispetto degli altri giocatori bisogna evitare di sparare a distanza ravvicinata (invitando l’avversario ad autodichiararsi).</li>
</ul>

  
</p></div>
        <div class="img__1 reveal1">
        <img src="regole_img1.png" >
        </div>
        
        
</div>



        


<div class="blocco3 ">

    <div class="titolo2">
        
    </div>
      
      <div class="contenuto__2 reveal3">
        <h4 class="mediumtext"> Modalità del softair</h3>
            <p>Vediamo come si svolge un game di Softair.Ci sono differenti modalità.Le più diffuse sono: <strong>DOMINATION </strong>,<strong> CAPTURE THE FLAG</strong>,<strong> DEATHMATCH</strong> , <strong> ASSALTO E DIFESA</strong>        </p>
      <h4 class="mediumtext"> DOMINATION </h3>
      <p>Si imposta un tempo di gioco entro cui, una delle due squadre, deve riuscire a conquistare più postazioni rispetto all’altra. Di solito, ciascuna postazione, viene contraddistinta da bandiere colorate o comunque segnalata in modo visibile. 

        Quindi, come dice la parola <strong>DOMINATION </strong> , vince chi riesce ad imporre il proprio dominio nell’area di gioco. </p>
      <h4 class="mediumtext">CAPTURE THE FLAG </h3>
      <p>Ogni squadra ha una bandiera, in corrispondenza della base. Lo scopo del game è di conquistare la bandiera nemica e portarla nella propria base.

        Anche qui c’è un tempo di gioco e, allo scadere, vince la squadra che, oltre alla sua bandiera, possiede anche la bandiera dell’altra squadra.
        
        Esiste anche un altro tipo di CAPTURE THE FLAG, quello in cui si gioca con una sola bandiera, assegnata ad una squadra.
        
        L’obiettivo di quest’ultima è quello di difendere la bandiera mentre quello dell’altra squadra è di conquistarla .
        
        Vince la squadra che, al termine del tempo di gioco, ha raggiunto il proprio obiettivo. </p>
      <h4 class="mediumtext">DEATHMATCH </h3>
      <p>Questa modalità prevede la formazione di due o più squadre composte dallo stesso numero di giocatori, e l’obiettivo di ogni squadra è quello di eliminare gli avversari

        Viene delineata un’area di gioco dove all’interno le squadre dovranno pattugliare. Il vincitore sarà la squadra che sarà rimasta con almeno un giocatore in “vita” quando tutti gli avversari saranno stati eliminati. </p>

        <h4 class="mediumtext">ASSALTO E DIFESA </h3>
            <p>Questa modalità è quella più praticata e diffusa in Italia. 

                Una squadra difende un obiettivo, l’altra ha il compito di conquistarlo. Impostato un tempo di gioco, la squadra in difesa ha il compito di difendere l’obiettivo e, terminati i minuti a disposizione, avere almeno alcuni componenti della squadra ancora in gioco. 
                
                Per la squadra di attacco, l’obiettivo è colpire i componenti dell’altra squadra e conquistare l’obiettivo.</p>
      
    </div>
  
  </div>




  <footer >
    <div class="main-carousel reveal1">
        <div class="fucili"> <a href="Fucili.php"> FUCILI </a> </div>
        <div class="pistole"> <a href="Pistole.php"> PISTOLE </a> </div>
        <div class="abbigliamento"> <a href="abbigliamento.php">ABBIGLIAMENTO </a> </div>
        <div class="regole"> <a href="regole.php">REGOLE E MODALITÀ</a> </div>
        <div class="contatti"> <a href="forum.php"> FORUM </a> </div>
     
        
        
        
      </div>

</footer>

</body>


</html> 