$(document).ready(function() { 
    $('.responsive').slick({
    // dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                // dots: true
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

// aos Animation

AOS.init();


});
// hamburger button start

const bar = document.querySelector(".bar");
const navbar = document.querySelector('.header_text');
const navbarli = document.querySelectorAll(".header_text li");
// const search = document.querySelector(".surch");

bar.addEventListener("click", () => {
    bar.classList.toggle("active");
    navbar.classList.toggle('active');
});

navbarli.forEach(element => {
    element.addEventListener("click", () => {
        navbar.classList.toggle('active');
        icon.classList.replace("fa-times", "fa-bars");
    });
});

let btn = document.querySelector(".bar");
let icon = btn.querySelector(".fa-bars");
btn.onclick = function() {
        if (icon.classList.contains("fa-bars")) {
            icon.classList.replace("fa-bars", "fa-times");
        } else {
            icon.classList.replace("fa-times", "fa-bars");
        }
    }
    // hamburger button end


    //  removeClass and addclass in on Scrolled

$(window).scroll(function() {
    // console.log("test");
    let TopScrolled = $(window).scrollTop();
    // console.log(TopScrolled);
    if (TopScrolled > 1) {
        $(".header_text").removeClass("active")
        icon.classList.replace("fa-times", "fa-bars");
    } else {
        // $("#main-header").addClass("fixedmenu")

    }
})



