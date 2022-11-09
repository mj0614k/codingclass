<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $myNoticeID = $_GET["myNoticeID"];

    $sql = "DELETE FROM myNotice WHERE myNoticeID = {$myNoticeID}";
    $connect -> query($sql);
?>
<script>
    location.href="notice.php";
</script>