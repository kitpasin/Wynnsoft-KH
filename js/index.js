const navLinks = document.querySelectorAll(".header-bot-nav-link");
const sideNavLinks = document.querySelectorAll(".header-bot-sidenav-link");
const navDropdowns = document.querySelectorAll(".header-bot-nav-dropdown");
const sideNavDropdowns = document.querySelectorAll(".header-bot-sidenav-dropdown");
if (window.location.href.indexOf("/") !== -1) {
  navLinks.forEach((navLink) => navLink.classList.remove("active"));
  sideNavLinks.forEach((sideNavLink) => (sideNavLink.style.color = "#fff"));
  navDropdowns.forEach((navDropdown) => (navDropdown.style.borderBottom = "none"));
  navLinks[0].classList.add("active");
  sideNavLinks[0].style.color = "#000";
}
if (window.location.href.indexOf("serve") !== -1) {
  navLinks.forEach((navLink) => navLink.classList.remove("active"));
  sideNavLinks.forEach((sideNavLink) => (sideNavLink.style.color = "#fff"));
  navDropdowns.forEach((navDropdown) => (navDropdown.style.borderBottom = "none"));
  navLinks[1].classList.add("active");
  sideNavLinks[1].style.color = "#000";
}
if (window.location.href.indexOf("service") !== -1) {
  navLinks.forEach((navLink) => navLink.classList.remove("active"));
  sideNavLinks.forEach((sideNavLink) => (sideNavLink.style.color = "#fff"));
  navDropdowns.forEach((navDropdown) => (navDropdown.style.borderBottom = "none"));
  navDropdowns[0].style.borderBottom = "4px solid #fff";
  sideNavDropdowns[0].style.color = "#000";
}
if (window.location.href.indexOf("brand") !== -1) {
  navLinks.forEach((navLink) => navLink.classList.remove("active"));
  sideNavLinks.forEach((sideNavLink) => (sideNavLink.style.color = "#fff"));
  navDropdowns.forEach((navDropdown) => (navDropdown.style.borderBottom = "none"));
  navDropdowns[1].style.borderBottom = "4px solid #fff";
  sideNavDropdowns[1].style.color = "#000";
}
if (window.location.href.indexOf("news") !== -1) {
  navLinks.forEach((navLink) => navLink.classList.remove("active"));
  sideNavLinks.forEach((sideNavLink) => (sideNavLink.style.color = "#fff"));
  navDropdowns.forEach((navDropdown) => (navDropdown.style.borderBottom = "none"));
  navLinks[2].classList.add("active");
  sideNavLinks[2].style.color = "#000";
}
if (window.location.href.indexOf("franchise") !== -1) {
  navLinks.forEach((navLink) => navLink.classList.remove("active"));
  sideNavLinks.forEach((sideNavLink) => (sideNavLink.style.color = "#fff"));
  navDropdowns.forEach((navDropdown) => (navDropdown.style.borderBottom = "none"));
  navLinks[3].classList.add("active");
  sideNavLinks[3].style.color = "#000";
}
if (window.location.href.indexOf("works") !== -1) {
  navLinks.forEach((navLink) => navLink.classList.remove("active"));
  sideNavLinks.forEach((sideNavLink) => (sideNavLink.style.color = "#fff"));
  navDropdowns.forEach((navDropdown) => (navDropdown.style.borderBottom = "none"));
  navLinks[4].classList.add("active");
  sideNavLinks[4].style.color = "#000";
}
if (window.location.href.indexOf("contact") !== -1) {
  navLinks.forEach((navLink) => navLink.classList.remove("active"));
  sideNavLinks.forEach((sideNavLink) => (sideNavLink.style.color = "#fff"));
  navDropdowns.forEach((navDropdown) => (navDropdown.style.borderBottom = "none"));
  navLinks[5].classList.add("active");
  sideNavLinks[5].style.color = "#000";
}
if (window.location.href.indexOf("service-franchise") !== -1) {
  navLinks.forEach((navLink) => navLink.classList.remove("active"));
  sideNavLinks.forEach((sideNavLink) => (sideNavLink.style.color = "#fff"));
  navDropdowns.forEach((navDropdown) => (navDropdown.style.borderBottom = "none"));
  navDropdowns[0].style.borderBottom = "4px solid #fff";
  sideNavDropdowns[0].style.color = "#000";
}

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

var swiperService = new Swiper(".service-top-swiper", {
  loop: true,
  centeredSlides: true,
  pagination: {
    el: "#servicePagination",
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

var swiperNews = new Swiper(".news-bot-swiper", {
  loop: true,
  centeredSlides: true,
  pagination: {
    el: "#newsPagination",
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

var swiperWorks = new Swiper(".works-swiper", {
  pagination: {
    el: "#worksPagination",
    dynamicBullets: true,
    clickable: true,
  },
  grid: {
    rows: 2,
    fill: "row",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      slidesPerGroup: 3,
      spaceBetween: 50,
    },
    480: {
      slidesPerView: 2,
      slidesPerGroup: 3,
      spaceBetween: 50,
    },
    768: {
      slidesPerView: 2,
      slidesPerGroup: 3,
      spaceBetween: 50,
    },
    980: {
      slidesPerView: 3,
      slidesPerGroup: 3,
      spaceBetween: 50,
    },
  },
});
