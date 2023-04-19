if (window.location.href.indexOf("works")) {
  const types = document.querySelectorAll(".works-history-btn button");
  types.forEach((type) => {
    type.addEventListener("click", () => {
      if (type.classList.contains("active")) {
      } else {
        types.forEach((e) => e.classList.remove("active"));
        type.classList.add("active");
      }
    });
  });

  if (window.innerWidth <= 768) {
    const dropdowns = document.querySelector(".works-history-dropdown");
    const ddBtn = document.querySelector(".works-history-dropdown button p");
    const lists = document.querySelectorAll(".works-history-dropdown-menu-list");
    const lastList = lists.length;
    if (lists[lastList - 1]) {
        lists[lastList - 1].style.borderRadius = "0px 0px 10px 10px";
    }
    if (dropdowns) {
        dropdowns.addEventListener("click", function () {
      if (dropdowns.classList.contains("active")) {
        dropdowns.classList.remove("active");
        this.querySelector(".works-history-dropdown button figure").style.transform =
          "rotateX(0deg)";
      } else {
        dropdowns.classList.add("active");
        this.querySelector(".works-history-dropdown button figure").style.transform =
          "rotateX(180deg)";
      }
    });
    }
    

    lists.forEach((list) => {
      list.addEventListener("click", () => {
        ddBtn.innerHTML = list.querySelector(".works-history-dropdown-menu-list p").innerHTML;
      });
    });

    const works_dd = document.querySelectorAll(".works-history-dropdown-menu-list");
    const works_res = document.querySelector(".works-history-dropdown button p");

    works_dd.forEach((dd) => {
      dd.addEventListener("click", () => {
        const a = dd.querySelector(".works-history-dropdown-menu-list a").textContent;
        localStorage.setItem("Works category name", a);
        localStorage.getItem("Works category name");
      });
    });

    works_res.innerHTML = localStorage.getItem("Works category name");
  }
}
