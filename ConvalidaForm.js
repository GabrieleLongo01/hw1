
/*var mysql=require('mysql');
var conn=mysql.createConnection({
host:"127.0.0.1",
username:"root",
pass:"",
db:"homework",
})

conn.connect(function(err)){
    if(err)
    throw err;
    console.log("Connessione avvenuta con successo");
}*/

const nome=document.getElementById("nome");
const cognome=document.getElementById("cognome");
const nomeutente=document.getElementById("nomeutente");
const email=document.getElementById("email");
const password=document.getElementById("password");
const conferma_password=document.getElementById("conferma_password");


function controllo(event){

    if(nome.value.trim()===''){
       
    Errore(nome," Il campo 'Nome' non può essere vuoto");
    event.preventDefault();
    } else if(!controllo_caratteri1(nome.value.trim())){
        Errore(nome," Nome non valido");
        event.preventDefault();
        
    }else{ NoErrore(nome,"Nome valido");}

    

  if(cognome.value.trim()===''){
       
        Errore(cognome," Il campo 'Cognome' non può essere vuoto");
        event.preventDefault();
        } else if(!controllo_caratteri1(cognome.value.trim())){
            Errore(cognome," Cognome non valido");
            event.preventDefault();
            
        }else{ NoErrore(cognome,"Cognome valido");}

          if(nomeutente.value.trim()===''){
         Errore(nomeutente," Il campo 'Nome Utente' non può essere vuoto"); 
         
            event.preventDefault();
            } else if(!controllo_caratteri2(nomeutente.value.trim())){
                Errore(nomeutente," Nome Utente non valido");
                event.preventDefault();
            }else{ NoErrore(nomeutente,"Nome utente valido");}



            if(email.value.trim()===''){
       
            Errore(email," Il campo 'Email' non può essere vuoto");
            event.preventDefault();
            } else if(!controlloEmail(email.value.trim())){
                Errore(email," Email non valida");
                event.preventDefault();
            }else{ NoErrore(email,"Email valida");}



            if(password.value.trim()===''){
       
                Errore(password," Il campo 'Password' non può essere vuoto");
                event.preventDefault();
                } else if(!controllo_caratteri2(password.value.trim())){
                    Errore(password," Password non valida");
                    event.preventDefault();
                }else{NoErrore(password,"Password valida");}


               if(conferma_password.value.trim()===''){
       
                    Errore(conferma_password," Il campo 'Conferma_Password' non può essere vuoto");
                    event.preventDefault();
                    } else if(!controllo_caratteri2(conferma_password.value.trim())){
                        Errore(conferma_password," Password non valida");
                        event.preventDefault();
                    }else if(password.value.trim()!=conferma_password.value.trim() ){
                    Errore(conferma_password,"Le password non corrispondono");
                    Errore(password,"Le password non corrispondono");
                    event.preventDefault();

                    }else{NoErrore(conferma_password,"Password valida");}







}


function NoErrore(input,text){
    let parent=input.parentElement;
    let small=parent.querySelector("small");
    small.style.visibility="visible";
    small.innerText=text;
  
  parent.classList.remove(".input_form");
   parent.classList.remove("input_errato");  
   parent.classList.add("input_corretto");
   small.classList.remove("errore");
   small.classList.add("no_errore");
   
}


function Errore(input,text){
    let parent=input.parentElement;
    let small=parent.querySelector("small");
    small.style.visibility="visible";
   small.innerText=text;

  parent.classList.remove(".input_form");
   parent.classList.add("input_errato");  
   parent.classList.remove("input_corretto");
   small.classList.remove("no_errore");
   small.classList.add("errore");
   

   
 
}


function controllo_caratteri1(input){
    return /^[a-zA-Z0-9]{1,15}$/.test(input);
}

function controllo_caratteri2(input){
    return /^[a-zA-Z0-9_]{5,15}$/.test(input);
}

function controlloEmail(email){
   return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function informazioniCaratteri(event){
    let div=document.querySelector(".c_finestra");

    
    div.classList.add("finestra");
    
    div.style.display="block";
    
    
    
   
}

function informazioniCaratteriOut(event){
    let div=document.querySelector(".c_finestra");
   
    div.style.display="none";

}








const button=document.querySelector("button");
 button.addEventListener("click",controllo);

const informazioni=document.querySelector(".informazioni");
informazioni.addEventListener("mouseover",informazioniCaratteri);
informazioni.addEventListener("mouseleave",informazioniCaratteriOut);
