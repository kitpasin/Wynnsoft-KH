const types = document.querySelectorAll(".latest-btn button");
types.forEach((type) => {
    type.addEventListener("click", ()=> {
        if (type.classList.contains("active")) {
        } else {
            types.forEach((e) => (e.classList.remove("active")))
            type.classList.add("active")
        }
    })
})





