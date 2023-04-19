window.addEventListener("pageshow", function () {
    // Check if the URL does not contain "-kh"
    if (window.location.href.indexOf("-kh") === -1) {
        document.getElementById("language").checked = false;
    } else {
        document.getElementById("language").checked = true;
    }
});

let currentUrl = new URL(location.href);
const language = document.getElementById("language");
language.addEventListener("click", function () {
  if (language.checked) {
    document.querySelectorAll(".header-top-group-social-switch-slider p")[0].style.color =
      "#5C5C5C";
    document.querySelectorAll(".header-top-group-social-switch-slider p")[1].style.color = "#000";

    // Check if the URL does not contain "-kh"
    if (currentUrl.href.indexOf("-kh") === -1) {
      // Home
      if (currentUrl.pathname === "/") {
        // If the URL is the homepage, update the pathname to "/home-kh"
        currentUrl.pathname = "/home-kh/";
      }

      // Serve
      else if (currentUrl.pathname === "/serve/") {
        currentUrl.pathname = "/serve-kh/";
      } else if (currentUrl.pathname === "/serve/agency/") {
        currentUrl.pathname = "/serve-kh/agency-kh/";
      }

      // Service
      else if (currentUrl.pathname === "/service-website/") {
        currentUrl.pathname = "/service-website-kh/";
      } else if (currentUrl.pathname === "/service-vendingcafe/") {
        currentUrl.pathname = "/service-vendingcafe-kh/";
      } else if (currentUrl.pathname === "/service-franchise/") {
        currentUrl.pathname = "/service-franchise-kh/";
      } else if (currentUrl.pathname === "/service-franchise/small-franchise/") {
        currentUrl.pathname = "/service-franchise-kh/small-franchise-kh/";
      } else if (currentUrl.pathname === "/service-franchise/medium-franchise/") {
        currentUrl.pathname = "/service-franchise-kh/medium-franchise-kh/";
      } else if (currentUrl.pathname === "/service-franchise/large-franchise/") {
        currentUrl.pathname = "/service-franchise-kh/large-franchise-kh/";
      } else if (currentUrl.pathname === "/service-franchise/location-franchise/") {
        currentUrl.pathname = "/service-franchise-kh/location-franchise-kh/";
      } else if (currentUrl.pathname === "/service-payment/") {
        currentUrl.pathname = "/service-payment-kh/";
      }

      // Brand
      else if (currentUrl.pathname === "/brand-website/") {
        currentUrl.pathname = "/brand-website-kh/";
      } else if (currentUrl.pathname === "/brand-seo/") {
        currentUrl.pathname = "/brand-seo-kh/";
      } else if (currentUrl.pathname === "/brand-studio/") {
        currentUrl.pathname = "/brand-studio-kh/";
      } else if (currentUrl.pathname === "/brand-vendingcafe/") {
        currentUrl.pathname = "/brand-vendingcafe-kh/";
      }

      // News&Promotion
      else if (currentUrl.pathname === "/newspromotion/") {
        currentUrl.pathname = "/newspromotion-kh/";
      } else if (currentUrl.pathname === "/newspromotion/news/") {
        currentUrl.pathname = "/newspromotion-kh/news-kh/";
      }

      // Franchise
      else if (currentUrl.pathname === "/franchise/") {
        currentUrl.pathname = "/franchise-kh/";
      }

      // Our Works
      else if (currentUrl.pathname === "/works/") {
        currentUrl.pathname = "/works-kh/";
      } else if (currentUrl.pathname === "/works/work/") {
        currentUrl.pathname = "/works-kh/work-kh/";
      }

      // Contact
      else if (currentUrl.pathname === "/contact/") {
        currentUrl.pathname = "/contact-kh/";
      }

      // Product
      else if (currentUrl.pathname === "/service-vendingcafe/product/") {
        currentUrl.pathname = "/service-vendingcafe-kh/product-kh/";
      } else {
        // Add "-kh" to the first path segment of the pathname
        currentUrl.pathname = currentUrl.pathname.replace(/^\/([^/]*)(\/|$)/, "/$1-kh$2");
      }
      // Redirect to the updated URL
      window.location.href = currentUrl.href;
    } else {
      // Check if the URL contains "-kh"
      if (currentUrl.href.indexOf("-kh") !== -1) {
        // Remove "-kh" from the pathname
        currentUrl.pathname = currentUrl.pathname.replace(/-kh\//g, "/");
        // Redirect to the updated URL
        window.location.href = currentUrl.href;
      }
    }
  } else {
    document.querySelectorAll(".header-top-group-social-switch-slider p")[0].style.color = "#000";
    document.querySelectorAll(".header-top-group-social-switch-slider p")[1].style.color =
      "#5C5C5C";

    // Check if "-kh" is present in the URL, then remove it from the URL
    if (currentUrl.href.indexOf("-kh") !== -1) {
      // Remove "-kh" from the pathname
      currentUrl.pathname = currentUrl.pathname.replace(/-kh\//g, "/");
      // Redirect to the updated URL
      window.location.href = currentUrl.href;
    }
  }
});

language.addEventListener("change", function () {
  localStorage.setItem("switchState", language.checked);
});
const switchState = localStorage.getItem("switchState");
if (switchState !== null) {
  language.checked = switchState === "true";
} else {
  language.checked = true; // Default to checked if there is no saved state
}

const dropdowns = document.querySelectorAll(".header-bot-nav-dropdown");
const arrows = document.querySelectorAll(".header-bot-nav-dropdown button figure");
const links = document.querySelectorAll(".header-bot-nav-dropdown-menu-link");
const lastLink = links.length;
links[lastLink / 2 - 1].style.borderRadius = "0px 0px 10px 10px";
links[lastLink - 1].style.borderRadius = "0px 0px 10px 10px";
dropdowns.forEach((dropdown) => {
  dropdown.addEventListener("click", function () {
    if (dropdown.classList.contains("active")) {
      dropdown.classList.remove("active");
      this.querySelector(".header-bot-nav-dropdown button figure").style.transform =
        "rotateX(0deg)";
    } else {
      dropdowns.forEach((dropdown) => {
        dropdown.classList.remove("active");
      });
      arrows.forEach((arrow) => {
        arrow.style.transform = "rotateX(0deg)";
      });
      dropdown.classList.add("active");
      this.querySelector(".header-bot-nav-dropdown button figure").style.transform =
        "rotateX(180deg)";
    }
  });
});

const sideDropdowns = document.querySelectorAll(".header-bot-sidenav-dropdown");
const sideArrows = document.querySelectorAll(".header-bot-sidenav-dropdown button figure");
const sideLinks = document.querySelectorAll(".header-bot-sidenav-dropdown-menu-link");
const sideLastLink = sideLinks.length;
sideLinks[sideLastLink / 2 - 1].style.borderRadius = "0px 0px 10px 10px";
sideLinks[sideLastLink - 1].style.borderRadius = "0px 0px 10px 10px";
sideDropdowns.forEach((sideDropdown) => {
  sideDropdown.addEventListener("click", function () {
    if (sideDropdown.classList.contains("active")) {
      sideDropdown.classList.remove("active");
      this.querySelector(".header-bot-sidenav-dropdown button figure").style.transform =
        "rotateX(0deg)";
    } else {
      sideDropdowns.forEach((dropdown) => {
        dropdown.classList.remove("active");
      });
      sideArrows.forEach((arrow) => {
        arrow.style.transform = "rotateX(0deg)";
      });
      sideDropdown.classList.add("active");
      this.querySelector(".header-bot-sidenav-dropdown button figure").style.transform =
        "rotateX(180deg)";
    }
  });
});

const burger = document.querySelector(".header-bot-burger");
const sidenav = document.querySelector(".header-bot-sidenav");
burger.addEventListener("click", () => {
  if (burger.classList.contains("active")) {
    burger.classList.remove("active");
  } else {
    burger.classList.add("active");
  }
  if (sidenav.classList.contains("active")) {
    sideArrows.forEach((sideArrow) => {
      sideArrow.style.transform = "rotateX(0deg)";
    });
    sideDropdowns.forEach((sideDropdown) => {
      sideDropdown.classList.remove("active");
    });
    sidenav.classList.remove("active");
  } else {
    sidenav.classList.add("active");
  }
});
