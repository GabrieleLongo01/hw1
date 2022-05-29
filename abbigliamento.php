
<?php  session_start();
?>


<html>
    <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&family=PT+Sans+Narrow:wght@700&display=swap" rel="stylesheet">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="softair.js" defer="true"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <link rel="stylesheet" href="softair.css"> </link>
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
        
             <h1 class="bigtext"> Abbigliamento Softair</h1>
               
            </div>
        
            <video autoplay muted loop id="myvideo"> <source src="abbigliamento.mp4" type="video/mp4"> </video>
        </div>

        <div class="blocco1 ">

            <div class="img__1 reveal1">
            <img src="abbigliamento_img1.png" >
            </div>
            
            <div class="contenuto__1 reveal4">
            <h3 class="bigtext"> Abbigliamento Militare</h3>
            
            
            <p>Scegliere l’ abbigliamento militare da softair giusto è molto importante soprattutto se si considera il fatto che questa disciplina viene praticata all’esterno in differenti condizioni climatiche. Non è dunque possibile dare un vestiario standard poiché la prima cosa da valutare quando si decide come vestirsi per la gara dell’ indomani, è capire in che condizioni meteorologiche ti ritroverai a combattere. Discorso diverso si può fare invece per gli accessori che, mimetica a parte, saranno più o meno sempre gli stessi per ogni scenario.

                In linea di massima possiamo suddividerli in: elmetti, protezioni per viso e occhi, guanti, stivali, gilet tattico e mimetica. </p></div>
            
            
            
            
            </div>




            <div class="blocco1 ">

               
                
                <div class="contenuto__1 reveal2">
                <h3 class="bigtext" id='titoli'>Il modo giusto per proteggere gli occhi</h3>
                
                
                <p>Inutile dire che utilizzando pallini di plastica come proiettili la prima cosa a cui un softgunner deve pensare è la protezione per gli occhi. Se sei alla tua prima esperienza non hai nulla di cui preoccuparti perché solitamente tutto l’equipaggiamento ti viene fornito dal club a cui ti appoggi, ma se il softair ha conquistato anche il tuo cuore, allora ti consigliamo di optare per gli occhiali in plexiglass o a rete metallica, l’importante è che coprano un’ ampia superficie intorno all’ occhio.

                    In alternativa sono molto utilizzate anche maschere da sci o coperture intere per il viso. Queste ultime possono essere ottime varianti dell’ occhiale standard, eliminando, in alcuni casi, anche la necessità di ulteriori protezioni per il viso. Per chi porta gli occhiali da vista e vuole evitare l’appannamento delle lenti invece è consigliabile evitare il plexiglass puntando sulla rete metallica che lascia sicuramente traspirare di più.</p></div>
                
                 <div class="img__1 reveal3">
                <img src="abbigliamento_img2.png" >
                </div>
                
                
                </div>


                <div class="blocco1 ">

                    <div class="img__1 reveal4">
                    <img src="abbigliamento_img3.png" >
                    </div>
                    
                    <div class="contenuto__1 reveal1">
                    <h3 class="bigtext"> L’ abbigliamento militare per viso, collo e testa</h3>
                    
                    
                    <p> Questo argomento racchiude diverse scuole di pensiero, c’è chi infatti preferisce una replica di un elmetto militare standard, chi ama usare semplicemente il passamatogna e ancora altri che optano per maschere che coprono bocca e naso fatte in plexiglass o rete metallica, oppure una combinazione di questi tre elementi. In questo caso non vi è una regola ferrea sull’abbigliamento militare per questa sezione del corpo, certo è che qualcosa a protezione delle parti più delicate del tuo volto è sempre bene averla. </p></div>
                    
                    
                    
                    
                    </div>




                    <div class="blocco1 ">

                        
                        
                        <div class="contenuto__1 reveal2">
                        <h3 class="bigtext"> Guanti, un utile accessorio per il tuo abbigliamento militare</h3>
                        
                        
                        <p>ndossare dei guanti non è fondamentale per vivere una bella esperienza di guerra simulata ma è caldamente raccomandato. Considera infatti che il 90% delle tue partite si svolgerà in boschi e foreste in cui rovi, arbusti secchi ed erbacce urticanti la fanno da padrone.

                            Le tue mani saranno per lo più occupate a tenere la tua arma primaria sempre pronta all’uso e ti ritroverai molto spesso a dover scostare la vegetazione con il loro dorso. Ecco perché un paio di guanti col dorso plastificato sono un’ ottima aggiunta al tuo abbigliamento militare da softair. In alternativa anche un buon paio di guanti invernali (se c’è freddo) o da palestra possono fare un lavoro discreto. </p></div>
                        
                        <div class="img__1 reveal3">
                        <img src="abbigliamento_img4.png" >
                        </div>
                        
                        
                        </div>




                        <div class="blocco1 ">

                            <div class="img__1 reveal1">
                            <img src="abbigliamento_img5.png" >
                            </div>
                            
                            <div class="contenuto__1 reveal4">
                            <h3 class="bigtext">Gilet tattico: per avere tutto a portata di mano</h3>
                            
                            
                            <p> Un’ aggiunta molto importante per l’equipaggiamento da softgunner è il gilet tattico. Questa protezione per il petto è il metodo migliore per trasportare caricatori aggiuntivi, borracce, radio e tutto quello che un buon soldato deve avere sempre a portata di mano. Addentrarsi nel vasto mondo di questo particolare accessorio in poche righe è impensabile, ma ti basti sapere che la scelta di un modello piuttosto che un altro dipende molto dalle esigenze del ruolo che decidi di assumere come operatore. </p></div>
                            
                            
                            
                            
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