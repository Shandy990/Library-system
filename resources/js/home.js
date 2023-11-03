import Swiper from 'swiper/bundle';


const jumboSwiper = new Swiper(".jumboSwiper", {
    loop: true,
    pagination: {
        el: ".jumbotron__pagination",
        clickable: true,
    },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
});

const genreSwiper = new Swiper(".genreSwiper", {
    breakpoints: {
        567: {
            slidesPerView: 3,
            spaceBetween: 15,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
        992: {
            slidesPerView: 5,
            spaceBetween: 15,
            navigation: {
                nextEl: ".genre__next",
                prevEl: ".genre__prev",
            },
        }
    }
});

const newComingSwiper = new Swiper(".new-comming-swiper", {
    breakpoints: {
        567: {
            slidesPerView: 2,
            spaceBetween: 25,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        992: {
            slidesPerView: 4,
            spaceBetween: 20,
            navigation: {
                nextEl: ".new-comming__next",
                prevEl: ".new-comming__prev",
            },
        }
    }
});

var loadFile = function (event) {
    var output = event.target.getAttribute("data-target");
    console.log(output);
    var image = document.querySelector(output);
    image.src = URL.createObjectURL(event.target.files[0]);
};

document.querySelector('.image-input').addEventListener("change", function (event) {
    loadFile(event);
})

export {loadFile};