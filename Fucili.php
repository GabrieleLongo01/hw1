
<?php  session_start();
?>

<html>

<head>
      <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="softair2.css"> </link>
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
    
         <h1 class="bigtext"> Fucili Softair</h1>
           
        </div>
    
        <video autoplay muted loop id="myvideo"> <source src="fucili.mp4" type="video/mp4"> </video>
    </div>


    <div class="blocco2 reveal1">

       
        
        <div class="contenuto__3 reveal2" >
            <h3 class="bigtext"> Come scegliere il fucile da softair</h3>
            
            
            <p>  La scelta del fucile da softair più adatto alle tue esigenze dipende da molti fattori ed è ciò che maggiormente determinerà le tue prestazioni durante le simulazioni di combattimento. Un’ arma economica, ad esempio, è assolutamente adatta ai principianti che si approcciano a questo mondo per la prima volta e che hanno necessità di capire se questa disciplina può fare o meno al caso loro, senza spendere cifre esorbitanti.

                Discorso diverso invece vale per i veterani del settore, più navigati ed esigenti in termini di prestazioni, che ricercheranno nei loro fucili una precisione di tiro più elevata, resistenza e maneggevolezza. Non è importante dunque spendere subito migliaia di euro in equipaggiamento, contano molto di più le nozioni di base per comprendere il funzionamento dell’arma e le situazioni in cui è meglio utilizzarla, il comfort da essa offerto durante le partite e soprattutto la scelta di un fucile consono al ruolo che vorrai ricoprire.</p></div>
            
            <div class="img__1 reveal3">
            <img src="fucili_img1.png" >
            </div>
            
            
                </div>


            <div class="blocco2 reveal1">

        
            <div class="img__1">
                <img src="fucili_img2.png" >
                </div>
                <div class="contenuto__3 reveal3">
                <h3 class="bigtext"> Materiale del fucile</h3>
                
            
            <p>  Uno dei fattori di maggior incidenza sul prezzo di un fucile da softair è sicuramente il materiale costruttivo. Quelli in materiale plastico o ABS sono ovviamente più economici ed inclini ad incepparsi, ma sono anche un’ ottima scelta per chi sta cominciando. I fucili in Full Metal invece presentano solo alcune parti in plastica mentre la maggior parte della struttura e del sistema di sparo sono in metallo; più pesanti ma anche più affidabili, sono solitamente la scelta dei professionisti. Esiste anche una via di mezzo, un ibrido se vogliamo, che si assesta nella fascia di prezzo intermedia combinando i due materiali sopra citati per un buon compromesso fra spesa e prestazioni.</p></div>
            
             
            
            
            </div>


 <div class="blocco3">

   
      
      <div class="contenuto__4 reveal2">
      <h4 class="mediumtext">   Quanto costa un fucile da softair?</h4>
      
      <p>  il costo dei fucili da softair è influenzato da molti fattori ma possiamo identificare tre fasce di prezzo principali fra cui puoi scegliere la tua arma:

        Da 50-80€: La fascia di prezzo per chi inizia non dovrebbe mai superare questa cifra. Con 70 o 80 euro è possibile infatti trovare armi di fattura decente che ti accompagneranno durante le tue prime partite senza deludere le tue aspettative;
        Da 100-150€: Scegliendo marche come Classic Army e G&G, potrai trovare armi da principianti con un’ affidabilità maggiore nello sparo e nella durevolezza, un ottimo investimento per chi gioca in maniera saltuaria ma non vuole rinunciare ad una buona prestazione sul campo;
        Da 200-300+€: Qui siamo in top gamma, per queste cifre puoi trovare armi Full Metal veramente sopraffine, repliche fedeli in ogni dettaglio alle loro controparti reali. Se sei arrivato a spendere questi soldi è perché hai fatto del softair una vera passione. Le marche su cui dovresti puntare sono: 
        <a href="http://www.classicarmy.com/" class="siti">Classic Army</a>,<a href="https://www.tokyo-marui.co.jp/" class="siti">Tokyo Marui </a>,<a href="https://www.guay2.com/" class="siti">G&G</a>,
        <a href="https://store.kwausa.com/" class="siti">KWA</a>,<a href="https://www.icsbb.com/index_en.php" class="siti">ICS</a>.</p>
      
      
    </div>
  
  </div>



  <div class="blocco2 ">

       
        
    <div class="contenuto__3 reveal4">
    <h3 class="bigtext"> Fucile elettrico</h3>
    
    
    <p>  I fucili elettrici sono fucili automatici, in grado di sparare centinaia di colpi al minuto in maniera del tutto autonoma con la semplice pressione prolungata del grilletto, permettendoti così di colpire bersagli multipli con un solo caricatore. Vengono utilizzati dai soldati per obiettivi a corta/media distanza o come fuoco di soppressione perché consentono di infliggere molto danno rapidamente. Ideali per chi vuole fucili dalla potenza devastante, fedeli in ogni dettaglio alle armi reali.</p></div>
    
     <div class="img__1 reveal1">
    <img src="fucile_img5.png" >
    </div>
    
    
    </div>





<div class="blocco1 ">

        
        
        <div class="contenuto__1 reveal2">


        <h3 class="bigtext">Fucile da cecchino </h3>
        
        <p> 
            Il fucile da cecchino o di precisione è un fucile bolt action (azione singola), infatti tra un colpo e l’altro è necessaria un’azione manuale per aprire e chiudere l’otturatore. Viene utilizzato dagli sniper/cecchini. La sua funzionalità è colpire obiettivi a distanza infliggendo danno letale con un numero ridotto di colpi.

            Un fucile di questo tipo è solitamente costituito da:
            <ul>  
            <li> La canna lunga per evitare la perdita di accuratezza;</li>  
            <li> Il mirino ottico telescopico ad elevato ingrandimento;</li> 
            <li> Il treppiedi o un bipode per avere maggiore stabilità.</li> </ul>  </p>
    
        </div>

        <div class="img__1 reveal4" id='img_5'>
        <img src="fucili_img3.png" >
        </div>

        

        <div class="contenuto__2 reveal3">
        <h3 class="bigtext"> Fucile a pompa</h3>
        
        <p>  Il fucile a pompa è un’arma lunga a canna liscia, che utilizza un meccanismo di caricamento detto sistema scorrevole. Il fucile viene caricato con poche ma letali munizioni in grado di infliggere un’ enorme quantità di danno ai bersagli vicini. Questa caratteristica lo rende ideale per le situazioni di CQB, combattute negli interni o fra gli edifici.</p></div>




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