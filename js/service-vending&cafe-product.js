const mainImg = document.querySelector(".service-vendingcafe-product-banner-group-left-mainimg img");
const subImgBoxes = document.querySelectorAll(".service-vendingcafe-product-banner-group-left-subimg-box");

subImgBoxes.forEach((subImgBox) => {
  const subImg = subImgBox.querySelector("img");
  subImgBox.addEventListener("click", () => {
    mainImg.src = subImg.src;
    subImgBoxes.forEach((box) => box.classList.remove("active"));
    subImgBox.classList.add("active");
  });
});

const systemTitle = document.getElementById("systemTitle");
const systemDescription = document.getElementById("systemDescription");
const sizeTitle = document.getElementById("sizeTitle");
const sizeDescription = document.getElementById("sizeDescription");
const gadgetTitle = document.getElementById("gadgetTitle");
const gadgetDescription = document.getElementById("gadgetDescription");

const specGroupTitleList = document.querySelectorAll(".service-vendingcafe-product-spec-group-title-list");

specGroupTitleList.forEach((title) => {
  title.addEventListener("click", () => {
    // check which title was clicked
    if (title === systemTitle) {
      systemTitle.classList.add("active");
      systemDescription.classList.add("active");
      // deactivate the other titles and descriptions
      sizeTitle.classList.remove("active");
      sizeDescription.classList.remove("active");
      gadgetTitle.classList.remove("active");
      gadgetDescription.classList.remove("active");
    } else if (title === sizeTitle) {
      sizeTitle.classList.add("active");
      sizeDescription.classList.add("active");
      // deactivate the other titles and descriptions
      systemTitle.classList.remove("active");
      systemDescription.classList.remove("active");
      gadgetTitle.classList.remove("active");
      gadgetDescription.classList.remove("active");
    } else if (title === gadgetTitle) {
      gadgetTitle.classList.add("active");
      gadgetDescription.classList.add("active");
      // deactivate the other titles and descriptions
      systemTitle.classList.remove("active");
      systemDescription.classList.remove("active");
      sizeTitle.classList.remove("active");
      sizeDescription.classList.remove("active");
    }
  });
});
