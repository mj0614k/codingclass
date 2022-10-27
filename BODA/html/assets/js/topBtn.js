const topBtn = document.querySelector(".topBtn");

topBtn.addEventListener("click", () => {
  window.scrollTo({ left: 0, top: 0, behavior: "smooth" });
});

let nowScroll = true;
let lastScroll = 0;

function hasScroll() {
  let scrollTop = window.pageYOffset;

  if (scrollTop > lastScroll) {
    //현재 스크롤 값과 1초 전의 스크롤 값
    topBtn.classList.add("show");
  } else {
    topBtn.classList.remove("show");
  }

  lastScroll = scrollTop; // 1초 전의 현재 스크롤 값이 마지막 스크롤값이 되어 0.3초마다 스크롤값을 인식하여 값이 변화함.
}
window.addEventListener("scroll", hasScroll);
