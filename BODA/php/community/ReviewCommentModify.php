<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $ReviewCommentID = $_POST['ReviewCommentID'];
    $ReviewCommentModifyMsg = $_POST['ReviewCommentModifyMsg'];

    $sql = "UPDATE myReviewComment SET ReviewComment = '$ReviewCommentModifyMsg' WHERE myReviewCommentID = $ReviewCommentID";
    $connect -> query($sql);
?>