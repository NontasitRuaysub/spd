$('.review-carousel').owlCarousel({
    center: true,
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    items: 2,
    margin: 10,
    nav: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 3
        }
    }
})
// Carousel header
$('.owl-carousel').owlCarousel({
    autoplay: true,
    autoplayTimeout: 5000,
    loop: true,
    margin: 0,
    nav: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})