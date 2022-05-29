ScrollReveal().reveal('.reveal1',{ distance: '350px',duration:1300 , easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 300  ,origin: 'bottom'});
ScrollReveal().reveal('.reveal2',{ distance: '350px',duration:1300 , easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 300  ,origin: 'left'});
ScrollReveal().reveal('.reveal3',{ distance: '350px',duration:1300 , easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 300  ,origin: 'right'});
ScrollReveal().reveal('.reveal4',{ distance: '350px',duration:1300 , easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 300  ,origin: 'top'});

var elem = document.querySelector('.main-carousel');
var flkty = new Flickity( elem, {
 
  cellAlign: 'left',
  contain: true
});
/*function onJson(json){
  console.log(json);
  const sezione=document.querySelector(".videoyt");
  sezione.innerHTML="";
  const items=json.items;
  console.log(items);

  for(let dati of items){

    

     const img_url=dati.snippet.thumbnails.high.url;
     const div=document.createElement("div");
     

const img=document.createElement("img");
img.src=img_url;


const a=document.createElement("a");
a.href=("https://www.youtube.com/embed/"+dati.id.videoId);
a.textContent=("https://www.youtube.com/embed/"+dati.id.videoId)
a.classList.add("a_yt");
img.classList.add("video_api");
div.appendChild(img);
div.appendChild(a);



console.log(a);


sezione.appendChild(div);
      

  }}






function onResponse(Response){
  
  return Response.json();
  
  }

function search(event){
console.log("cliccato");
  event.preventDefault();
   yt_url=("https://www.googleapis.com/youtube/v3/search?part=snippet&q=softair&type=video&key=AIzaSyCcRHhbftQLYJJjfQf0829qgOY6XeMPxy8&maxResults="+maxResults);
   
  fetch(yt_url).then(onResponse).then(onJson);
  
  }

 
const maxResults=12;
const button=document.getElementsByClassName("button_yt");
button.addEventListener("click",search);*/

