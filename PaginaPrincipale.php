
<?php  

include 'config.php';

session_start();



?>


<!DOCTYPE html>


    <head>
        <meta charset="UTF-8">
        <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDh58QklIwchmHBNuNA6Hfukeink6klIyU"></script>
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
        
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&family=PT+Sans+Narrow:wght@700&display=swap" rel="stylesheet">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="softair.js" defer="true"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <link rel="stylesheet" href="softair.css"> </link>
        
        <meta name="viewport" content="width=device-width,initial-scale=1">


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
         <div class="mediumtext"> <a href="regole.php">REGOLE E MODALITÀ </a> </div>
         
         <?php if(isset($_SESSION['id'])){ echo " <div class='mediumtext'> <a href='logout.php'>LOGOUT </a> </div>" ;} else{
             echo " <div class='mediumtext'> <a href='login.php'>LOGIN </a> </div>";
         }?>


         
        </div>

        

</nav>

<div class="video">
    <div class="video__content reveal1" >
    <?php if(isset($_SESSION['id'])){ echo "<h1 class='bigtext'> Benvenuto ".$_SESSION['nomeutente']."</h1>" ;}else {
        echo "<h1 class='bigtext'> SOFTAIR</h1>";

    } ?>
     
       
    </div>

    <video autoplay muted loop id="myvideo"> <source src="video-back.mp4" type="video/mp4"> </video>
</div>




<div class="blocco1 ">

<div class="img__1 reveal1">
<img src="img1.jpg" >
</div>

<div class="contenuto__1 reveal4">
<h3 class="bigtext"> Cos'è il softair?</h3>


<p> Il softair è un’attività sportiva/ricreativa che consiste nel riprodurre uno scontro a fuoco impiegando armi ed equipaggiamenti che garantiscono l’incolumità dei partecipanti.La competizione si svolge quasi sempre all’aperto, tendenzialmente in boschi o in aree urbane circoscritte, lontane da cose o persone che possano subire danni.

    Generalmente, il softair simula un conflitto armato tra due o più fazioni contrapposte, ognuna caratterizzata da alcuni segni distintivi (ad esempio, il colore delle armi o del caschetto protettivo) che consentono ai contendenti di fronteggiarsi adoperando strategie e tattiche militari. <a href="youtube.php" class="youtube" > Scopri di più.</a>
</p></div>




</div>



<div class="blocco2  ">

  <div class="titolo2">
      
  </div>
    
    <div class="contenuto__2 reveal3">
    <h4 class="mediumtext"> Cosa sono le ASG?</h3>
    
    
    <p> ASG è l'acronimo di Air Soft Gun: sono delle riproduzioni di pistole e fucili, prevalentemente in plastica (più economiche) o prevalentemente in metallo (riproduzione più fedele, più pesanti e più robuste).

        Le ASG sparano pallini in plastica. I pallini hanno un diametro di 6 mm. e il loro peso varia tra i 0,12 ed i 0,30 grammi.
        Le armi softair possono essere a colpo singolo, semiautomatiche o a raffica (a seconda del modello).
        Le repliche softair possono essere a molla, a gas o elettriche (con batterie ricaricabili).
        Non sono assolutamente da confondere con le armi ad aria compressa: le ASG hanno una potenza molto bassa (inferiore ad 1 Joule) e sono innocue. Non necessitano di alcuna licenza o autorizzazione, ma possono essere vendute solo ai maggiori di 16 anni.Le pistole vengono solitamente utilizzate per il tiro al bersaglio (sono spesso utilizzate nei luna parks), per collezionismo o come "arma di supporto" nei Combats. I fucili invece vengono principalmente utilizzati per i Combats.
    
    </p>
    <h4 class="mediumtext"> Cosa sono i Combats?</h3>
    <p> Sono delle avvincenti "simulazioni di guerra" in cui una o più squadre hanno un obiettivo da raggiungere (per esempio: conquistare un fortino, liberare un ostaggio, stanare un cecchino, annientare la squadra avversaria, eccetera): chi viene colpito si auto dichiara "colpito" ed esce dal gioco.
    </p>
    <h4 class="mediumtext"> Cosa serve per cominciare a praticare il Soft Air?</h3>
    <p> E' sufficiente acquistare un fucile (con caricatore maggiorato, batteria e caricabatteria, se non compresi con il fucile): alcuni clubs hanno comunque armi di squadra da noleggiare ai neo-iscritti.
        Sono necessarie le protezioni per il viso: occhiali o meglio ancora una maschera protettiva.
        E' consigliabile indossare abbigliamento comodo, protettivo e in colori adeguati (verde e sabbia principalmente, permettono di mimetizzarsi nelle ambientazioni boschive).
        Inoltre è consigliabile indossare scarponi comodi con una suola tassellata per evitare di scivolare.
        Ovviamente una mimetica militare e degli anfibi rispondono perfettamente alle caratteristiche e sono l'ideale.
        Per completare l'attrezzatura è consigliabile avere un paio di guanti protettivi e, per chi giocasse in un ambiente urbano, ginocchiere ed elmetto.
        L'attrezzatura elencata è sufficiente per cominciare. In seguito, per chi volesse completare l'equipaggiamento da softair, è utile aggiungere un tattico con tasche per contenere i caricatori di riserva ed i pallini di scorta.
    </p>
    
  </div>

