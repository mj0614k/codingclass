<?php 
    include "../connect/connect.php";
    include "../connect/session.php";

    $ExhibitionSql = "SELECT * FROM myExhibition ORDER BY myExhibitionID DESC";
    $ExhibitionResult = $connect -> query($ExhibitionSql);
    $ExhibitionInfo = $ExhibitionResult -> fetch_array(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <?php include "../include/link.php" ?>
    <title>BODA 사이트 만들기</title>
    <style>
        .BestImg {
            position: relative;
            width: 300px;
            height: 300px;
        }
        .BestImg img {
            position: absolute;
            top: 0;
            left: 0;
            transform: translate(50, 50);
            width: 100%;
            height: 100%;
            object-fit: cover;
            margin: auto;
        }
    </style>
</head>
<body>
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">콘텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>
<?php include "../include/mainheader.php" ?>
<?php include "../login/login.php" ?>
<!-- //header -->

<!-- main -->
<main id="main" class="mainContents">
    <section id="mainSliderType" class="mainSlider__wrap">
        <h2 class="blind">슬라이드 영역</h2>
        <div class="slider__inner">
            <div class="swiper mySwiper mySwiper1">
                <div class="swiper-wrapper">
<?php forEach($ExhibitionResult as $ExhibitionSql){ ?>
                    <div class="swiper-slide mainSlide1">
                        <figure class="mainSliderImg">
                            <img src="../assets/img/Exhibition/<?=$ExhibitionSql['MainImgFile']?>" alt="mainSliderImg">
                        </figure>
                        <div class="mainSlider_desc">
                            <span>2022.09.28.~2022.12.31.</span>
                            <p class="main__sliderHeading">
                                <?=$ExhibitionSql['ExhibitionTitle']?>
                            </p>
                            <div class="mainSlider__btn">
                                <a href="../exhibition/detail.php?myExhibitionID=<?=$ExhibitionSql['myExhibitionID']?>">view more</a>
                            </div>
                        </div>
                    </div>
<?php } ?>
                    <!-- //slider1 -->
                </div>
            </div>
        </div>
    </section>

    <section class="mainContent__wrap">
        <h2 class="blind">콘텐츠 영역</h2>
        <!-- mainContent1 -->
        <article id="mainContent1" class="mainCS__wrap taget item1">
            <h2 class="blind">mainContent1</h2>
            <div class="mainCS__header">
                <h2>BODA <em>PICK !</em></h2>
                <p>특별한 오늘 전시 한 번 관람해보시는 건 어떠신가요?</p>
            </div>
            <div class="mySwiper2 swiper-container mySwiper">
                <ul class="mainCS swiper-wrapper">
                    <li class="mainCS__card swiper-slide">
                        <a href="#" class="mainCS__img">
                            <img src="../assets/img/main__cardSlider__bg01.jpg" alt="mainCS__card">
                        </a>
                        <div class="mainCS__desc">
                            <span>01</span>
                            <p class="mainCS__desc__tit">
                                ART SPACE 제 12회
                            </p>
                            <p class="mainCS__desc__date">
                                2022 - 10 - 28
                            </p>
                        </div>
                    </li>
                    <li class="mainCS__card swiper-slide">
                        <a href="#" class="mainCS__img">
                            <img src="../assets/img/main__cardSlider__bg02.jpg" alt="mainCS__card">
                        </a>
                    </li>
                    <li class="mainCS__card swiper-slide">
                        <a href="#" class="mainCS__img">
                            <img src="../assets/img/main__cardSlider__bg03.jpg" alt="mainCS__card">
                        </a>
                    </li>
                    <li class="mainCS__card swiper-slide">
                        <a class="mainCS__img">
                            <img src="../assets/img/main__cardSlider__bg04.jpg" alt="mainCS__card">
                        </a>
                    </li>
                    <li class="mainCS__card swiper-slide">
                        <a href="#" class="mainCS__img">
                            <img src="../assets/img/main__cardSlider__bg05.jpg" alt="mainCS__card">
                        </a>
                    </li>
                </ul>
                <div class="cardScrollbar">
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
            
        </article>
        <!-- //mainContent1 -->

        <!-- mainContent2 -->
        <article id="mainContent2" class="mainBanner__wrap">
            <h2 class="mainContent2"></h2>
            <div class="mainB__desc item1">
                <p>Exhibition </p>
                <p>Information</p>
                <p>BODA</p>
            </div>
            <div class="mainBanner__btm main__container">
                <div class="mainBanner__iconBox bannerItem">
                    <div class="mainBanner__icon"></div>
                </div>
                <form action="" class="mainSearch__wrap bannerItem">
                    <label for="mainSearch" class="blind">검색</label>
                    <div class="mainSearchTop">
                        <!-- <p class="click">click !</p> -->
                        <p class="mainSearch">BODA에서 원하는 전시 정보를 찾아보세요!</p>
                        <!-- <input type="text" class="mainSearch" id="mainSearch" name="mainSearch" placeholder="여러분이 원하는 정보를 찾아보세요!" autocomplete="off" required> -->
                        <!-- <button class="mainSearch__btn">
                            <div class="mainSearch__icon"></div>
                        </button> -->
                    </div>
                </form>
            </div>
        </article>
        <!-- //mainContent2 -->

        <!-- mainContent3 -->
        <div id="mainContent3" class="mainCard__Wrap offsetTop">
            <div class="mainCard__inner main__container">
                <div class="mainCard1">
                    <figure class="mainCardImg__box item1">
                        <img src="../assets/img/main__card__bg01.jpg" alt="">                        
                    </figure>
                    <div class="mainCard__desc item1">
                        <h3>EXHIBITOIN</h3>
                        <p>현재 운영중이거나 예정인 전시를 다양하게 구성하여 빠른 전시 정보를 얻을 수 있습니다.</p>
                        <div class="mainCard__btn item1">
                            <a href="../exhibition/current.php">view more</a>
                        </div>
                    </div>
                </div>
                <div class="mainCard2">
                    <div class="mainCard__desc2 item1">
                        <h3>SEARCH</h3>
                        <p>원하는 키워드에 맞게 선택하여 원하는 전시 정보를 쉽고 빠르게 얻을 수 있습니다.</p>
                        <div class="mainCard__btn item1">
                            <a href="../search/search01.php">view more</a>
                        </div>
                    </div>
                    <figure class="mainCardImg__box item1">
                        <img src="../assets/img/main__card__bg02.jpg" alt="">                        
                    </figure>
                </div>
            </div>
        </div>
        <!-- //mainContent3 -->
        
        <div class="bodaText">
            <div class="bodaTextImg"></div>
        </div>

        <!-- mainContent4 -->
        <article id="mainContent4" class="best__wrap item1">
            <h3 class="blind">maincontent4</h3>
            <div class="mainBest__inner main__container">
                <div class="mainCS__header">
                    <h2>BEST <em>RIVIEW</em></h2>
                    <p>BODA의 다양한 전시 리뷰를 확인해보세요!</p>
                </div>
                <div class="MainBest">
                <?php
    $ReviewBestSql = "SELECT r.myReviewID, r.ReviewTitle, m.youNickName, r.ReviewImgFile, r.ReviewregTime, r.ReviewView FROM myReview r JOIN myMember m ON(r.myMemberID = m.myMemberID) ORDER BY ReviewView DESC LIMIT 4";
    $ReviewBestResult = $connect -> query($ReviewBestSql);

    forEach($ReviewBestResult as $ReviewBestSql){ ?>
        <div class="Best">
            <figure class="BestImg">
                <a href="../community/ReviewView.php?myReviewID=<?=$ReviewBestSql['myReviewID']?>">
                    <img src="../assets/img/Review/<?=$ReviewBestSql['ReviewImgFile']?>" alt="베스트 리뷰 이미지">                        
                </a>
            </figure>
            <div class="bestDesc">
                <p><?=$ReviewBestSql['ReviewTitle']?></p>
                <a href="ReviewView.php?myReviewID=<?=$ReviewBestSql['myReviewID']?>">view more</a>
            </div>
        </div>
<?php } ?>
                </div>
            </div>
        </article>
        <!-- //maincontent4 -->

    </section>
    <a href="../community/Review.php"><div class="smileAgree ir">btn</div></a>
    <div class="topBtn ir">top</div>
</main>
<!-- //main -->

<?php include "../include/footer.php" ?>
<!-- //footer -->
<?php include "../include/script.php" ?>
<!-- //login -->
<script>

    //mainHeaderEffect Main header hover
const header2 = document.querySelectorAll(".mainEffect .main__menu");
const submenu2 = document.querySelector(".mainEffect .headerEffect .subMenu");

// header2.addEventListener("mouseover", () => {
//     submenu2.classList.remove("hide");
// });
// header2.addEventListener("mouseleave", () => {
//     submenu2.classList.add("hide");
// });

header2.forEach((el) => {
    el.addEventListener("mouseover", () => {
        submenu2.classList.remove("hide");
    });
});

header2.forEach((el) => {
    el.addEventListener("mouseleave", () => {
        submenu2.classList.add("hide");
    });
});

submenu2.addEventListener("mouseover", () => {
    submenu2.classList.remove("hide");
});
submenu2.addEventListener("mouseleave", () => {
    submenu2.classList.add("hide");
});

    // cardSlider
    function scroll(){
        let scrollTop = document.documentElement.scrollTop || window.scrollY;

        const offset = document.querySelectorAll(".offsetTop");
        const item1 = document.querySelectorAll(".item1");
        const bannerItem = document.querySelectorAll(".bannerItem");
        const item2 = document.querySelectorAll(".item2");

        item1.forEach((el, i) => {
            if(scrollTop > el.offsetTop - window.innerHeight/2){
                el.classList.add("show");
            }
        });

        bannerItem.forEach((el) => {
            if(scrollTop > el.offsetTop - window.innerHeight){
                el.classList.add("show");
            }
        });

        requestAnimationFrame(scroll);
    }
    scroll();

    let mainBestImg = document.querySelectorAll(".Best .BestImg a img");
    mainBestImg.forEach((e) => {
        if(e.getAttribute("src") == "../assets/img/Review/Img_default.jpg"){
            e.setAttribute("src", "../assets/img/Review/img_boda.jpg")
        }
    })
</script>
</body>
</html>