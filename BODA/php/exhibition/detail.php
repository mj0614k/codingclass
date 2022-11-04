<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
    $myExhibitionID = $_GET['myExhibitionID'];
    $sql = "SELECT * FROM myExhibition WHERE myExhibitionID = $myExhibitionID";
    $result = $connect -> query($sql);
    $info = $result -> fetch_array(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- CSS -->
        <?php include "../include/link.php" ?>
        <!-- //CSS -->

        <title>전시 정보 페이지</title>
    </head>
    <body>
        <!-- skip -->
        <div id="skip">
            <a href="#header">헤더 영역 바로가기</a>
            <a href="#main">콘텐츠 영역 바로가기</a>
            <a href="#footer">푸터 영역 바로가기</a>
        </div>
        <!-- //skip -->

        <?php include "../include/header.php" ?>
        <?php include "../login/login.php" ?>
        <!-- //header -->

        <main id="main">
            <h2 class="blind">전시 정보 상세 페이지입니다.</h2>
            <div class="detail__main__image" style="background-image: url(../assets/img/Exhibition/<?=$info['MainImgFile']?>)">
                <div class="detail__container">
                    <p class="detail__location"><?=$info['Location']?></p>
                    <h2 class="detail__title"><?=$info['ExhibitionTitle']?></h2>
                    <p class="detail__date"><?=date('Y-m-d', $info['StartDate'])?> - <?=date('Y-m-d', $info['EndDate'])?></p>
                </div>
            </div>
            <div class="detail__container">
                <div class="detail__header">
                    <div class="home">
                        <a class="home_iconBox" href="../main/main.html">
                            <span class="home_icon"></span>
                        </a>
                        <span>Exhibition</span>
                    </div>
                    <div class="menu">
                        <li><a href="#detail__exhibition" class="active">전시소개</a></li>
                        <li><a href="#detail__detail">상세정보</a></li>
                        <li><a href="#detail__artist">참여작가</a></li>
                    </div>
                </div>
                <div class="detail__main">
                    <h2 id="detail__exhibition" class="detail__exhibition__h2">전시소개</h2>
                    <div class="detail__exhibition">
                        <figure class="detail__exhibition__main">
                            <img src="../assets/img/Exhibition/<?=$info['SubImgFile']?>" alt="이미지1">
                        </figure>
                        <h3 class="detail__exhibition__h3"><?=$info['MainTitle']?></h3>
                        <p class="detail__exhibition__p"><?=nl2br($info['MainDesc'])?>
                        <div class="detail__exhibition__img">
                            <figure class="left">
                                <img src="../assets/img/Exhibition/<?=$info['Artist1WorkPhoto']?>" alt="이미지2">
                            </figure>
                            <div class="detail__exhibition__desc">
                                <h3><?=$info['Artist1WorkName']?></h3>
                                <p><?=$info['Artist1Name']?> | <?=$info['Artist1Eng']?></p>
                                <p><?=nl2br($info['Artist1WorkDesc'])?></p>
                            </div>
                        </div>
                        <div class="detail__exhibition__img">
                            <div class="detail__exhibition__desc">
                            <h3><?=$info['Artist2WorkName']?></h3>
                                <p><?=$info['Artist2Name']?> | <?=$info['Artist2Eng']?></p>
                                <p><?=nl2br($info['Artist2WorkDesc'])?></p>
                            </div>
                            <figure class="right">
                                <img src="../assets/img/Exhibition/<?=$info['Artist2WorkPhoto']?>" alt="이미지3">
                            </figure>
                        </div>
                        <div class="detail__exhibition__img">
                            <figure class="left">
                                <img src="../assets/img/Exhibition/<?=$info['Artist3WorkPhoto']?>" alt="이미지4">
                            </figure>
                            <div class="detail__exhibition__desc">
                            <h3><?=$info['Artist3WorkName']?></h3>
                                <p><?=$info['Artist3Name']?> | <?=$info['Artist3Eng']?></p>
                                <p><?=nl2br($info['Artist3WorkDesc'])?></p>
                            </div>
                        </div>
                    </div>
                    <h2 id="detail__detail" class="detail__exhibition__h2">상세정보</h2>
                    <div class="detail__detail">
                        <figure class="detail__detail__img">
                            <img src="../assets/img/Exhibition/<?=$info['DetailImgFile']?>" alt="상세정보 이미지">
                        </figure>
                        <div class="detail__detail__desc">
                            <h3>Dislocation</h3>
                            <table class="detail__detail__table">
                                <tbody>
                                    <tr>
                                        <td>기간</td>
                                        <td><?=date('Y-m-d', $info['StartDate'])?> ~ <?=date('Y-m-d', $info['EndDate'])?></td>
                                    </tr>
                                    <tr>
                                        <td>장소</td>
                                        <td><?=$info['Location']?><a href="#" class="arrow"><span class="ir">외부 링크로 이동</span></a></td>
                                    </tr>
                                    <tr>
                                        <td>관람 시간</td>
                                        <td><?=nl2br($info['ViewTime'])?></td>
                                    </tr>
                                    <tr>
                                        <td>연령</td>
                                        <td><?=$info['ViewAge']?></td>
                                    </tr>
                                    <tr>
                                        <td>입장권</td>
                                        <td><?=$info['AdLink']?><a href="<?=$info['AdLink']?>" class="arrow"><span class="ir">외부 링크로 이동</span></a></td>
                                    </tr>
                                    <tr>
                                        <td>휴관일</td>
                                        <td><?=$info['Closed']?></td>
                                    </tr>
                                    <tr>
                                        <td>문의</td>
                                        <td><?=$info['Contact']?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <h2 id="detail__artist" class="detail__exhibition__h2">참여작가</h2>
                    <div class="detail__artist">
                        <div class="detail__artistList artist1">
                            <figure>
                                <img src="../assets/img/Exhibition/<?=$info['Artist1Photo']?>" alt="작가1">
                                <div>View more <span class="ViewMore__arrow"></span></div>
                            </figure>
                            <h3><?=$info['Artist1Name']?></h3>
                            <p><?=$info['Artist1Eng']?></p>
                        </div>
                        <div class="detail__artistList artist2">
                            <figure>
                                <img src="../assets/img/Exhibition/<?=$info['Artist2Photo']?>" alt="작가2">
                                <div>View more <span class="ViewMore__arrow"></span></div>
                            </figure>
                            <h3><?=$info['Artist2Name']?></h3>
                            <p><?=$info['Artist2Eng']?></p>
                        </div>
                        <div class="detail__artistList artist3">
                            <figure>
                                <img src="../assets/img/Exhibition/<?=$info['Artist3Photo']?>" alt="작가3">
                                <div>View more <span class="ViewMore__arrow"></span></div>
                            </figure>
                            <h3><?=$info['Artist3Name']?></h3>
                            <p><?=$info['Artist3Eng']?></p>
                        </div>
                    </div>
                    <div class="detail__artist__modal__close close1"><span class="ir">닫기</span></div>
                    <div class="detail__artist__modal modal1">
                        <div class="detail__artist__modal__top">
                            <h2 class="detail__artist__modal__h2"><?=$info['Artist1Name']?></h2>
                            <span class="detail__artist__modal__span"><?=$info['Artist1Eng']?></span>
                        </div>
                        <div class="detail__artist__modal__bottom">
                            <figure>
                                <img src="../assets/img/Exhibition/<?=$info['Artist1ModalPhoto']?>" alt="작가 이미지">
                            </figure>
                            <p class="detail__artist__modal__p">
                                <?=nl2br($info['Artist1ModalDesc'])?>
                            </p>
                        </div>
                    </div>
                    <div class="detail__artist__modal__close close2"><span class="ir">닫기</span></div>
                    <div class="detail__artist__modal modal2">
                        <div class="detail__artist__modal__top">
                        <h2 class="detail__artist__modal__h2"><?=$info['Artist2Name']?></h2>
                            <span class="detail__artist__modal__span"><?=$info['Artist2Eng']?></span>
                        </div>
                        <div class="detail__artist__modal__bottom">
                            <figure>
                                <img src="../assets/img/Exhibition/<?=$info['Artist2ModalPhoto']?>" alt="작가 이미지">
                            </figure>
                            <p class="detail__artist__modal__p"><?=nl2br($info['Artist2ModalDesc'])?></p>
                        </div>
                    </div>
                    <div class="detail__artist__modal__close close3"><span class="ir">닫기</span></div>
                    <div class="detail__artist__modal modal3">
                        <div class="detail__artist__modal__top">
                        <h2 class="detail__artist__modal__h2"><?=$info['Artist3Name']?></h2>
                            <span class="detail__artist__modal__span"><?=$info['Artist3Eng']?></span>
                        </div>
                        <div class="detail__artist__modal__bottom">
                            <figure>
                                <img src="../assets/img/Exhibition/<?=$info['Artist3ModalPhoto']?>" alt="작가 이미지">
                            </figure>
                            <p class="detail__artist__modal__p"><?=nl2br($info['Artist3ModalDesc'])?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="topBtn ir">top</div>
        </main>
        <!-- //main -->

        <?php include "../include/footer.php" ?>

        <?php include "../include/script.php" ?>
        <script>
            $(".artist1").click(function(e){
                e.preventDefault();
                $(".modal1").fadeIn(500);
                $(".close1").fadeIn(500);
            })
            $(".close1").click(function(e){
                e.preventDefault();
                $(".modal1").fadeOut(500);
                $(".close1").fadeOut(500);
            })
            $(".artist2").click(function(e){
                e.preventDefault();
                $(".modal2").fadeIn(500);
                $(".close2").fadeIn(500);
            })
            $(".close2").click(function(e){
                e.preventDefault();
                $(".modal2").fadeOut(500);
                $(".close2").fadeOut(500);
            })
            $(".artist3").click(function(e){
                e.preventDefault();
                $(".modal3").fadeIn(500);
                $(".close3").fadeIn(500);
            })
            $(".close3").click(function(e){
                e.preventDefault();
                $(".modal3").fadeOut(500);
                $(".close3").fadeOut(500);
            })
        </script>
    </body>
</html>
