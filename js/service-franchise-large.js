if (window.location.href.indexOf("large")) {
  var swiperSubProductFranchise = new Swiper("#subSwiper", {
    breakpoints: {
      320: {
        slidesPerView: 4,
        spaceBetween: 24,
      },
      480: {
        slidesPerView: 6,
        spaceBetween: 24,
      },
      980: {
        slidesPerView: 6,
        spaceBetween: 24,
      },
      1280: {
        slidesPerView: 9,
        spaceBetween: 24,
      },
    },
    freeMode: true,
    watchSlidesProgress: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
  var swiperMainProductFranchise = new Swiper("#mainSwiper", {
    spaceBetween: 10,
    thumbs: {
      swiper: swiperSubProductFranchise,
    },
    navigation: {
      nextEl: "#swiper-button-next-1",
      prevEl: "#swiper-button-prev-1",
    },
  });

  const largeMainImg = document.querySelector(
    ".service-franchise-franchise-large-group-right-mainimg img"
  );
  const largeSubImgs = document.querySelectorAll(
    ".service-franchise-franchise-large-group-right-subimg-box img"
  );
  const largeHeader = document.querySelector(".header");
  const largeFooter = document.querySelector(".footer");
  const largeFranchise = document.querySelector(".service-franchise-franchise-large-group");
  const largeSwiper = document.querySelector(".service-franchise-franchise-large-swiper");
  const largeClose = document.querySelector(".service-franchise-franchise-large-swiper-close");

  largeSubImgs.forEach((subImg) => {
    subImg.addEventListener("click", () => {
      largeHeader.style.display = "none";
      largeFooter.style.display = "none";
      largeFranchise.style.display = "none";
      largeSwiper.style.display = "block";
    });
  });
if (largeMainImg) {
  largeMainImg.addEventListener("click", () => {
    largeHeader.style.display = "none";
    largeFooter.style.display = "none";
    largeFranchise.style.display = "none";
    largeSwiper.style.display = "block";
  });

  largeClose.addEventListener("click", () => {
    largeHeader.style.display = "block";
    largeFooter.style.display = "block";
    largeFranchise.style.display = "flex";
    largeSwiper.style.display = "none";
  });
}
}
