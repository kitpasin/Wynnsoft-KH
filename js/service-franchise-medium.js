if (window.location.href.indexOf("medium")) {
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

  const mediumMainImg = document.querySelector(
    ".service-franchise-franchise-medium-group-right-mainimg img"
  );
  const mediumSubImgs = document.querySelectorAll(
    ".service-franchise-franchise-medium-group-right-subimg-box img"
  );
  const mediumHeader = document.querySelector(".header");
  const mediumFooter = document.querySelector(".footer");
  const mediumFranchise = document.querySelector(".service-franchise-franchise-medium-group");
  const mediumSwiper = document.querySelector(".service-franchise-franchise-medium-swiper");
  const mediumClose = document.querySelector(".service-franchise-franchise-medium-swiper-close");

  mediumSubImgs.forEach((subImg) => {
    subImg.addEventListener("click", () => {
      mediumHeader.style.display = "none";
      mediumFooter.style.display = "none";
      mediumFranchise.style.display = "none";
      mediumSwiper.style.display = "block";
    });
  });
  if (mediumMainImg) {
    mediumMainImg.addEventListener("click", () => {
      mediumHeader.style.display = "none";
      mediumFooter.style.display = "none";
      mediumFranchise.style.display = "none";
      mediumSwiper.style.display = "block";
    });

    mediumClose.addEventListener("click", () => {
      mediumHeader.style.display = "block";
      mediumFooter.style.display = "block";
      mediumFranchise.style.display = "flex";
      mediumSwiper.style.display = "none";
    });
  }
}
