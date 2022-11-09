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
        <article class="MP__right">
          <div class="MP__box">
<?php
    $myMemberID = $_SESSION['myMemberID'];
    $Profilesql = "SELECT youProfile FROM myMember WHERE myMemberID = $myMemberID";
    $Profileresult = $connect -> query($Profilesql);
    $info = $Profileresult -> fetch_array(MYSQLI_ASSOC);
?>
            <div class="MP__img" style="background-image: url(../assets/img/Profile/<?=$info['youProfile']?>)">
            </div>
            <div class="MP__main__title"><?php echo $_SESSION['youNickName'] ?>님<br>어서오세요!</div>
          </div>
          <div class="MP__tit">닉네임 변경</div>
          <fieldset>
            <div class="MP__nickname">
                <input type="text" class="MP__ID" id="youNickName" name="youNickName" placeholder="닉네임을 입력해 주세요." autocomplete="off" maxlength="10"
                required>
                <a class="MP__btn" onclick="nickChecking()">변경</a>
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
    <div class="talk__modify__modal" style='display: none;'>
            <form action="mypage__profileModifySave.php" name="ProfileFile" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend class="blind">프로필 사진 수정 영역</legend>
                    <span class="mark__modify"></span>
                    <h2>변경할 프로필 사진을 첨부해 주세요. 😊</h2>
                    <label for="ProfileFile">첨부 파일</label>
                    <input type="file" class="file" name="ProfileFile" id="ProfileFile" accept=".jpg, .jpeg, .png, .gif" placeholder="jpg(jpeg), png, gif 파일만 첨부 가능합니다.">
                    <div class="TalkModifyBtn">
                        <button id="ProfileModifyCancel">취소</button>
                        <button id="ProfileModifyButton">수정</button>
                    </div>
                </fieldset>
            </form>
    </div>
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

    let nickCheck = false;
    function nickChecking(){
        let youNickName = $("#youNickName").val();
        if(youNickName == null || youNickName == ''){
            $("#youNickNameComment").text("* 닉네임을 입력해 주세요.");
        }else {
            $.ajax({
                type : "POST",
                url : "mypage__NickNameModify.php",
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

    $(".MP__img").click(function(e) {
        e.preventDefault();
        $(".talk__modify__modal").fadeIn(500);
    })

    // 수정 클릭하고 취소
    $("#ProfileModifyCancel").click(function(e) {
            e.preventDefault();
            $(".talk__modify__modal").fadeOut(500);
        });
        // 수정 클릭하고 수정
        $("#ProfileModifyButton").click(function(e) {
            // e.preventDefault();
            // if($("#ProfileModifyMsg").val() == ''){
            //     alert("파일이 첨부되지 않았습니다.");
            //     $("#ProfileModifyMsg").focus();
            // }
            // location.href = "ProfileModify.php";

            // $.ajax({
            //     url: "ProfileModify.php",
            //     method: "POST",
            //     dataType: "json",
            //     data: {
            //         "ProfileModifyMsg": $("#ProfileModifyMsg").val(),
            //         "commentID": commentID
            //     }
            // })
        });
</script>
</body>
</html>