if (window.location.href.indexOf("location")) {
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

  const locationMainImg = document.querySelector(
    ".service-franchise-franchise-location-group-right-mainimg img"
  );
  const locationSubImgs = document.querySelectorAll(
    ".service-franchise-franchise-location-group-right-subimg-box img"
  );
  const locationHeader = document.querySelector(".header");
  const locationFooter = document.querySelector(".footer");
  const locationFranchise = document.querySelector(".service-franchise-franchise-location-group");
  const locationSwiper = document.querySelector(".service-franchise-franchise-location-swiper");
  const locationClose = document.querySelector(
    ".service-franchise-franchise-location-swiper-close"
  );

  locationSubImgs.forEach((subImg) => {
    subImg.addEventListener("click", () => {
      locationHeader.style.display = "none";
      locationFooter.style.display = "none";
      locationFranchise.style.display = "none";
      locationSwiper.style.display = "block";
    });
  });
  if (locationMainImg) {
    locationMainImg.addEventListener("click", () => {
      locationHeader.style.display = "none";
      locationFooter.style.display = "none";
      locationFranchise.style.display = "none";
      locationSwiper.style.display = "block";
    });

    locationClose.addEventListener("click", () => {
      locationHeader.style.display = "block";
      locationFooter.style.display = "block";
      locationFranchise.style.display = "flex";
      locationSwiper.style.display = "none";
    });
  }
}
