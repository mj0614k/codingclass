hljs.highlightAll();

// 모달
const modalBtn = document.querySelector(".modal__btn");
const modalClose = document.querySelector(".modal__close")
const modalCont = document.querySelector(".modal__cont");
const iframeCont = document.querySelector(".modal__cont .cont .iframe")

modalBtn.addEventListener("click", () => {
    modalCont.classList.add("show");
    modalClose.classList.add("show");
    modalCont.classList.remove("hide");
    modalClose.classList.remove("hide");
})
modalClose.addEventListener("click", () => {
    modalCont.classList.remove("show");
    modalClose.classList.remove("show");
    modalCont.classList.add("hide");
    modalClose.classList.add("hide");
})

// 탭 메뉴
const tabBtn = document.querySelectorAll(".modal__box .tabs > div");
const tabCont = document.querySelectorAll(".modal__box .cont > div");

tabBtn.forEach((e, i) => {
    e.addEventListener("click", (event) => {
        event.preventDefault();  // 버튼을 클릭해도 스크롤 제자리

        tabBtn.forEach(e => {
            e.classList.remove("active")
        })
        e.classList.add("active")
        tabCont.forEach(div => {
            div.style.display = "none";
        })
        tabCont[i].style.display = "block";
    });
});