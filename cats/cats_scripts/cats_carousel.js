let w = window.innerWidth;
$(document).ready(function(){ 
    $(".numuri .owl-carousel").owlCarousel({
        items: 1,
        nav: true                        
    });     
    if(w>768) {
        $(".atsauk .owl-carousel").owlCarousel({
            items: 2,
            nav: true,
            center: true                       
        });        
    } else {
        $(".atsauk .owl-carousel").owlCarousel({
            items: 1,
            nav: true,
            center: true                       
        }); 
    }
});