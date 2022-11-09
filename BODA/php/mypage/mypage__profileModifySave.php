<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $ProfileFile = $_FILES['ProfileFile'];
    $ProfileFileSize = $_FILES['ProfileFile']['size'];
    $ProfileFileType = $_FILES['ProfileFile']['type'];
    $ProfileFileName = $_FILES['ProfileFile']['name'];
    $ProfileFileTmp = $_FILES['ProfileFile']['tmp_name'];


    if($ReviewImgType){
        $fileTypeExtension = explode("/", $ReviewImgType);
        $fileType = $fileTypeExtension[0];      //image
        $fileExtension = $fileTypeExtension[1]; //png
        //이미지 타입 확인
        if($fileType == "image"){
            if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                $ReviewImgDir = "../assets/img/Review/";
                $ReviewImgName = "Img_".time().rand(1,99999)."."."{$fileExtension}";
                // echo "이미지 파일이 맞네요!";
                // 이미지 파일
                $sql = "UPDATE myReview SET ReviewTitle = '{$ReviewTitle}', ReviewContents = '{$ReviewContents}', ReviewImgFile = '{$ReviewImgName}' WHERE myReviewID = '{$myReviewID}'";
            } else {
                echo "<script>alert('jpg, jpeg, png, gif 파일만 첨부할 수 있습니다.'); history.back(1)</script>";
            }
        }
    } else {
        $sql = "UPDATE myReview SET ReviewTitle = '{$ReviewTitle}', ReviewContents = '{$ReviewContents}' WHERE myReviewID = '{$myReviewID}'";
    }
    //이미지 사이즈 확인
    if($ReviewImgSize > 1000000){
        echo "<script>alert('이미지 용량이 1MB를 초과했습니다.'); history.back(1)</script>";
        exit;
    }

    $result = $connect -> query($sql);
    $result = move_uploaded_file($ReviewImgTmp, $ReviewImgDir.$ReviewImgName);
    $connect -> query($sql);
?>
<script>
    location.href = "mypage.php";
</script>