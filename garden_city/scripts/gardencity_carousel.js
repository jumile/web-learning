let w = window.innerWidth;
$(document).ready(function(){
    $('.explore .owl-carousel').owlCarousel({
        loop: true,
        dots: false
    });
    if(w<800) {
        $('.about .owl-carousel').owlCarousel({
            items: 2, 
            loop: true,
            dots: false,
            margin: 0
        });
    } else {
        $('.about .owl-carousel').owlCarousel({
            items: 4, 
            loop: true,
            dots: false,
            margin: 0
        });
    }
});