</div>

 





<div class="map reveal4">
    <p class="normaltext"> 
        Non sai dove comprare l'attrezzatura giusta?Controlla la mappa e scegli il negozio più vicino a te!
    </p>
<div id="map" style="width:100%; height: 800px;"></div></div>



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





<script>

    $(document).ready(function(){
        var pos={lat:41.7968967,lng:14.1884962};
var map=new google.maps.Map(document.getElementById("map"),{center:pos,zoom:6});

var marker=[
getMarker(36.95733466532302, 14.52639366974799,"SHOP SOFTAIR"),
getMarker(36.95019731697823, 14.535525409611468,"ARMERIA IAPICHINO"),
getMarker(36.823362436700855, 14.947994747077667,"SOFTAIR KOJACK'S"),
getMarker(37.52214511920166, 15.001529056138262,"SOFTAIR AND GAME"),
getMarker(37.51177119166579, 15.085836590969693,"SOFTAIR E DINTORNI"),
getMarker(37.521377855511325, 15.00391100897865,"SOFTAIR AND GAME"),
getMarker(37.60331850922433, 15.119596585860293,"DM.AC.AIRSOFT INNOVATIVE SOLUTION"),
getMarker(38.18085839467246, 15.547006608830612,"NUCLEAR ZONE"),
getMarker(38.18010498328601, 15.550653575476307,"BAD MONKEY"),
getMarker(38.076567850048086, 13.502476599920945,"SOFTAIR MANIA"),
getMarker(38.14000853165066, 13.351393213660073,"SOFTAIR HOUSE"),
getMarker(38.15072513813475, 13.328559130472714,"MAX FUCHS"),
getMarker(38.67414125877807, 16.10037749907387,"SIMPSON SHOP"),
getMarker(38.90698932255712, 16.593281672981757,"ARMI SPORT GRILLO"),
getMarker(40.11791666019196, 18.29873799141991,"SOFTAIR"),
getMarker(40.52653296696142, 17.58567846399706,"SPECIAL GUN SHOP"),
getMarker(40.85103615629485, 17.12629067308783,"NV 85 STORE"),
getMarker(40.94477891827693, 17.306042266653805,"FREE SHOT"),
getMarker(41.043912180141135, 16.8250899372043,"EQUISOFTAIR"),
getMarker(41.11262304368405, 16.873023680974885,"FARO LUDICO"),
getMarker(40.60752415577405, 14.990609307485043,"DMR SOFTAIR"),
getMarker(41.26902372749321, 16.4341523259694,"SOFTAIR ONLINE ITALIA"),
getMarker(40.66895249836164, 14.79135347532149,"CALIBRE MAGNUM"),
getMarker(40.69763457855861, 14.48645912058019,"FLY SOFTAIR"),
getMarker(40.840614994261024, 14.493540186316913,"EBAIRSOFT"),
getMarker(40.860480950671935, 14.272226688302343,"CHIF SOFTAIR MARKET"),
getMarker(40.84411148337981, 14.252441081254224,"MILES SOFTAIR"),
getMarker(41.62793724633536, 15.917388297371415,"SOFTAIR SVAPO GARAGE"),
getMarker(41.57009741742466, 14.667929090988203,"NSC SOFTAIR"),
getMarker(42.0071219220499, 14.652388289800582,"DI RITO SOFTAIR"),
getMarker(41.837727932067416, 14.066296883561645,"GT SOFTAIR"),
getMarker(41.68300661415089, 14.042372211085139,"DCC SOFTAIR"),
getMarker(41.58933037774566, 13.285301816593758,"DM SOFTAIR"),
getMarker(41.354744579931484, 13.43239701561971,"TACTICAL BEARD SOFTAIR"),
getMarker(41.668829537023555, 12.500122713203393,"LASER GAME SOFTAIR"),
getMarker(41.81283358566053, 12.487034891105072,"ZONE 7"),
getMarker(41.81519034891306, 12.412190319116398,"POLIGONO SOFTAIR"),
getMarker(41.859499295933226, 12.45170370948781,"SOFTAIR MONTANI"),
getMarker(41.85939495763841, 12.554774728250385,"SOFTAIR INSIDE"),
getMarker(41.980346697756474, 12.511191301460688,"SPECTRE SOFTAIR"),
getMarker(42.51311534730749, 14.146160466174052,"DIGI SOFTAIR"),
getMarker(42.744222830727104, 13.963749940223028,"PUNTO SOFTAIR"),
getMarker(42.581336173160246, 12.621101124571464,"TERNI SOFTAIR"),
getMarker(42.901296399023884, 12.729912609202424,"NEF CACCIA"),
getMarker(42.76960448078058, 11.109816738291162,"REVENGE SOFTAIR"),
getMarker(43.06869797932229, 12.548426680945528,"RELOAD SOFTAIR"),
getMarker(43.27034248707707, 13.586217654671703,"CENTRO SOFTAIR"),
getMarker(43.558530751381056, 10.314294706349841,"RANDEZ-VOUS SOFTAIR"),
getMarker(43.77512809175259, 11.288514542840097,"GUNSHOT SOFTAIR"),
getMarker(43.8552872364024, 12.75461247541987,"FPS SOFTAIR"),
getMarker(43.936665548841, 12.446885389114573,"TARGET SOFTAIR"),
getMarker(43.93590697261699, 12.446949749741039,"SOFTAIR RASTELLI"),
getMarker(43.93681149056606, 12.446458089069505,"IL SEMAFORO"),
getMarker(43.94622651170598, 12.454976422414445,"JOLLY SOFTAIR"),
getMarker(43.97269259012894, 12.483149925805446,"SAFARA SOFTAIR"),
getMarker(43.977628462554144, 12.473087430007364,"GM SOFTAIR"),
getMarker(43.99013215339386, 12.504844623904976,"SOFTAIR GAMES"),
getMarker(43.98766256900816, 12.50978102200918,"TITANO STORE"),
getMarker(43.987531118872084, 12.510531423423458,"SOFTAIR SHOP VENDIBENE"),
getMarker(43.981393866955436, 10.200633573949268,"SOFTAIR ITALIA"),
getMarker(44.052105368356784, 10.059742405309684,"BLACK HAWL SOFT"),
getMarker(44.80714274112698, 10.565361937937647,"LA TARTARUGA"),
getMarker(44.47885364253726, 11.283946443349251,"WARFARE SHOP 3,0"),
getMarker(44.65426071288143, 10.965450177999953,"M.G.M SOFTAIR SAS "),
getMarker(44.70858216193199, 10.611956648014516,"MONOPOLY SOFTAIR"),
getMarker(44.709417887650396, 10.608864631470716,"BARBAROSSA SOFTAIR"),
getMarker(45.22860131799621, 11.657072896683882,"IL PALLINO SOFTAIR"),
getMarker(45.453907482909294, 11.884094676088539,"THREE GUNS SOFTAIR"),
getMarker(45.54224437424133, 11.524658528748551,"SOFTAIR VICENZA"),
getMarker(45.43505244975717, 10.988455375475263,"SOFTAIR VERONA"),
getMarker(45.495547404762426, 10.354875732167967,"WUNDERWAFFE SOFTAIR"),
getMarker(45.524904676029685, 9.29990613247328,"OUTLET DEL SOFTAIR"),
getMarker(45.59647144913272, 9.23005996655859,"CALICO JACK SOFTAIR"),
getMarker(45.435839563580096, 7.879865163413267,"NEMESIS SOFTAIR"),
getMarker(45.46121190127363, 7.792995907981281,"ARENA FIGHTERTOWN"),
getMarker(45.067932352803524, 7.617255483557742,"TORINO SOFTAIR"),
getMarker(45.01865380477638, 7.624105546926381,"SOFTAIR MILITARY"),
getMarker(45.098198400564264, 7.359723094186288,"NONNO SOFTAIR"),
getMarker(44.106967024046746, 9.814717143754589,"TERRA DI CONFINE"),


];


function getMarker(lat,lng,title){ 
return new google.maps.Marker({

    position:{lat:lat,lng:lng},
    map:map,
    title:title
});







    } })
</script>