<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $myMemberID = $_SESSION['myMemberID'];
    $ProfileFile = $_FILES['ProfileFile'];
    $ProfileFileSize = $_FILES['ProfileFile']['size'];
    $ProfileFileType = $_FILES['ProfileFile']['type'];
    $ProfileFileName = $_FILES['ProfileFile']['name'];
    $ProfileFileTmp = $_FILES['ProfileFile']['tmp_name'];


    if($ProfileFileType){
        $fileTypeExtension = explode("/", $ProfileFileType);
        $fileType = $fileTypeExtension[0];      //image
        $fileExtension = $fileTypeExtension[1]; //png
        //이미지 타입 확인
        if($fileType == "image"){
            if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                $ProfileFileDir = "../assets/img/Profile/";
                $ProfileFileName = "Img_".time().rand(1,99999)."."."{$fileExtension}";
                // echo "이미지 파일이 맞네요!";
                // 이미지 파일
                $sql = "UPDATE myMember SET youProfile = '{$ProfileFileName}' WHERE myMemberID = '{$myMemberID}'";
            } else {
                echo "<script>alert('jpg, jpeg, png, gif 파일만 첨부할 수 있습니다.'); history.back(1)</script>";
            }
        }
    } else {
        $sql = "UPDATE myMember SET youProfile = 'Img_default.png' WHERE myMemberID = '{$myMemberID}'";
    }
    //이미지 사이즈 확인
    if($ProfileFileSize > 1000000){
        echo "<script>alert('이미지 용량이 1MB를 초과했습니다.'); history.back(1)</script>";
        exit;
    }

    $result = $connect -> query($sql);
    $result = move_uploaded_file($ProfileFileTmp, $ProfileFileDir.$ProfileFileName);
    $connect -> query($sql);
?>
<script>
    location.href = "mypage__main.php";
</script>