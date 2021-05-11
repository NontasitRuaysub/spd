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

// For search in Navbar
$(document).ready(function(){

    // Open Search bar
    $(".search-btn").on("click", function(){
        $(".search-box").addClass("search-open");
    });

    // Close Search bar
    $(".search-close").on("click", function(){
        $(".search-box").removeClass("search-open");
    });

    // Navbar on mobile device
    $(".burger").on("click", function(){
        $(".navbar-cs-menu").toggle("show-menu");
    });

    // Navbar product to product type 
    $(".has-dropdown").on("click", function(e){
        e.stopPropagation();
        $(".first-dropdown").toggle("show-menu");
    });

    // Navbar product type to each product 
    $(".dog-pd").on("click", function(e){
        e.stopPropagation();
        $(".dog-list").toggle("show-menu");
    });

    $(".cat-pd").on("click", function(e){
        e.stopPropagation();
        $(".cat-list").toggle("show-menu");
    });

    $(".other-pd").on("click", function(e){
        e.stopPropagation();
        $(".other-list").toggle("show-menu");
    });

    // Navbar food to food list
    $(".dog-food").on("click", function(e){
        e.stopPropagation();
        $(".dog-food-list").toggle("show-menu");
    });

    $(".cat-food").on("click", function(e){
        e.stopPropagation();
        $(".cat-food-list").toggle("show-menu");
    });

    $(".other-food").on("click", function(e){
        e.stopPropagation();
        $(".other-food-list").toggle("show-menu");
    });


});