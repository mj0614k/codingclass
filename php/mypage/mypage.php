<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $MemberID = $_SESSION['memberID'];
    $sql = "SELECT * FROM Member WHERE memberID = $MemberID";
    $result = $connect -> query($sql);
    $info = $result -> fetch_array(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 사이트 만들기</title>
    <?php include "../include/head.php" ?>
</head>
<body>
<div id="skip">
    <a href="#header">헤더 영역 바로가기</a>
    <a href="#main">컨텐츠 영역 바로가기</a>
    <a href="#footer">푸터 영역 바로가기</a>
</div>
<!-- //skip -->
<?php include "../include/header.php" ?>
<!-- //header -->

    <main id="main">
        <section id="join" class="container section">
            <h2>회원정보</h2>
            <p>회원 정보를 수정할 수 있습니다. </p>
            <div class="join__inner">
                <div class="join__info">
                    <div class="img">
                        <img src="assets/img/imgDefault.svg" alt="s">
                    </div>
                    <div class="intro">
                    </div>
                    <div class="info">
                        <ul>
                            <li>
                                <strong>이메일</strong>
                                <span><?=$info['youEmail']?></span>
                            </li>
                            <li>
                                <strong>이름</strong>
                                <span><?=$info['youName']?></span>
                            </li>
                            <li>
                                <strong>생일</strong>
                                <span><?=$info['youBirth']?></span>
                            </li>
                            <li>
                                <strong>연락처</strong>
                                <span><?=$info['youPhone']?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="btn">
                        <a href="mypageModify.php">수정하기</a>   
                        <a href="mypageRemove.php">탈퇴하기</a>   
                        <a href="mypageRemove.php">로그아웃</a>   
                    </div>
                   
                </div>
            </div>
        </section>
    </main>
<!-- //main -->
<?php include "../include/footer.php" ?>
<!-- //footer -->
</body>
</html>