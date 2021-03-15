const originUrl = window.location.origin;
$('.jiboni-left-slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    swipe: false,
    prevArrow: '<img class="prev" src="' + originUrl + '/images/prev.png">',
    nextArrow: '<img class="next" src="' + originUrl + '/images/next.png">',
    asNavFor: '.jiboni-right-text-slider',
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false
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


$('.jiboni-right-text-slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    swipe: false,
    fade: true,
    prevArrow: '<img class="prevt" src="' + originUrl + '/images/prevt.png">',
    nextArrow: '<img class="nextt" src="' + originUrl + '/images/nextt.png">',
    asNavFor: '.jiboni-left-slider',
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false
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





let item = document.querySelectorAll(".jiboni-left-slider .photoimg");
//   let item2 =document.querySelector(".left-slider img");
let arr = Array.from(item)
let total = document.querySelector(".jibonitotal")
let jibonicount = document.querySelector(".jibonicount")
let i = 1;

let prev = document.querySelector(".prev")
let prevt = document.querySelector(".prevt")
let next = document.querySelector(".next")
let nextt = document.querySelector(".nextt")
total.innerHTML = arr.length
jibonicount.innerHTML = i


prev.addEventListener("click", function() {


    if (i != 1) {
        i--
        jibonicount.innerHTML = i
    }
})
prevt.addEventListener("click", function() {


    if (i != 1) {
        i--
        jibonicount.innerHTML = i
    }
})

next.addEventListener("click", function() {


    if (i != arr.length) {
        i++
        jibonicount.innerHTML = i
    }
})
nextt.addEventListener("click", function() {


        if (i != arr.length) {
            i++
            jibonicount.innerHTML = i
        }
    })
    //   total.innerHTML = arr.findIndex(arr)
console.log(arr)