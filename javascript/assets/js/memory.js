// 01 HTML/CSS 디자인 구성
// 02 클릭한 카드 뒤집기
// 03 두개의 카드 뒤집고 확인하기(첫번째, 두번째)

const memoryWrap = document.querySelector(".memory__wrap");
const memoryCard = memoryWrap.querySelectorAll(".cards li");

let cardOne, cardTwo; // 뒤집는 카드
let disableDeck = false;
let matchedCard = 0; // 점수

let sound = [
  "../assets/audio/search_good.m4a",
  "../assets/audio/search_bad.m4a",
  "../assets/audio/up",
];
let soundMatch = new Audio(sound[0]);
let soundUnMatch = new Audio(sound[1]);
let soundSuccess = new Audio(sound[2]);

// 카드 뒤집기
function flipCard(e) {
  // target : 이벤트가 발생한 대상을 가리킴
  let clickedCard = e.target;

  // !disableDeck : 뒤집힌 카드가 오답일 때, 흔들릴 때 다른 카드 누르는 것 방지
  if (clickedCard !== cardOne && !disableDeck) {
    clickedCard.classList.add("flip");

    // 첫번째 카드가 클릭된 상태면
    if (!cardOne) {
      return (cardOne = clickedCard);
    }
    cardTwo = clickedCard;
    disableDeck = true;

    let cardOneImg = cardOne.querySelector(".back img").src;
    let cardTwoImg = cardTwo.querySelector(".back img").src;

    matchCards(cardOneImg, cardTwoImg);
  }
}

// 카드 확인(두 개의 이미지 비교)
function matchCards(img1, img2) {
  if (img1 == img2) {
    // 같을 경우(맞은 음악, 이미지 상하 흔들림)
    matchedCard++;
    soundMatch.play();

    if (matchedCard == 8) {
      alert("게임이 종료되었습니다.");
      soundSuccess.play();
    }

    cardOne.removeEventListener("click", flipCard);
    cardTwo.removeEventListener("click", flipCard);
    cardOne = cardTwo = "";
    disableDeck = false;
  } else {
    // 일치하지 않는 경우(틀린 음악, 이미지 좌우 흔들림)
    setTimeout(() => {
      cardOne.classList.add("shakeX");
      cardTwo.classList.add("shakeX");
    }, 400);

    setTimeout(() => {
      cardOne.classList.remove("shakeX", "flip");
      cardTwo.classList.remove("shakeX", "flip");
      cardOne = cardTwo = "";
      disableDeck = false;
    }, 1000);
  }
}

// 카드 섞기
function shuffledCard() {
  cardOne = cardTwo = "";
  disableDeck = false;
  matchedCard = 0;

  let arr = [1, 2, 3, 4, 5, 6, 7, 8, 1, 2, 3, 4, 5, 6, 7, 8];
  let result = arr.sort(() => (Math.random() > 0.5 ? 1 : -1));

  memoryCard.forEach((card, index) => {
    card.classList.remove("flip");

    setTimeout(() => {
      card.classList.add("flip");
    }, 200 * index);

    setTimeout(() => {
      card.classList.remove("flip");
    }, 4000);

    let imgTag = card.querySelector(".back img");
    imgTag.src = `../assets/img/memory-${arr[index]}.svg`;
  });
}
// 카드 클릭
memoryCard.forEach((card) => {
  card.addEventListener("click", flipCard);
});

const memoryStart = document.querySelector(".memory__start");
const memoryMain = document.querySelector(".memory__main");
const memoryGame = document.querySelector(".memory__card");

memoryStart.addEventListener("click", () => {
  memoryMain.style.display = "none";
  memoryGame.style.display = "block";
  shuffledCard();
  soundUnMatch.play();
});
