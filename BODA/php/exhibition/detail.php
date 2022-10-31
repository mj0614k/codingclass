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
            <div class="detail__main__image" style="background-image: url(../assets/img/detail_bg01.jpg)">
                <div class="detail__container">
                    <p class="detail__location">아마따 뮤지엄</p>
                    <h2 class="detail__title">DISLOCATION</h2>
                    <p class="detail__date">2022 .09 .28  -  2022 .12 .31</p>
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
                            <img src="../assets/img/detail_bg02.jpg" alt="이미지1">
                        </figure>
                        <h3 class="detail__exhibition__h3">Harmony of sense</h3>
                        <p class="detail__exhibition__p">&lt;공감각적 심상&gt; 하나의 감각이 동시에 다른 영역의 감각을 불러일으켜 일어나는 심상. <br>
                            감각이 서로 영향을 받아 전이가 일어날 때 우리는 대상을 더욱 입체적으로 받아들인다. <br>
                            작품에 투영된 감각은 작가와 관객 사이 소통의 창구가 되어준다. <br>
                            작가가 차곡차곡 쌓아올린 시간 속 창작의 숨결을 느끼며 완성된 작품에서 무의 순간까지 빠르게 거슬러 올라간다.<br> 
                            어우러진 오감은 우리가 바라본 작품에서 향기를 느끼게 할 수도, 소리를 들려주기도 한다. <br> 
                            감각의 전이는 숨겨진 본질을 찾고 물성을 감각할 수 있는 힘을 발현한다. <br> 
                            변화하는 정원의 색깔과 풀내음 속 3명의 작가가 표현해낸 회화 및 공예작품을 통해 감각의 전이와 확장을 경험할 수 있는 시간이 되기를 바란다.</p>
                        <div class="detail__exhibition__img">
                            <figure class="left">
                                <img src="../assets/img/detail_bg03.jpg" alt="이미지2">
                            </figure>
                            <div class="detail__exhibition__desc">
                                <h3>beyound No.20-004</h3>
                                <p>육건우 | Yook Gun Woo</p>
                                <p>&lt;beyound No.20-004&gt; 작가는 패브릭을 주요 소재로 심리적 추상을 이미지화 하는 설치 미술작가이다.<br>
                                    천연섬유와 젯소를 사용하여 평면 위 레이아웃을 구성하고
                                    흰색의 다양한 주름이 갖는 변주를 활용하여 심리적 묘사를 표현하고 있다. 미약하지만 그럼에도 불구하고 끊임없이 수많은 시련을 견디어 내며 살아가기에
                                     일상의 작은 자극도 저에게 큰 파동처럼 느껴질 만큼 매일의 긴장과 안도감 속에서 살고 있기에 극과 극으로 치닫는 감정과 그 사이사이 느껴지는 다양한 감각에 기인하여 패브릭이라는 소재가 가진 불완전하면서도 가장 완전한 찰나의 순간을 포착해보고 싶었다. 그 순간을 포착하기 위해 한 방향의 장력을 활용해 긴장감이 느껴지는 극한의 감정을 만들어내기도 하고
                                    반복된 주름과 드레이프를 활용하여 몽환적이면서도 끝없이 반복되는 내면의 세계를 연출하기도 한다. </p>
                            </div>
                        </div>
                        <div class="detail__exhibition__img">
                            <div class="detail__exhibition__desc">
                                <h3>WONHYUNG_12</h3>
                                <p>문지원 | Moon Ji Won</p>
                                <p>&lt;WONHYUNG_12&gt; 삶을 운용하는 존재들은 생명력이라는 하나의 점에서 출발한다.
                                    그 근원적 중심으로부터 발생된 후로는 각자만의 여정을 따라 뻗어 나가는 듯하지만, 우리는 기필코 동류로서의 지점을 마주한다. 나는 이러한 순간들을 떠올리며 마티에르로 만들어낸 여정들의 선 위에 먹을 찍고, 스치고, 잇는다.
                                    이 작고 검은 먹 자국들이 모이고 이어져 마침내 어렴풋한 원형의 형상을 드러낸다. 무의식과 의식의 정신적 이미지를 기록하며 우리와 세계의 본질에 다가가고,
                                    화면 안에서 서로 조응하는 점과 선의 관계를 조명하고자 한다.</p>
                            </div>
                            <figure class="right">
                                <img src="../assets/img/detail_bg04.jpg" alt="이미지3">
                            </figure>
                        </div>
                        <div class="detail__exhibition__img">
                            <figure class="left">
                                <img src="../assets/img/detail_bg05.jpg" alt="이미지4">
                            </figure>
                            <div class="detail__exhibition__desc">
                                <h3>Wave2(Low Table)</h3>
                                <p>스튜디오 차차 | Studio ChaCha</p>
                                <p>&lt;Wave2
                                    &gt;스튜디오차차는 그라데이션 컬러 유리를 기반으로 다양한 시각효과를 내는 가구와 오브제를 디자인한다.
                                    익숙한 것들을 익숙하지 않은 방식으로 조합함으로써 새로운 미학을 창조하며
                                    투명한 물성의 유리가 교차하며 생기는 우연한 색감과 형태에 집중한다. 중층의 투명 레이어들은 서로 교차하고 충돌하면서 보이는 각도에 따라 다른 이미지를 만들고, 유리의 그라데이션 컬러는 이러한 중첩에 의한 상호작용의 효과를 더욱 극대화한다.
                                    스튜디오차차의 가구 오브제를 구성하는 각각의 레이어는 독립적 개체가 아닌 일종의 관계하는 집단이며,
                                    서로의 영역에 개입하여 미학적 재구성을 이룬다.</p>
                            </div>
                        </div>
                    </div>
                    <h2 id="detail__detail" class="detail__exhibition__h2">상세정보</h2>
                    <div class="detail__detail">
                        <figure class="detail__detail__img">
                            <img src="../assets/img/detail_bg06.jpg" alt="상세정보 이미지">
                        </figure>
                        <div class="detail__detail__desc">
                            <h3>Dislocation</h3>
                            <table class="detail__detail__table">
                                <tbody>
                                    <tr>
                                        <td>기간</td>
                                        <td>2012.11.20 ~ 2013.02.11</td>
                                    </tr>
                                    <tr>
                                        <td>장소</td>
                                        <td>대구미술관 1전시실<a href="#" class="arrow"><span class="ir">외부 링크로 이동</span></a></td>
                                    </tr>
                                    <tr>
                                        <td>관람 시간</td>
                                        <td>월 / 화 / 목 / 금 / 일 ( 10:00-18:00 )<br>
                                            수 / 토
                                            ( 10:00-21:00 )  </td>
                                    </tr>
                                    <tr>
                                        <td>연령</td>
                                        <td>무관</td>
                                    </tr>
                                    <tr>
                                        <td>입장권</td>
                                        <td>naver.com<a href="#" class="arrow"><span class="ir">외부 링크로 이동</span></a></td>
                                    </tr>
                                    <tr>
                                        <td>휴관일</td>
                                        <td>1월1일 / 설날 / 추석</td>
                                    </tr>
                                    <tr>
                                        <td>문의</td>
                                        <td>031-000-0000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <h2 id="detail__artist" class="detail__exhibition__h2">참여작가</h2>
                    <div class="detail__artist">
                        <div class="detail__artistList artist1">
                            <figure>
                                <img src="../assets/img/detail_bg07.jpg" alt="작가1">
                                <div>View more <span class="ViewMore__arrow"></span></div>
                            </figure>
                            <h3>육건우</h3>
                            <p>Yook Gun Woo</p>
                        </div>
                        <div class="detail__artistList artist2">
                            <figure>
                                <img src="../assets/img/detail_bg08.jpg" alt="작가2">
                                <div>View more <span class="ViewMore__arrow"></span></div>
                            </figure>
                            <h3>문지원</h3>
                            <p>Moon Ji Won</p>
                        </div>
                        <div class="detail__artistList artist3">
                            <figure>
                                <img src="../assets/img/detail_bg09.jpg" alt="작가3">
                                <div>View more <span class="ViewMore__arrow"></span></div>
                            </figure>
                            <h3>스튜디오 차차</h3>
                            <p>Studio ChaCha</p>
                        </div>
                    </div>
                    <div class="detail__artist__modal__close close1"><span class="ir">닫기</span></div>
                    <div class="detail__artist__modal modal1">
                        <div class="detail__artist__modal__top">
                            <h2 class="detail__artist__modal__h2">권소영</h2>
                            <span class="detail__artist__modal__span">Kwon So-young</span>
                        </div>
                        <div class="detail__artist__modal__bottom">
                            <figure>
                                <img src="../assets/img/detail_bg10.jpg" alt="작가 이미지">
                            </figure>
                            <p class="detail__artist__modal__p">나의 시선과 발걸음이 오랜 시간 멈추는 곳에는 언제나 그 끝에 풍경이 있다.<br>
                                계절에 따라 새로운 옷을 입으며 변하지만, 늘 그 자리에 존재한다. 나는 그 안에서 자연의 다양한 존재들을 의식하며 교감하고, 우리 모두 상생하며 살아있음을 느낀다.<br><br>
                                
                                언제부턴가 자연으로부터 갈증을 해소하고 치유 받는 나를 발견하였고, 그 때부터 집착적으로 풍경을 그리게 되었다. 내가 마주하는 풍경은 종이 위에 그려질 소재가 되고, 종이는 이성적 사유와 감성적 느낌을 담는 장소가 된다.  자연이 주는 위안을 넘어서 자연을 그리는 행위 그 자체만으로도 고요해지고 편안해진다.
                            <br>
                            직접 마주하며 나에게 스며든 자연은 깊은 관조를 통해 그 때의 감정, 공기, 바람, 소리, 냄새 등 각각의 장소에 대한 감흥에 따라 분할, 재구성의 단계를 거쳐 나만의 방식으로 기록된다. 자연의 이미지들은 회상하는 시점에 따라 시간의 순차, 공간의 연속성 없이 화면 안에서 뒤섞인다. 이는 곧 실제 자연을 기반으로 둔 가상의 공간 혹은 기억의 공간으로 전개된다.<br><br>

                            나는 자연 속에서 느꼈던 감정을 작품에 담아 관람자에게 잠시 동안만이라도 마음의 여유와 편안한 휴식을 만들어주고 싶다. 내가 경험했듯이 나의 풍경을 통해 누군가의 마음이 치유되길 바라며 불확실한 미래가 주는 현대인들의 불안함과 외로움, 그리고 삶의 고단함을 치유하기 위한 마음의 다스림을 추구한다.</p>
                        </div>
                    </div>
                    <div class="detail__artist__modal__close close2"><span class="ir">닫기</span></div>
                    <div class="detail__artist__modal modal2">
                        <div class="detail__artist__modal__top">
                            <h2 class="detail__artist__modal__h2">권소영</h2>
                            <span class="detail__artist__modal__span">Kwon So-young</span>
                        </div>
                        <div class="detail__artist__modal__bottom">
                            <figure>
                                <img src="../assets/img/detail_bg10.jpg" alt="작가 이미지">
                            </figure>
                            <p class="detail__artist__modal__p">나의 시선과 발걸음이 오랜 시간 멈추는 곳에는 언제나 그 끝에 풍경이 있다.<br>
                                계절에 따라 새로운 옷을 입으며 변하지만, 늘 그 자리에 존재한다. 나는 그 안에서 자연의 다양한 존재들을 의식하며 교감하고, 우리 모두 상생하며 살아있음을 느낀다.<br><br>
                                
                                언제부턴가 자연으로부터 갈증을 해소하고 치유 받는 나를 발견하였고, 그 때부터 집착적으로 풍경을 그리게 되었다. 내가 마주하는 풍경은 종이 위에 그려질 소재가 되고, 종이는 이성적 사유와 감성적 느낌을 담는 장소가 된다.  자연이 주는 위안을 넘어서 자연을 그리는 행위 그 자체만으로도 고요해지고 편안해진다.
                            <br>
                            직접 마주하며 나에게 스며든 자연은 깊은 관조를 통해 그 때의 감정, 공기, 바람, 소리, 냄새 등 각각의 장소에 대한 감흥에 따라 분할, 재구성의 단계를 거쳐 나만의 방식으로 기록된다. 자연의 이미지들은 회상하는 시점에 따라 시간의 순차, 공간의 연속성 없이 화면 안에서 뒤섞인다. 이는 곧 실제 자연을 기반으로 둔 가상의 공간 혹은 기억의 공간으로 전개된다.<br><br>

                            나는 자연 속에서 느꼈던 감정을 작품에 담아 관람자에게 잠시 동안만이라도 마음의 여유와 편안한 휴식을 만들어주고 싶다. 내가 경험했듯이 나의 풍경을 통해 누군가의 마음이 치유되길 바라며 불확실한 미래가 주는 현대인들의 불안함과 외로움, 그리고 삶의 고단함을 치유하기 위한 마음의 다스림을 추구한다.</p>
                        </div>
                    </div>
                    <div class="detail__artist__modal__close close3"><span class="ir">닫기</span></div>
                    <div class="detail__artist__modal modal3">
                        <div class="detail__artist__modal__top">
                            <h2 class="detail__artist__modal__h2">권소영</h2>
                            <span class="detail__artist__modal__span">Kwon So-young</span>
                        </div>
                        <div class="detail__artist__modal__bottom">
                            <figure>
                                <img src="../assets/img/detail_bg10.jpg" alt="작가 이미지">
                            </figure>
                            <p class="detail__artist__modal__p">나의 시선과 발걸음이 오랜 시간 멈추는 곳에는 언제나 그 끝에 풍경이 있다.<br>
                                계절에 따라 새로운 옷을 입으며 변하지만, 늘 그 자리에 존재한다. 나는 그 안에서 자연의 다양한 존재들을 의식하며 교감하고, 우리 모두 상생하며 살아있음을 느낀다.<br><br>
                                
                                언제부턴가 자연으로부터 갈증을 해소하고 치유 받는 나를 발견하였고, 그 때부터 집착적으로 풍경을 그리게 되었다. 내가 마주하는 풍경은 종이 위에 그려질 소재가 되고, 종이는 이성적 사유와 감성적 느낌을 담는 장소가 된다.  자연이 주는 위안을 넘어서 자연을 그리는 행위 그 자체만으로도 고요해지고 편안해진다.
                            <br>
                            직접 마주하며 나에게 스며든 자연은 깊은 관조를 통해 그 때의 감정, 공기, 바람, 소리, 냄새 등 각각의 장소에 대한 감흥에 따라 분할, 재구성의 단계를 거쳐 나만의 방식으로 기록된다. 자연의 이미지들은 회상하는 시점에 따라 시간의 순차, 공간의 연속성 없이 화면 안에서 뒤섞인다. 이는 곧 실제 자연을 기반으로 둔 가상의 공간 혹은 기억의 공간으로 전개된다.<br><br>

                            나는 자연 속에서 느꼈던 감정을 작품에 담아 관람자에게 잠시 동안만이라도 마음의 여유와 편안한 휴식을 만들어주고 싶다. 내가 경험했듯이 나의 풍경을 통해 누군가의 마음이 치유되길 바라며 불확실한 미래가 주는 현대인들의 불안함과 외로움, 그리고 삶의 고단함을 치유하기 위한 마음의 다스림을 추구한다.</p>
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
