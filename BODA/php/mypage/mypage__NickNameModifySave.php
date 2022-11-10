<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $myMemberID = $_SESSION['myMemberID'];
    $youNickName = $_POST['youNickName'];

    echo $myMemberID;
    echo $youNickName;
    
    $sql = "UPDATE myMember SET youNickName = '{$youNickName}' WHERE myMemberID = '{$myMemberID}'";
    $result = $connect -> query($sql);
?>
<script>
    // location.href = "mypage__main.php";
</script>