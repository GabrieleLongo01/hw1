var elem = document.querySelector('.main-carousel');
var flkty = new Flickity( elem, {
 
  cellAlign: 'left',
  contain: true
});


ScrollReveal().reveal('.reveal1',{ distance: '50px',duration:1700 , easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 900  ,origin: 'bottom'});
ScrollReveal().reveal('.reveal2',{ distance: '50px',duration:1700 , easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 900  ,origin: 'left'});
ScrollReveal().reveal('.reveal3',{ distance: '50px',duration:1700 , easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 900  ,origin: 'right'});
ScrollReveal().reveal('.reveal4',{ distance: '50px',duration:1700 , easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 900  ,origin: 'top'});






