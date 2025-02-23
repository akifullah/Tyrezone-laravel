
// MOBILE NAVBAR TOGGLER
// let navToggler = document.getElementById("navToggler");
// let navClose = document.getElementById("navClose");
// let nav = document.getElementById("myNav");

// navToggler.addEventListener("click", () => {
//     nav.classList.toggle("active")
// })

// nav.addEventListener("click", () => {
//     nav.classList.add("active")
// }, true)
// navClose.addEventListener("click", () => {
//     nav.classList.remove("active")
// })



// SIDE CART TOGGLE
let sideCartToggler = document.getElementById("side-cart-toggler");
let sideCart = document.getElementById("side-cart");
let cartClose = document.getElementById("cart-close");

sideCartToggler.addEventListener("click", () => {
    sideCart.classList.toggle("show");
}, true);

sideCart.addEventListener("click", () => {
    sideCart.classList.add("show");
}, true);

cartClose.addEventListener("click", () => {
    sideCart.classList.remove("show");
});
document.addEventListener("click", (e) => {
    sideCart.classList.remove("show");
    // nav.classList.remove("active")

}, true)


// HOME PAGE SLIDER

// Hero image slider
$('.bg-slider').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    autoplaySpeed: 1000,
    margin: 0,
    dots: false,
    nav: false,
    items: 1,
    responsive: {
        0: {
            items: 1
        }

    }
});

// main image slider
$('#main-slider-1').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    autoplaySpeed: 1000,
    margin: 0,
    dots: true,
    nav: false,
    items: 1,
    responsive: {
        0: {
            items: 1
        }

    }
});

$('#main-slider-2').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplaySpeed: 1000,
    autoplayHoverPause: true,
    margin: 0,
    dots: true,
    nav: false,
    items: 1,
    responsive: {
        0: {
            items: 1
        }

    }
})
$('#reviews').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplaySpeed: 1000,
    autoplayHoverPause: true,
    margin: 15,
    dots: true,
    nav: false,
    items: 3,
    responsive: {
        0: {
            items: 1
        },
        576: {
            items: 2
        },
        992: {
            items: 3
        }

    }
});


$('#logo-slides').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplaySpeed: 1000,
    autoplayHoverPause: true,
    margin: 0,
    dots: false,
    nav: false,
    items: 7,
    responsive: {
        0: {
            items: 3
        },
        576: {
            items: 4
        },
        992: {
            items: 5
        },
        1200: {
            items: 7
        }

    }
});




// BOOKING PAGE DATE PICKER SLIDE
$('#date-slides').owlCarousel({
    loop: false,
    margin: 0,
    dots: false,
    nav: true,
    items: 7,
    slideBy: 7,
    drag: false,
    mouseDrag: false,
    touchDrag: false,
    responsive: {
        0: {
            items: 7
        }

    }
});