$(document).ready(function(){
    $('#noticias .slider').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3500,
        arrows: false,
        dots: false,
        responsive: [
            {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
                }	
            }
        ]
    });
    $('#premios .slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false,
        responsive: [
            {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
                }	
            }
        ]
    });
});