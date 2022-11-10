<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $myMemberID = $_SESSION['myMemberID'];
    $youNickName = $_POST['youNickName'];

    $sql = "UPDATE myMember SET youNickName = '{$youNickName}' WHERE myMemberID = '{$myMemberID}'";
    $result = $connect -> query($sql);
?>
<script>
    alert("닉네임 변경이 완료되었어요! 하지만 모든 페이지에 반영되기까지 시간이 걸린답니다. Please wait...😘");
    location.href = "mypage__main.php";
</script>