<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>NOTICE WRITE</title>

        <!-- CSS -->
        <?php include "../include/link.php" ?>
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

        <main id="main">
            <h2 class="blind">공지사항 게시판 글쓰기 페이지입니다.</h2>
            <div class="notice__header top__container">
                <h2>NOTICE</h2>
                <div class="home">
                    <a class="home_iconBox" href="../main/main.php"><span class="home_icon"></span></a>
                    <span>NOTICE</span>
                </div>
                <div class="menu">
                    <li><a href="notice.php" class="active">NOTICE</a></li>
                    <li><a href="FAQ.php">FAQ</a></li>
                </div>
            </div>  
            <section class="mid__container">
                <form action="noticeWriteSave.php" name="noticeWrite" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend class="blind">공지사항 게시글 작성 영역</legend>
                        <div class="mid__icon">
                            <div class="link">
                                <input type="file" class="pt" name="noticeFile" id="noticeFile" accept=".jpg, .jpeg, .png, .gif" placeholder="jpg(jpeg), png, gif 파일만 첨부 가능합니다.">
                                <label for="noticeFile" class="photo">                               </label>
                            </div>
                            <div class="center__icon">
                                <div class="center"></div>
                                <div class="left"></div>
                                <div class="right"></div>
                            </div>
                            <div class="right__icon">
                                <div class="icon_U"></div>
                                <div class="icon_B"></div>
                            </div>
                        </div>
                        <div class="review__write__board">
                            <div class="review__write">
                                <div class="writeBox">
                                    <div>
                                        <label class="blind" for="noticeTitle">제목</label>
                                        <input type="text" name="noticeTitle" id="noticeTitle" class="notice__Title" placeholder="제목을 입력해 주세요." required>
                                    </div>
                                    <div style="margin-top: 20px;">
                                        <label class="blind" for="noticeSubTitle">부제목</label>
                                        <input type="text" name="noticeSubTitle" id="noticeSubTitle" class="notice__SubTitle" placeholder="부제목을 입력해 주세요." required>
                                    </div>
                                    <div>
                                        <label class="blind" for="noticeContents">내용</label>
                                        <textarea name="noticeContents" id="noticeContents" class="Contents" rows="20" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="review__writeBtn">
                                <a id="rListBtn" href="notice.php">목록</a>
                                <button id="rSaveBtn" type="submit" value="저장">저장</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </section>
        </main>
        
        <?php include "../include/footer.php" ?>
        <!-- //footer -->

        <?php include "../include/script.php" ?>
    </body>
</html>
