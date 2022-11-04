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
    <title>EXHIBITION TALK</title>
    <!-- CSS -->
    <?php include "../include/link.php" ?>
</head>

<body>
    <?php include "../include/header.php" ?>
    <?php include "../login/login.php" ?>
    <!-- //header -->

    <main id="main">
        <h2 class="blind">전시 토크 게시판입니다.</h2>
        <div class="main__header top__container">
            <h2>EXHIBITION</h2>
            <h2>Talk</h2>
            <div class="home">
                <a class="home_iconBox" href="../main/main.php"><span class="home_icon"></span></a>
                <span>TALK</span>
            </div>
            <div class="menu">
                <li><a href="Review.php">REVIEW</a></li>
                <li><a class="active" href="Talk.php">TALK</a></li>
            </div>
        </div>
        <section class="mid__container">
            <div class="talk__write">
                <form action="TalkWriteSave.php" name="TalkWrite" method="post">
                    <fieldset>
                        <legend class="blind">전시 토크 게시판 작성 영역</legend>
                        <div>
                            <label class="blind" for="TalkContents">내용</label>
                            <textarea
                                name="TalkContents"
                                id="TalkContents"
                                rows="7"
                                placeholder="내용을 입력해 주세요."
                            ></textarea>
                        </div>
                        <button type="submit" class="btn">글쓰기</button>
                    </fieldset>
                </form>
            </div>
            <div class="board">
                <h2 class="blind">전시 토크 게시판 보기 영역입니다.</h2>
                <div class="talk__board">
                    <table class="talk__table">
                        <tbody>
<?php
    if(isset($_GET['page'])){
        $page = (int)$_GET['page'];
    } else {
        $page = 1;
    } 

    $viewNum = 10;
    $viewLimit = ($viewNum * $page) - $viewNum;

    // 두 개의 테이블 join
    $sql = "SELECT t.myTalkID, m.myMemberID, m.youNickName, t.TalkContents, t.TalkregTime FROM myTalk t JOIN myMember m ON(t.myMemberID = m.myMemberID) ORDER BY myTalkID DESC LIMIT ${viewLimit}, ${viewNum}";
    $result = $connect -> query($sql);

    if($result){
        $count = $result -> num_rows;

        if($count > 0){
            for($i=1; $i <= $count; $i++){
                $info = $result -> fetch_array(MYSQLI_ASSOC);
                echo "<tr id='".$info['myTalkID']."'><td class='comment comment_1'><div class='profile'></div><div class='contents'><div class='contents__top'>";
                echo "<p class='name'><span class='ir'>작성자</span><span>".$info['youNickName']."</span></p>";
                echo "<div class='contents__topBox'><p class='date'><span class='ir'>작성일</span><span>| ".date('Y-m-d H:i', $info['TalkregTime'])."</span></p>";
                if($_SESSION['myMemberID'] == $info['myMemberID']){
                    echo "<a href='#' class='Talkmodify'>| 수정</a><a href='#' class='Talkdelete'>| 삭제</a>";
                }
                echo "</div></div>";
                echo "<div class='contents__bottom'>".nl2br($info['TalkContents'])."</div></div>";
                echo "</td></tr>";
            }
        }
    }
?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="talk__modify__modal" style='display: none;'>
                <span class="mark__modify"></span>
                <h2>수정할 내용을 입력해 주세요. 😊</h2>
                <label for="TalkModifyMsg">수정 내용</label>
                <input type="text" id="TalkModifyMsg" name="TalkModifyMsg" placeholder="수정 내용">
                <div class="TalkModifyBtn">
                    <button id="TalkModifyCancel">취소</button>
                    <button id="TalkModifyButton">수정</button>
                </div>
            </div>
            <div class="talk__delete__modal" style="display: none;">
                <span class="mark__delete"></span>
                <h1>WAIT</h1>
                <h2>정말 삭제하시겠습니까? 😥</h2>
                <div class="TalkDeleteBtn">
                    <button id="TalkDeleteCancel">취소</button>
                    <button id="TalkDeleteButton">삭제</button>
                </div>
            </div>

            <div class="board__pages">
                    <ul>
