<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $ReviewCommentID = $_POST["ReviewCommentID"];

    $sql = "DELETE FROM myReviewComment WHERE myReviewCommentID = {$ReviewCommentID}";
    $result = $connect -> query($sql);
?>