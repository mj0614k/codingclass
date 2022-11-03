<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
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
</head>
<body>
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">콘텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>
<?php include "../include/header.php" ?>
<?php include "../login/login.php" ?>
<!-- //header -->

<!-- main -->
<main id="main">
<h2 class="blind">추천전시 게시판입니다.</h2>
      <div class="upcomming__header container">
        <h2>
            예정전시 <span>예정된 전시를 확인할 수 있습니다.</span>
        </h2>
        <div class="current__home">
          <a class="current__home_iconBox" href="../main/main.php">
            <span class="current__home_icon"></span>
          </a>
          <span>EXHIBITION</span>
        </div>
      </div>
      <section class="upcomming__inner container">
        <div class="upcomming__in">
            <article class="upcomming">
                <figure>
                    <a href="current.html"></a><img src="../assets/img/Exhibition/card_05.jpg" alt="이미지1">
                </figure>
            </article>
    
            <article class="upcomming">
                    <figure>
                        <a href="current.html"></a><img src="../assets/img/Exhibition/card_05.jpg" alt="이미지1">
                    </figure>
            </article>
    
            <article class="upcomming">
                    <figure>
                        <a href="current.html"></a><img src="../assets/img/Exhibition/card_05.jpg" alt="이미지1">
                    </figure>
            </article>
    
            <article class="upcomming">
                    <figure>
                        <a href="current.html"></a><img src="../assets/img/Exhibition/card_05.jpg" alt="이미지1">
                    </figure>
            </article>
    
            <article class="upcomming">
                    <figure>
                        <a href="current.html"></a><img src="../assets/img/Exhibition/card_05.jpg" alt="이미지1">
                    </figure>
            </article>
    
            <article class="upcomming">
                    <figure>
                        <a href="current.html"></a><img src="../assets/img/Exhibition/card_05.jpg" alt="이미지1">
                    </figure>
            </article>
    
            <article class="upcomming">
                    <figure>
                        <a href="current.html"></a><img src="../assets/img/Exhibition/card_05.jpg" alt="이미지1">
                    </figure>
            </article>
            <article class="upcomming">
                    <figure>
                        <a href="current.html"></a><img src="../assets/img/Exhibition/card_05.jpg" alt="이미지1">
                    </figure>
            </article>
            <article class="upcomming">
                    <figure>
                        <a href="current.html"></a><img src="../assets/img/Exhibition/card_05.jpg" alt="이미지1">
                    </figure>
            </article>
            <article class="upcomming">
                    <figure>
                        <a href="current.html"></a><img src="../assets/img/Exhibition/card_05.jpg" alt="이미지1">
                    </figure>
            </article>
            <article class="upcomming">
                    <figure>
                        <a href="current.html"></a><img src="../assets/img/Exhibition/card_05.jpg" alt="이미지1">
                    </figure>
            </article>
            <article class="upcomming">
                    <figure>
                        <a href="current.html"></a><img src="../assets/img/Exhibition/card_05.jpg" alt="이미지1">
                    </figure>
            </article>
            <article class="upcomming">
                    <figure>
                        <a href="current.html"></a><img src="../assets/img/Exhibition/card_05.jpg" alt="이미지1">
                    </figure>
            </article>
            <article class="upcomming">
                    <figure>
                        <a href="current.html"></a><img src="../assets/img/Exhibition/card_05.jpg" alt="이미지1">
                    </figure>
            </article>
            <article class="upcomming">
                    <figure>
                        <a href="current.html"></a><img src="../assets/img/Exhibition/card_05.jpg" alt="이미지1">
                    </figure>
            </article>
            <article class="upcomming">
                    <figure>
                        <a href="current.html"></a><img src="../assets/img/Exhibition/card_05.jpg" alt="이미지1">
                    </figure>
            </article>
        </div>
    
        <div class="board__pages">
            <ul>
                <li>
                    <a href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.2498 18L11.2498 12L17.2498 6" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.25 18L5.25 12L11.25 6" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.25 6L8.25 12L14.25 18" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    </li>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18L15 12L9 6" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></a></li>
                <li><a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.75024 6L12.7502 12L6.75024 18" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12.75 6L18.75 12L12.75 18" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></a></li>
            </ul>
        </div>
      </section>
    <!-- //main -->
    <a href="../login/agree.php"><div class="smalieAgree ir">btn</div></a>
    <div class="topBtn ir">top</div>
</main>
<!-- //main -->

<?php include "../include/footer.php" ?>
<!-- //footer -->
<?php include "../include/script.php" ?>
<!-- //login -->
</body>
</html>