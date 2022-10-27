<?php 
    include "../connect/connect.php";
    include "../connect/session.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 사이트 만들기</title>
    <link rel="stylesheet" href="..">

    <?php include "../include/link.php" ?>
</head>
<body>
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">콘텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main">
            <section id="banner">
                <h2>블로그 소개입니다.</h2>
                <div class="banner__inner container">
                    <div class="img">
                        <img src="../assets/img/banner_bg01.jpg" alt="배너 이미지" />
                    </div>
                    <div class="desc">
                        어떤 일이라도 <em>노력하고 즐기면</em> 그 결과는 빛을 발한다고 생각합니다.
                        신입의 <em>열정</em>과 <em>도전정신</em>을 깊숙히 새기고, 배움에 있어
                        <em>겸손함</em>을 유지하며 세부적인 곳까지 파고드는 개발자가 되겠습니다.
                    </div>
                </div>
            </section>
            <!-- //banner -->
            <section id="card" class="container">
                <h2>javascript topic</h2>
                <div class="card__inner">
                    <div>
                        <figure>
                            <img src="../assets/img/card_bg01.jpg" alt="" />
                            <a href="#" class="go" title="콘텐츠 바로가기">GO</a>
                        </figure>
                        <div>
                            <h3>VSCode에 SCSS 설치하기</h3>
                            <p>
                                먼저 확장 프로그램에서 SCSS를 설치합니다. SASS와 SCSS는 같지만 쓰는
                                방법은 살짝 다릅니다.
                            </p>
                        </div>
                    </div>
                    <div>
                        <figure>
                            <img src="../assets/img/card_bg02.jpg" alt="" />
                            <a href="#" class="go" title="콘텐츠 바로가기">GO</a>
                        </figure>
                        <div>
                            <h3>VSCode에 SCSS 설치하기</h3>
                            <p>
                                먼저 확장 프로그램에서 SCSS를 설치합니다. SASS와 SCSS는 같지만 쓰는
                                방법은 살짝 다릅니다.
                            </p>
                        </div>
                    </div>
                    <div>
                        <figure>
                            <img src="../assets/img/card_bg03.jpg" alt="" />
                            <a href="#" class="go" title="콘텐츠 바로가기">GO</a>
                        </figure>
                        <div>
                            <h3>VSCode에 SCSS 설치하기</h3>
                            <p>
                                먼저 확장 프로그램에서 SCSS를 설치합니다. SASS와 SCSS는 같지만 쓰는
                                방법은 살짝 다릅니다.
                            </p>
                        </div>
                    </div>
                    <div>
                        <figure>
                            <img src="../assets/img/card_bg04.jpg" alt="" />
                            <a href="#" class="go" title="콘텐츠 바로가기">GO</a>
                        </figure>
                        <div>
                            <h3>VSCode에 SCSS 설치하기</h3>
                            <p>
                                먼저 확장 프로그램에서 SCSS를 설치합니다. SASS와 SCSS는 같지만 쓰는
                                방법은 살짝 다릅니다.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- //card -->
            <section id="card" class="container">
                <h2>javascript topic</h2>
                <div class="card__inner">
                    <div>
                        <figure>
                            <img src="../assets/img/card_bg01.jpg" alt="" />
                            <a href="#" class="go" title="콘텐츠 바로가기">GO</a>
                        </figure>
                        <div>
                            <h3>VSCode에 SCSS 설치하기</h3>
                            <p>
                                먼저 확장 프로그램에서 SCSS를 설치합니다. SASS와 SCSS는 같지만 쓰는
                                방법은 살짝 다릅니다.
                            </p>
                        </div>
                    </div>
                    <div>
                        <figure>
                            <img src="../assets/img/card_bg02.jpg" alt="" />
                            <a href="#" class="go" title="콘텐츠 바로가기">GO</a>
                        </figure>
                        <div>
                            <h3>VSCode에 SCSS 설치하기</h3>
                            <p>
                                먼저 확장 프로그램에서 SCSS를 설치합니다. SASS와 SCSS는 같지만 쓰는
                                방법은 살짝 다릅니다.
                            </p>
                        </div>
                    </div>
                    <div>
                        <figure>
                            <img src="../assets/img/card_bg03.jpg" alt="" />
                            <a href="#" class="go" title="콘텐츠 바로가기">GO</a>
                        </figure>
                        <div>
                            <h3>VSCode에 SCSS 설치하기</h3>
                            <p>
                                먼저 확장 프로그램에서 SCSS를 설치합니다. SASS와 SCSS는 같지만 쓰는
                                방법은 살짝 다릅니다.
                            </p>
                        </div>
                    </div>
                    <div>
                        <figure>
                            <img src="../assets/img/card_bg04.jpg" alt="" />
                            <a href="#" class="go" title="콘텐츠 바로가기">GO</a>
                        </figure>
                        <div>
                            <h3>VSCode에 SCSS 설치하기</h3>
                            <p>
                                먼저 확장 프로그램에서 SCSS를 설치합니다. SASS와 SCSS는 같지만 쓰는
                                방법은 살짝 다릅니다.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- //card -->
            <section id="ad" class="container">
                <h2>광고</h2>
                <div class="ad__inner">
                    <div class="ad"></div>
                </div>
            </section>
        </main>
        <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <?php include "../login/login.php" ?>
    <!-- //login -->

    <script src="../assets/js/custom.js"></script>
</body>
</html>