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
$(document).ready(function () {

    // Navbar on mobile device
    $(".navbar-burger").on("click", function () {
        $(".navbar-cs-menu").slideToggle("show-menu");

        if ($(this).hasClass("is-active")) {
            $(this).removeClass("is-active");
        } else {
            $(this).addClass("is-active")
        }
    });

    // Open Search bar
    $(".search-btn").on("click", function () {
        $(".search-box").addClass("search-open");
    });

    // Close Search bar
    $(".search-close").on("click", function () {
        $(".search-box").removeClass("search-open");
    });

    // Navbar product to product type 
    $(".has-dropdown").on("click", function (e) {
        e.stopPropagation();
        $(".first-dropdown").toggle("show-menu");
        if ($(".pd-arrow").hasClass("active")) {
            $(".pd-arrow").removeClass("active");
        } else {
            $(".pd-arrow").addClass("active")
        }
    });

    // Navbar product type to each product 
    $(".dog-pd").on("click", function (e) {
        e.stopPropagation();
        $(".dog-list").toggle("show-menu");
        if ($(".dog-pd-arrow").hasClass("active")) {
            $(".dog-pd-arrow").removeClass("active");
        } else {
            $(".dog-pd-arrow").addClass("active")
        }
    });

    $(".cat-pd").on("click", function (e) {
        e.stopPropagation();
        $(".cat-list").toggle("show-menu");
        if ($(".cat-pd-arrow").hasClass("active")) {
            $(".cat-pd-arrow").removeClass("active");
        } else {
            $(".cat-pd-arrow").addClass("active")
        }
    });

    $(".other-pd").on("click", function (e) {
        e.stopPropagation();
        $(".other-list").toggle("show-menu");
        if ($(".other-pd-arrow").hasClass("active")) {
            $(".other-pd-arrow").removeClass("active");
        } else {
            $(".other-pd-arrow").addClass("active")
        }
    });

    // Navbar food to food list
    $(".dog-food").on("click", function (e) {
        e.stopPropagation();
        $(".dog-food-list").toggle("show-menu");
        if ($(".dog-food-arrow").hasClass("active")) {
            $(".dog-food-arrow").removeClass("active");
        } else {
            $(".dog-food-arrow").addClass("active")
        }
    });

    $(".cat-food").on("click", function (e) {
        e.stopPropagation();
        $(".cat-food-list").toggle("show-menu");
        if ($(".cat-food-arrow").hasClass("active")) {
            $(".cat-food-arrow").removeClass("active");
        } else {
            $(".cat-food-arrow").addClass("active")
        }
    });

    $(".other-food").on("click", function (e) {
        e.stopPropagation();
        $(".other-food-list").toggle("show-menu");
        if ($(".other-food-arrow").hasClass("active")) {
            $(".other-food-arrow").removeClass("active");
        } else {
            $(".other-food-arrow").addClass("active")
        }
    });


});

// For According menu on q-and-a.html 
const accordion = document.getElementsByClassName('content-box');

for (i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener('click', function () {
        this.classList.toggle('active')
    })
}