var interval = null;
$(document).on('ready',function(){
   

    interval = setInterval(updateDiv,5000);
});

function updateDiv(){
    $('#subscribe-modal').modal('show')
    clearInterval(interval); // stop the interval
    
}
    


var owl = $('#workout_carousel').owlCarousel({
    items: 1,
    loop: false,
    center: true,
    margin: 10,
 
    nav: true,
    callbacks: true,
   
    autoplayHoverPause: true,
    startPosition: 'URLHash',
    navText : ['<i class="material-icons">chevron_left</i>','<i class="material-icons">chevron_right</i>']

  });

//   owl.on('mousewheel', '.owl-stage', function (e) {
//     if (e.deltaY>0) {
//         owl.trigger('prev.owl');
//     } else {
//         owl.trigger('next.owl');
//     }
//     e.preventDefault();
// });
