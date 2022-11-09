<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <?php include "../include/link.php" ?>
    <title>마이페이지</title>
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
    <h2 class="blind">마이페이지 영역입니다.</h2>
    <section class="MP__container">
      <div class="MP_Main_container">
        <article class="MP__left ">
          <h3 class="MP__title">MY PAGE</h3>
          <div class="MP__menu">
            <ul>
              <li>
                <a class="MP__menu__main" href="../mypage/mypage.php">프로필 설정</a>
              </li>
              <div class="MP__menu__main__area">
                <li>
                  <a class="MP__menu__main__sub" href="../mypage/mypage.php">∙ 프로필 수정</a>
                </li>
                <li>
                  <a class="MP__menu__main__sub" href="../mypage/mypage.php">∙ 닉네임 변경</a>
                </li>
                <li>
                  <a class="MP__menu__main__sub" href="../mypage/mypage.php">∙ 내가 쓴 글</a>
                </li>
              </div>

            </ul>
            <ul>
              <li>
                <a class="MP__menu__main" href="/">보안 설정</a>
              </li>

              <div class="MP__menu__main__area">
                <li>
                  <a class="MP__menu__main__sub" href="#">∙ 개인정보 수정</a>
                </li>
                <li>
                  <a class="MP__menu__main__sub" href="#">∙ 탈퇴하기</a>
                </li>
              </div>


            </ul>
          </div>
        </article>
        <article class="MP__right ">
          <div class="MP__box">
            <div class="MP__img">
            </div>
            <div class="MP__main__title"><?php echo $_SESSION['youNickName'] ?>님<br>어서오세요!</div>
          </div>
          <div class="MP__tit">닉네임 변경</div>
          <fieldset>
            <div class="MP__nickname">
                <input type="text" class="MP__ID" id="youNickName" name="youNickName" placeholder="닉네임을 입력해 주세요." autocomplete="off"
                required>
                <a class="MP__btn" onclick="nickChecking()">확인</a>
                <p class="msg" id="youNickNameComment"></p>
            </div>
        </fieldset>
          <div class="MP__grout"> 
            <div class="MP__review">
              <div class="MP__review__title">
                MY REVIEW
              </div>
              <div class="MP__review__desc">
                <ul>
<?php
  $myMemberID = $_SESSION['myMemberID'];
  $myReviewSql = "SELECT * FROM myReview WHERE myMemberID = $myMemberID ORDER BY myReviewID DESC LIMIT 5";
  $myReviewSqlResult = $connect -> query($myReviewSql);

  forEach($myReviewSqlResult as $myReviewSql){ ?>
    <li><?=$myReviewSql['ReviewTitle']?></li>
<?php } ?>
                </ul>
              </div>
            </div>
            <div class="MP__talk">
              <div class="MP__talk__title">
                MY TALK
              </div>
              <div class="MP__review__desc">
                <ul>
<?php
  $myTalkSql = "SELECT * FROM myTalk WHERE myMemberID = $myMemberID ORDER BY myTalkID DESC LIMIT 5";
  $myTalkSqlResult = $connect -> query($myTalkSql);

  forEach($myTalkSqlResult as $myTalkSql){ ?>
    <li><?=$myTalkSql['TalkContents']?></li>
<?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </article>

      </div>
    </section>
  </main>
  <!-- //main -->
<!-- //main -->
<div class="topBtn ir">top</div>
</main>
<!-- //main -->

<?php include "../include/footer.php" ?>
<!-- //footer -->
<?php include "../include/script.php" ?>
<!-- //login -->
<script>
    function nickChecking(){
        let youNickName = $("#youNickName").val();
        if(youNickName == null || youNickName == ''){
            $("#youNickNameComment").text("* 닉네임을 입력해 주세요.")
        }else {
            $.ajax({
                type : "POST",
                url : "mypage.php",
                data : {"youNickName" : youNickName, "type" : "nickCheck"},
                dataType : "json",
                success : function(data){
                    if(data.result == "good"){
                        $("#youNickNameComment").text("* 사용 가능한 닉네임입니다.");
                        nickCheck = true;
                    }else {
                        $("#youNickNameComment").text("* 이미 동일한 닉네임이 존재합니다.");
                        nickCheck = false;
                    }
                },
                error : function(request, status, error){
                    console.log("request" + request);
                    console.log("status" + status);
                    console.log("error" + error);
                }
            })
        }
    }
</script>
</body>
</html>