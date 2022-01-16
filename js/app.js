//Navbar Section
const navbuttons = document.querySelector('.navbuttons');
navbuttons.addEventListener('click', () => navbuttons.classList.toggle('changes'));

const navbarpudding = document.querySelector('.navbar-paddings');


window.addEventListener('scroll', function () {
    let scrollY = window.scrollY;

    if (scrollY >= 100) {
        navbarpudding.classList.add('active');
    } else {
        navbarpudding.classList.remove('active');
    }
});



//Customer Section
$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            1000: {
                items: 3
            }
        }
    });
});



//For Modal Section
$(document).ready(function () {
    $('.modal-btn').click(function () {
        $('.show-modal').addClass('active');
    })


    $('.close-btn').click(function () {
        $('.show-modal').removeClass('active');
    })
})



// For Gallery Section
$(document).ready(function () {

    $('.test-popup-link').magnificPopup({
        gallery: {
            enabled: true
        },
        type: 'image'
        // other options
    })

})



//For Loading
$(document).ready(function () {
    $('.loading').fadeOut(2000);
    $('.loading-overlay').delay(1500).fadeOut(2500);
})



//For Smooth Scroll
$(document).ready(function () {
    $(' a.smooth-scroll').click(function (event) {
        event.preventDefault();
        let select_id = $(this).attr('href');

        $('html,body').animate(
            {
                //top and left
                scrollTop: $(select_id).offset().top - 50,
            },
            350,
            'easeOutElastic');
    })
});



//For Header Ani
let header = $('#about').waypoint(function () {
    $(".about-ani-one").addClass('active');
    $(".about-ani-two").addClass('active');
}, {
    offset: " 40%"
})


//For Menu
let menu = $('.menu-item.odd:nth-child(1)').waypoint(function () {
    $(".menu-item.odd:nth-child(1)").addClass('active');
})







