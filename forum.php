
<?php 
session_start();
include 'config.php';
date_default_timezone_set('Europe/Rome');
?>


<html>






<head>
  
    <link rel="stylesheet" href="forum.css"> </link>
    <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&family=PT+Sans+Narrow:wght@700&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://apis.google.com/js/api.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    
   
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

   

   <section id="container_tabella"> </section> 
   <div id="form_modifica"> </div>




   <?php 
  
   
   
   
   if (isset($_SESSION['nomeutente'])){
  echo "
 <form method='POST' action='' class='form_commenti' id='myform'> 
 <input type='hidden' name='commento_id' value = ''>
    <input type='hidden' name='id_utente' value ='".$_SESSION['nomeutente']."'>  
    <input type='hidden' name='data' value ='".date('Y-m-d H:i:s:')."'>  
    <textarea name='messaggio' id='messaggio' class='normaltext' ></textarea> <br>
    <button type='submit' name='invia_commenti' class='bottone_commenti normaltext' id='btn_commenti'> Commenta </button>
</form>"; }else{
    echo " <p class='text-commenti normaltext'> Accedi per chattare con altri utenti. </p> <div class='text-commenti normaltext'> <a href='login.php' class='a_login'>LOGGA </a>  </div>";
     

    
}


?>



<script>

    const commenta_btn=document.querySelector('#btn_commenti');
    commenta_btn.addEventListener('click',inserisciCommento);
    genera_tabella();
  












function genera_tabella(){

fetch('select_ajax.php',{
    method:'POST',
    header: {
        'Content-Type':'application/json'

    }
}).then(response => response.json())
.then(data=>{persone=data;
console.log('dati ricevuti:',data);

let tabella=`


    <div class ='div_form'>  ${genera_righe(data)}</div>

`;
let container_tabella=document.querySelector('#container_tabella');
container_tabella.insertAdjacentHTML('beforeend',tabella);   
 
    const elimina_bottone=document.querySelectorAll('#elimina_commento');
   

   
    for(let i=0;i<elimina_bottone.length;i++)
    {elimina_bottone[i].addEventListener('click',elimina_commento);
     
    }



});


}





function genera_righe(persone){ 
let righe='';
persone.forEach(persona =>{
    
    let riga=`
   
        <p> ${persona.id_utente}  <br>
      ${persona.data} <br><br>
       ${persona.messaggio} <br>
       <input type='hidden' name='messaggio' id='input_mess' data-val ='${persona.messaggio}'>
        <button id='elimina_commento' data-val='${persona.commento_id}'> ELIMINA </button>
        
        
       </p>
    

`;
righe+=riga;
});
return righe;
}






function inserisciCommento(){
    event.preventDefault();
  
   const myForm = document.getElementById('myForm');
 
const formData = new FormData(myform);



    fetch('insert_ajax.php',{
    method:'POST',
    header: {
        'Content-Type':'application/json'

    },
    body:formData
}).then(response => response.json())
.then(data=>{
    
    console.log('dati ricevuti:',data);
   
aggiornaTabella();


});}

function aggiornaTabella(){
    let div= document.querySelector('.div_form');
    container_tabella.removeChild(div);
    genera_tabella();
}



  
function elimina_commento(e){
   let id=e.target.getAttribute('data-val');
     
    console.log('eliminato:',e.target.getAttribute('data-val'));
 const formData = new FormData(myform);
    formData.append('commento_id',id);
    
 
    event.preventDefault();
  
  const myForm = document.getElementById('myForm');



fetch('delete_ajax.php',{
   method:'POST',
   header: {
       'Content-Type':'application/json'

   },
   body:formData
}).then(response => response.json())
.then(data=>{
    console.log('dati ricevuti:',data);
 
  
aggiornaTabella();


});

}












</script>





</body>
</html>