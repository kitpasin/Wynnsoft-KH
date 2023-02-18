import "./bootstrap";

var swiperBanner = new Swiper("#bannerSwiper", {
    loop: true,
    speed: 1500,
    autoplay: {
        deley: 3000,
    },
    pagination: {
        el: "#bannerPagination",
        dynamicBullets: true,
        clickable: true,
    },
    navigation: {
        nextEl: "#bannerBtnNext",
        prevEl: "#bannerBtnPrev",
    },
});

var swiperProduct = new Swiper(".product-swiper", {
    loop: true,
    centeredSlides: true,
    pagination: {
        el: "#productPagination",
        dynamicBullets: true,
        clickable: true,
    },
    breakpoints: {
        350: {
            slidesPerView: 1,
        },
        980: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
        1280: {
            slidesPerView: 3,
            spaceBetween: 0,
        },
    },
});

var swiperService = new Swiper(".service-top-swiper", {
    loop: true,
    centeredSlides: true,
    pagination: {
        el: "#servicePagination",
        dynamicBullets: true,
        clickable: true,
    },
    breakpoints: {
        350: {
            slidesPerView: 1,
        },
        980: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
        1280: {
            slidesPerView: 3,
            spaceBetween: 0,
        },
    },
});

var swiperNews = new Swiper(".news-bot-swiper", {
    loop: true,
    centeredSlides: true,
    pagination: {
        el: "#newsPagination",
        dynamicBullets: true,
        clickable: true,
    },
    breakpoints: {
        350: {
            slidesPerView: 1,
        },
        980: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
        1280: {
            slidesPerView: 3,
            spaceBetween: 0,
        },
    },
});
