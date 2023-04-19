if (window.location.href.indexOf("service-vendingcafe")) {
  // Select all the category links
  const categoryLinks = document.querySelectorAll(
    ".service-vendingcafe-news-group-bot-box-left-category a"
  );
  const categoryDropdownLinks = document.querySelectorAll(
    ".service-vendingcafe-news-group-bot-box-dropdown-menu-list a"
  );
  // Create a Set to store unique category IDs
  const uniqueCategoryIds = new Set();
  const uniqueCategoryIds2 = new Set();
  // Loop through the category links and add their category IDs to the Set
  categoryLinks.forEach((link) => {
    const categoryId = link.getAttribute("href").split("=")[1];
    uniqueCategoryIds.add(categoryId);
  });
  categoryDropdownLinks.forEach((ddlink) => {
    const ddId = ddlink.getAttribute("href").split("=")[1];
    uniqueCategoryIds2.add(ddId);
  });
  // Loop through the category links again and remove any duplicates
  categoryLinks.forEach((link) => {
    const categoryId = link.getAttribute("href").split("=")[1];
    if (uniqueCategoryIds.has(categoryId)) {
      uniqueCategoryIds.delete(categoryId);
    } else {
      link.parentNode.remove();
    }
  });
  categoryDropdownLinks.forEach((ddlink) => {
    const ddId = ddlink.getAttribute("href").split("=")[1];
    if (uniqueCategoryIds2.has(ddId)) {
      uniqueCategoryIds2.delete(ddId);
    } else {
      ddlink.parentNode.remove();
    }
  });

  if (window.innerWidth <= 768) {
    const dds = document.querySelectorAll(
      ".service-vendingcafe-news-group-bot-box-dropdown-menu-list"
    );
    const ddRes = document.querySelector(
      ".service-vendingcafe-news-group-bot-box-dropdown button p"
    );
    dds.forEach((dd) => {
      dd.addEventListener("click", () => {
        const a = dd.querySelector(
          ".service-vendingcafe-news-group-bot-box-dropdown-menu-list p"
        ).textContent;
        localStorage.setItem("Product category name", a);
        localStorage.getItem("Product category name");
      });
    });
    if (ddRes) {
        ddRes.innerHTML = localStorage.getItem("Product category name");
    }
  }

  const cateDropdowns = document.querySelector(".service-vendingcafe-news-group-bot-box-dropdown");
  const ddBtn = document.querySelector(".service-vendingcafe-news-group-bot-box-dropdown button p");
  const lists = document.querySelectorAll(
    ".service-vendingcafe-news-group-bot-box-dropdown-menu-list"
  );
  const lastList = lists.length;
  if (ddBtn) {
    lists[lastList - 1].style.borderRadius = "0px 0px 10px 10px";
    cateDropdowns.addEventListener("click", function () {
      if (cateDropdowns.classList.contains("active")) {
        cateDropdowns.classList.remove("active");
        this.querySelector(
          ".service-vendingcafe-news-group-bot-box-dropdown button figure"
        ).style.transform = "rotateX(0deg)";
      } else {
        cateDropdowns.classList.add("active");
        this.querySelector(
          ".service-vendingcafe-news-group-bot-box-dropdown button figure"
        ).style.transform = "rotateX(180deg)";
      }
    });
  }
}
