<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $myFAQID = $_GET["myFAQID"];

    $sql = "DELETE FROM myFAQ WHERE myFAQID = {$myFAQID}";
    $connect -> query($sql);
?>
<script>
    location.href="FAQ.php";
</script>