<?php  session_start();
?>


<html>


<head>  <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="pistole.css">
    <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&family=PT+Sans+Narrow:wght@700&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="softair.js" defer="true"></script>
        <script src="https://unpkg.com/scrollreveal"></script>

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
     <div class="mediumtext"> <a href="regole.php"> REGOLE E MODALITÀ</a> </div>
   
     <?php if(isset($_SESSION['id'])){ echo " <div class='mediumtext'> <a href='logout.php'>LOGOUT </a> </div>" ;} else{
             echo " <div class='mediumtext'> <a href='login.php'>LOGIN </a> </div>";
         }?>
     
    </div>
    
    </nav>
    <div class="video">
        <div class="video__content reveal1" >
    
         <h1 class="bigtext"> Pistole Softair</h1>
           
        </div>
    
        <video autoplay muted loop id="myvideo"> <source src="pistole.mp4" type="video/mp4"> </video>
    </div>



    <div class="blocco1 ">

        
        
        <div class="contenuto__1 reveal1">
        <h3 class="bigtext">Le migliori pistole per Softair</h3>
        
        
        <p> Nel tuo equipaggiamento non può mancare la pistola da softair, importantissima arma di back up che, in determinate situazioni, può davvero fare la differenza fra la vittoria e la sconfitta. Anche se in questa disciplina a farla da padrone sono le diverse tipologie di fucili, sicuramente più divertenti da utilizzare perché definiscono concretamente il tuo ruolo nella squadra, avere un’ arma di supporto su cui ripiegare in caso di esaurimento del caricatore fa veramente comodo.

            Come per i fucili, anche le pistole offrono un’ ampia gamma di scelta fra cui spaziare, ma i criteri per determinare il modello più consono alle tue esigenze sostanzialmente non differiscono più di tanto. Devi valutare innanzi tutto il tipo di propellente che più ti attira, i materiali costruttivi e le prestazioni che vuoi ottenere dalla tua arma. La scelta del modello specifico diviene quindi secondaria e ricade più sulla maneggevolezza e l’estetica che su un effettiva utilità in battaglia. </p></div>
        
        <div class="img__1 reveal4">
        <img src="pistole_img1.png" >
        </div>
        
        
        </div>


        <div class="blocco1 ">

         <div class="img__1 reveal2">
            <img src="pistola_img2.png" >
            </div>
        
            <div class="contenuto__1 reveal3">
            <h3 class="bigtext">I propellenti della pistola da softair</h3>
            
            
            <p> La prima classificazione che viene fatta quando si parla di pistole da softair riguarda il tipo di propellente che esse utilizzano per sparare il proiettile. Le tre tipologie principali da tenere in considerazione al momento dell’acquisto sono: CO2 , a Gas o Green Gas, ed Elettrico. Ne esiterebbe anche una quarta, ovvero quelle a molla ma la potenza offerta è talmente irrisoria che vengono considerate essenzialmente giocattoli, non sufficientemente performanti per chi desidera assaporare la vera esperienza del softair e quindi mai menzionate nelle guide all’ acquisto.</p></div>
            
           
            
            
            </div>




            <div class="blocco2  ">

                <div class="titolo2">
                    
                </div>
                  
                  <div class="contenuto__2 reveal4">
                  <h4 class="mediumtext"> Pistole Elettriche</h3>
                  
                  
                  <p>        
                    Si tratta della fascia che potremmo definire entry level, le pistole elettriche sono caratterizzate da un prezzo conveniente che le rende perfette per chi è alla sua prima esperienza nel softair e magari preferisce investire più denaro su un buon fucile. Il meccanismo che permette di sparare è estremamente semplice e consiste in un pistone azionato da un motorino elettrico che ne consente il movimento. Quando si preme il grilletto il pistone arretra caricando di aria un’ apposita camera che poi verrà decompressa istantaneamente e spingerà il proiettile fuori dalla canna.

                    L’aria compressa non ha però una potenza molto elevata e la gittata è abbastanza ridotta, ma può fungere comunque come un efficace arma da supporto nelle situazioni più disperate. Alcuni modelli sono soggetti a surriscaldamento.
                  </p>
                  <h4 class="mediumtext">Pistole a Gas</h3>
                  <p> La caratteristica principale delle pistole a Gas è quella di utilizzare per propellente una miscela di gas naturali fra cui propano, butano, pentano e ciclometicone (lubrificante siliconico). Il caricatore ha al suo interno un serbatoio che può essere ricaricato facilmente con una bomboletta apposita (dal costo di circa 3-5€ a seconda della capacità), che rilascia una quantità di gas predeterminata ogni volta che si preme il grilletto, permettendo al proiettile di essere sparato.La potenza erogata e la gittata sono notevolmente più performanti rispetto ad una comune pistola elettrica ed i materiali di costruzione delle repliche sono pressochè fedeli alle armi originali. Alcuni modelli sono anche dotati di scarrellamento, ovvero la simulazione del movimento del carrello quando si spara.

                    Le note negative sono principalmente due: la facilità con cui si scarica il serbatoio del gas che permette di sparare all’ incirca 20 colpi (varia a seconda del caricatore), prima che si esaurisca e la pesante influenza della cosiddetta Legge di Boyle, secondo cui temperatura e pressione di un gas sono fra loro correlate.
                    
                    Parlando in termini più profani senza addentrarci troppo nei tecnicismi, possiamo dire che con temperature alte (d’estate ad esempio) la potenza della vostra pistola da softair sarà notevole, mentre con temperature fredde anche la potenza e la gittata diminuiranno. Ciò non di meno si tratta di un ottimo compromesso fra qualità e prezzo che le rende una scelta comune anche fra i professionisti. </p>
                  <h4 class="mediumtext"> Pistole a CO2</h3>
                  <p> Considerate dalla maggior parte degli appassionati le più performanti in termini di potenza e velocità del proiettile, le Pistole a CO2 sono molto simili alle loro cugine a gas nel meccanismo di funzionamento, con la differenza principale che il serbatoio è costituito da una vera e propria bomboletta sotto pressione in cui è contenuto il biossido di carbonio che consente di sparare una maggior quantità di colpi.Anche queste pistole sono repliche estremamente fedeli delle controparti originali, con dettagli e materiali curati nei minimi particolari per soddisfare gli appassionati più esigenti, compreso lo scarrellamento.

                    Il principale vantaggio che offrono, a differenza delle pistole a gas, è la completa immunità alla sopra citata Legge di Boyle, che le rende perfette per essere utilizzate durante tutto l’anno. Delle tre tipologie di propellente però sono anche le più costose, riservate ad un pubblico di veri appassionati. </p>
                  
                </div>
              
              </div>




              <footer >
                <div class="main-carousel reveal1">
                    <div class="fucili"> <a href="file:///C:/Users/gabry/Desktop/softair/Fucili.html"> FUCILI </a> </div>
                    <div class="pistole"> <a href="file:///C:/Users/gabry/Desktop/softair/Pistole.html"> PISTOLE </a> </div>
                    <div class="abbigliamento"> <a href="file:///C:/Users/gabry/Desktop/softair/abbigliamento.html">ABBIGLIAMENTO </a> </div>
                    <div class="regole"> <a href="file:///C:/Users/gabry/Desktop/softair/regole.html"> REGOLE </a> </div>
                    <div class="contatti"> <a href="file:///C:/Users/gabry/Desktop/softair/contatti.html"> CONTATTI </a> </div>
                    
                    
                    
                  </div>
            
            </footer>

</body>

</html>