<?php
    $sql = "SELECT count(myTalkID) FROM myTalk";
    $result = $connect -> query($sql);

    $TalkCount = $result -> fetch_array(MYSQLI_ASSOC);
    $TalkCount = $TalkCount['count(myTalkID)'];

    $TalkCount = ceil($TalkCount / $viewNum);

    $pageCurrent = 5;
    $startPage = $page - $pageCurrent;
    $endPage = $page + $pageCurrent;

    // 처음 페이지 초기화
    if($startPage < 1) $startPage = 1;

    // 마지막 페이지 초기화
    if($endPage >= $TalkCount) $endPage = $TalkCount;

    // 이전 페이지, 처음 페이지 이동
    if($page != 1){
        $prevPage = $page - 1;
        echo "<li><a href='Talk.php?page=1'><svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
        <path d='M17.2498 18L11.2498 12L17.2498 6' stroke='#323232' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
        <path d='M11.25 18L5.25 12L11.25 6' stroke='#323232' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
        </svg></a></li>";
        echo "<li><a href='Talk.php?page={$prevPage}'><svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
        <path d='M14.25 6L8.25 12L14.25 18' stroke='#323232' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
        </svg></a></li>";
    }
    
    // 페이지 넘버 표시
    for($i=$startPage; $i<=$endPage; $i++){
        $active = "";
        if($i == $page) $active = "active";
        echo "<li ><a class='{$active}' href='Talk.php?page={$i}'>{$i}</a></li>";
    }
    
    // 다음 페이지, 마지막 페이지 이동
    if($page != $endPage){
        $nextPage = $page + 1;
        echo "<li><a href='Talk.php?page={$nextPage}'><svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
        <path d='M9 18L15 12L9 6' stroke='#323232' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
        </svg></a></li>";
        echo "<li><a href='Talk.php?page={$TalkCount}'><svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
        <path d='M6.75024 6L12.7502 12L6.75024 18' stroke='#323232' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
        <path d='M12.75 6L18.75 12L12.75 18' stroke='#323232' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
        </svg></a></li>";
    }
?>
                </ul>
            </div>
        </section>
        <div class="topBtn ir">top</div>
    </main>

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <?php include "../include/script.php" ?>
    <script>
        let commentID = "";

        // 수정 클릭하면 모달창
        $(".Talkmodify").click(function(e) {
            e.preventDefault();
            $(".talk__modify__modal").fadeIn(500);
            $(".talk__delete__modal").fadeOut(500);

            commentID = $(this).parent().parent().parent().parent().parent().attr("id");
        });
        // 수정 클릭하고 취소
        $("#TalkModifyCancel").click(function(e) {
            e.preventDefault();
            $(".talk__modify__modal").fadeOut(500);
        });
        // 수정 클릭하고 수정
        $("#TalkModifyButton").click(function(e) {
            e.preventDefault();
            if($("#TalkModifyMsg").val() == ''){
                alert("수정할 내용을 입력해 주세요.");
                $("#TalkModifyMsg").focus();
            }
            location.href = "TalkModify.php";

            $.ajax({
                url: "TalkModify.php",
                method: "POST",
                dataType: "json",
                data: {
                    "TalkModifyMsg": $("#TalkModifyMsg").val(),
                    "commentID": commentID
                }
            })
        });

        // 삭제 클릭하면 모달창
        $(".Talkdelete").click(function(e) {
            e.preventDefault();
            $(".talk__delete__modal").fadeIn(500);
            $(".talk__modify__modal").fadeOut(500);

            commentID = $(this).parent().parent().parent().parent().parent().attr("id");
            console.log(commentID);
        });
        // 삭제 클릭하고 취소
        $("#TalkDeleteCancel").click(function(e) {
            e.preventDefault();
            $(".talk__delete__modal").fadeOut(500);
        });
        // 삭제 클릭하고 삭제
        $("#TalkDeleteButton").click(function(e) {
            e.preventDefault();
            location.href = "TalkDelete.php";

            $.ajax({
                url: "TalkDelete.php",
                method: "POST",
                dataType: "json",
                data: {
                    "commentID": commentID
                }
            })
        });
    </script>
</body>
</html>