$(document).ready(function(){
    $('#noticias .slider').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 3500,
        arrows: false,
        dots: false,
        responsive: [
            {
            breakpoint: 768,
            settings: unslick
            }
        ]
    });
    $('#premios .slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false,
        adaptiveHeight: true,
        responsive: [
            {
            breakpoint: 768,
            settings: unslick	
            }
        ]
    });
});