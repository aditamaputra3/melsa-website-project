const btn = document.querySelector(".catering-btn");
const btn2 = document.querySelector(".cake-btn");

btn.addEventListener("click", () => {
    btn.style.backgroundColor = "#D90802";
    btn.style.border = "solid 2px #D90802";
    btn.style.color = "#fff"
    btn2.style.backgroundColor = "#fff";
    btn2.style.border = "solid 2px #000";
    btn2.style.color = "#000"
});
btn2.addEventListener("click", () => {
    btn2.style.backgroundColor = "#D90802";
    btn2.style.border = "solid 2px #D90802";
    btn2.style.color = "#fff"
    btn.style.backgroundColor = "#fff";
    btn.style.border = "solid 2px #000";
    btn.style.color = "#000"
});
