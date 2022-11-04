<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $myReviewID = $_GET['myReviewID'];
    $ReviewSql = "SELECT * FROM myReview WHERE myReviewID = {$myReviewID}";
    $ReviewResult = $connect -> query($ReviewSql);
    $ReviewInfo = $ReviewResult -> fetch_array(MYSQLI_ASSOC);
    $ReviewCommentSql = "SELECT * FROM myReviewComment WHERE myReviewID = {$myReviewID} ORDER BY myReviewCommentID DESC";
    $ReviewCommentResult = $connect -> query($ReviewCommentSql);
    $ReviewCommentInfo = $ReviewResult -> fetch_array(MYSQLI_ASSOC);
    echo $ReviewCommentInfo;
?>

<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS -->
        <?php include "../include/link.php" ?>
        <title>REVIEW VIEW</title>
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
            <h2 class="blind">리뷰 게시판 보기 페이지입니다.</h2>
            <div class="main__header top__container">
                <h2>TODAY's</h2>
                <h2>Review</h2>
                <div class="home">
                    <a class="home_iconBox" href="../main/main.php"><span class="home_icon"></span></a>
                    <span>REVIEW</span>
                </div>
                <div class="menu">
                    <li><a href="Review.php" class="active">REVIEW</a></li>
                    <li><a href="Talk.php">TALK</a></li>
                </div>
            </div>
            <section class="mid__container">
                <div class="viewBoard">
                    <div class="view__table">
                        <table class="view">
                            <colgroup>
                                <col style="width: 20%" />
                                <col style="width: 60%" />
                                <col style="width: 20%" />
                            </colgroup>
<?php
    $myReviewID = $_GET['myReviewID'];

    // 조회수 + 1(UPDATE)
    $sql = "UPDATE myReview set ReviewView = ReviewView + 1 WHERE myReviewID = {$myReviewID}";
    $connect -> query($sql);
    
    $sql = "SELECT r.ReviewTitle, m.myMemberID, m.youNickName, r.ReviewregTime, r.ReviewView, r.ReviewImgFile, r.ReviewContents, r.ReviewLike FROM myReview r JOIN myMember m ON(r.myMemberID = m.myMemberID) WHERE r.myReviewID = {$myReviewID}";
    $result = $connect -> query($sql);

    if($result){
        $info = $result -> fetch_array(MYSQLI_ASSOC);

        echo "<thead><tr><div class='view__thBox'><th class='view__thBox'>".$info['youNickName']."</th>";
        echo "<th class='view__thBox'>".$info['ReviewTitle']."</th>";
        echo "<th class='view__thBox'>".date('Y-m-d', $info['ReviewregTime'])."</th></div>";
        echo "<th class='view__thMobileBox'><p>".$info['ReviewTitle']."</p>";
        echo "<div class='thMobile__BT'><p>".$info['youNickName']."</p>";
        echo "<p>".date('Y-m-d', $info['ReviewregTime'])."</p></div></th></tr></thead>";
        echo "<tbody><tr><td colspan='3'><div class='height'><figure class='viewImg'><img src='../assets/img/Review/".$info['ReviewImgFile']."'></figure>";
        echo "<div class='view__desc'><p>".nl2br($info['ReviewContents'])."</p></div></td></tr></tr></tbody>";
    }
?>
                        </table>
                        <div class="view__bottom">
                            <div class="icon">
                                <div class="eye">
                                    <div class="eye_img"></div>
                                    <span> 
                                        <? echo $info['ReviewView']; ?>
                                    </span>
                                    <span class="ir">조회수</span>
                                </div>
                            </div>
                            <div class="view__btn">
                        <?php if($_SESSION['myMemberID'] == $info['myMemberID']){ ?>
                                <a href='ReviewModify.php?myReviewID=<?=$myReviewID?>'>수정</a>
                                <a href='ReviewRemove.php?myReviewID=<?=$myReviewID?>' onclick="alert('정말로 삭제할까요?')">삭제</a>
                                <a href='Review.php'>목록</a>
                            <? } else { ?>
                                <a href='Review.php'>목록</a>
                        <?    }
                        ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment__wrap">
                    <div class="comment__inner">
                        <legend>댓글 작성 영역</legend>
                        <div class="commentBox">
                            <label for="ReviewComment">내용</label>
                            <input
                                type="text"
                                name="ReviewComment"
                                id="ReviewComment"
                                class="viewClass"
                                placeholder="댓글을 입력해 보세요."
                                required>
                            <button type="submit" class="btn" id="ReviewCommentWrite">등록</button>
                        </div>
                    </div>
                    <div class="commentsList">
