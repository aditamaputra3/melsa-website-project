const primary1 = "#D90802";
const primary2 = "#8F0000";
const neutral1 = "#000";
const neutral2 = "#fff";
const neutral3 = "#424242";
const neutral4 = "#dddcdc";
const shadow1 = "5px 10px 20px var(--neutral-4)";
const shadow2 = "5px 15px 25px var(--neutral-4)";

window.addEventListener("DOMContentLoaded", (event) => {
    const btn = document.querySelector(".catering-btn");
    const btn2 = document.querySelector(".cake-btn");
    const homeCatering = document.querySelector(".home-menu-catering");
    const homeCake = document.querySelector(".home-menu-cake");

    if (btn && btn2) {
        btn.addEventListener("click", () => {
            btn.style.backgroundColor = primary1;
            (btn.style.border = "solid 2px"), primary1;
            btn.style.color = neutral2;
            btn.style.transition = "ease 0.5s";
            btn2.style.backgroundColor = neutral2;
            (btn2.style.border = "solid 2px"), neutral1;
            btn2.style.color = neutral1;
            btn2.style.transition = "ease 0.5s";
            homeCatering.style.display = "flex";
            homeCake.style.display = "none";
        });
        btn2.addEventListener("click", () => {
            btn2.style.backgroundColor = primary1;
            (btn2.style.border = "solid 2px"), primary1;
            btn2.style.color = neutral2;
            btn2.style.transition = "ease 0.5s";
            btn.style.backgroundColor = neutral2;
            (btn.style.border = "solid 2px"), neutral1;
            btn.style.color = neutral1;
            btn.style.transition = "ease 0.5s";
            homeCatering.style.display = "none";
            homeCake.style.display = "flex";
        });
    }
});

window.addEventListener("DOMContentLoaded", (event) => {
    const menuCatering = document.querySelector(".menu-title-active");
    const menuCake = document.querySelector(".menu-title-inactive");
    const contentCatering = document.querySelector(
        ".catering-content-container"
    );
    const contentCake = document.querySelector(".cake-content-container");
    if (menuCake) {
        menuCake.addEventListener("click", () => {
            menuCake.style.color = primary2;
            menuCatering.style.color = neutral1;
            contentCatering.style.display = "none";
            contentCake.style.display = "flex";
        });
        menuCatering.addEventListener("click", () => {
            menuCake.style.color = neutral1;
            menuCatering.style.color = primary2;
            contentCatering.style.display = "flex";
            contentCake.style.display = "none";
        });
    }
});
