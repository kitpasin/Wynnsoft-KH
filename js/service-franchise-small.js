if (window.location.href.indexOf("small")) {
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

  const smallMainImg = document.querySelector(
    ".service-franchise-franchise-small-group-right-mainimg img"
  );
  const smallSubImgs = document.querySelectorAll(
    ".service-franchise-franchise-small-group-right-subimg-box img"
  );
  const smallHeader = document.querySelector(".header");
  const smallFooter = document.querySelector(".footer");
  const smallFranchise = document.querySelector(".service-franchise-franchise-small-group");
  const smallSwiper = document.querySelector(".service-franchise-franchise-small-swiper");
  const smallClose = document.querySelector(".service-franchise-franchise-small-swiper-close");

  smallSubImgs.forEach((subImg) => {
    subImg.addEventListener("click", () => {
      smallHeader.style.display = "none";
      smallFooter.style.display = "none";
      smallFranchise.style.display = "none";
      smallSwiper.style.display = "block";
    });
  });
  if (smallMainImg) {
    smallMainImg.addEventListener("click", () => {
      smallHeader.style.display = "none";
      smallFooter.style.display = "none";
      smallFranchise.style.display = "none";
      smallSwiper.style.display = "block";
    });

    smallClose.addEventListener("click", () => {
      smallHeader.style.display = "block";
      smallFooter.style.display = "block";
      smallFranchise.style.display = "flex";
      smallSwiper.style.display = "none";
    });
  }
}