<?php foreach($ReviewCommentResult as $comment){ ?>
    <div class="comment" id="<?=$comment['myReviewCommentID']?>">
        <div class="profile">
        </div>
        <div class="contents">
            <div class="contents__top">
                <p class="name"><span class="ir">작성자</span><span><?=$comment['youNickName']?></span></p>
                <div class="dateBox">
                    <p class="date"><span class="ir">작성일</span><span>| <?=date('Y-m-d H:i', $comment['ReviewCommentregTime'])?></span></p>
                    <button class="modify">| 수정</button>
                    <button class="remove">| 삭제</button>
                </div>
            </div>
            <div class="contents__bottom">
                <span><?=$comment['ReviewComment']?></span>
            </div>
        </div>
    </div>
<?php } ?>
                        <div class="talk__modify__modal" style='display: none;'>
                            <span class="mark__modify"></span>
                            <h2>수정할 내용을 입력해 주세요. 😊</h2>
                            <label for="ReviewCommentModifyMsg">수정 내용</label>
                            <input type="text" id="ReviewCommentModifyMsg" name="ReviewCommentModifyMsg" placeholder="수정 내용">
                            <div class="TalkModifyBtn">
                                <button id="ReviewCommentModifyCancel">취소</button>
                                <button id="ReviewCommentModifyButton">수정</button>
                            </div>
                        </div>
                        <div class="talk__delete__modal" style="display: none;">
                            <span class="mark__delete"></span>
                            <h1>WAIT</h1>
                            <h2>정말 삭제하시겠습니까? 😥</h2>
                            <div class="TalkDeleteBtn">
                                <button id="ReviewCommentDeleteCancel">취소</button>
                                <button id="ReviewCommentDeleteButton">삭제</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="topBtn ir">top</div>
        </main>

        <?php include "../include/footer.php" ?>
        <!-- //footer -->
        <?php include "../include/script.php" ?>
        <script>
            let ViewImg = document.querySelector(".viewBoard .view__table table tbody .height img");
            let ViewImgsrc = ViewImg.getAttribute("src");
            if(ViewImgsrc == "../assets/img/Review/Img_default.jpg"){
                ViewImg.style.display = "none";
            }

            const ReviewComment = $("#ReviewComment"); // 댓글 내용
            const ReviewCommentWrite = $("#ReviewCommentWrite"); // 댓글 작성 버튼

            // 댓글 쓰기 버튼
            ReviewCommentWrite.click(function(){
                if(ReviewComment.val() == ""){
                    alert("댓글을 입력해 주세요.");
                    ReviewComment.focus();
                } else {
                    $.ajax({
                        url: "ReviewCommentWrite.php",
                        method: "POST",
                        dataType: "json",
                        data: {
                            "ReviewID": <?=$myReviewID?>,
                            "ReviewComment": ReviewComment.val(),
                        }
                    });
                    location.reload();
                }
            });

            let ReviewCommentID = "";

            // 수정 클릭하면 모달창
            $(".modify").click(function(e) {
                e.preventDefault();
                $(".talk__modify__modal").fadeIn(500);
                $(".talk__delete__modal").fadeOut(500);

                ReviewCommentID = $(this).parent().parent().parent().parent().attr("id");
            });
            // 수정 클릭하고 취소
            $("#ReviewCommentModifyCancel").click(function(e) {
                e.preventDefault();
                $(".talk__modify__modal").fadeOut(500);
            });
            // 수정 클릭하고 수정
            $("#ReviewCommentModifyButton").click(function(e) {
                e.preventDefault();
                if($("#ReviewCommentModifyMsg").val() == ''){
                    alert("수정할 내용을 입력해 주세요.");
                    $("#ReviewCommentModifyMsg").focus();
                } else {
                    $.ajax({
                        url: "ReviewCommentModify.php",
                        method: "POST",
                        dataType: "json",
                        data: {
                            "ReviewCommentModifyMsg": $("#ReviewCommentModifyMsg").val(),
                            "ReviewCommentID": ReviewCommentID
                        }
                    })
                    location.reload();
                }
            });

            // 삭제 클릭하면 모달창
            $(".remove").click(function(e) {
                e.preventDefault();
                $(".talk__delete__modal").fadeIn(500);
                $(".talk__modify__modal").fadeOut(500);

                ReviewCommentID = $(this).parent().parent().parent().parent().attr("id");
            });
            // 삭제 클릭하고 취소
            $("#ReviewCommentDeleteCancel").click(function(e) {
                e.preventDefault();
                $(".talk__delete__modal").fadeOut(500);
            });
            // 삭제 클릭하고 삭제
            $("#ReviewCommentDeleteButton").click(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "ReviewCommentDelete.php",
                    method: "POST",
                    dataType: "json",
                    data: {
                        "ReviewCommentID": ReviewCommentID
                    }
                })
                location.reload();
            });
        </script>
    </body>
</html>
