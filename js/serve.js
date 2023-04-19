var swiperAgency = new Swiper("#agencySwiper", {
  loop: true,
  centeredSlides: true,
  pagination: {
    el: "#agencyPagination",
    dynamicBullets: true,
    clickable: true,
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 50,
    },
    980: {
      slidesPerView: 3,
      spaceBetween: 50,
    },
    1280: {
      slidesPerView: 3,
      spaceBetween: 50,
    },
  },
});
