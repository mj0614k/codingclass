<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $myFAQID = $_POST['myFAQID'];
    $FAQTitle = $_POST['FAQTitle'];
    $FAQSubTitle = $_POST['FAQSubTitle'];
    $FAQContents = $_POST['FAQContents'];

    $FAQTitle = $connect -> real_escape_string($FAQTitle);
    $FAQSubTitle = $connect -> real_escape_string($FAQSubTitle);
    $FAQContents = $connect -> real_escape_string($FAQContents);
    $FAQImgFile = $_FILES['FAQFile'];
    $FAQImgSize = $_FILES['FAQFile']['size'];
    $FAQImgType = $_FILES['FAQFile']['type'];
    $FAQImgName = $_FILES['FAQFile']['name'];
    $FAQImgTmp = $_FILES['FAQFile']['tmp_name'];

    echo $myFAQID;
    echo $FAQTitle;
    echo $FAQSubTitle;
    echo $FAQContents;
    echo $FAQImgName;

    if($FAQImgType){
        $fileTypeExtension = explode("/", $FAQImgType);
        $fileType = $fileTypeExtension[0];      //image
        $fileExtension = $fileTypeExtension[1]; //png
        //이미지 타입 확인
        if($fileType == "image"){
            if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                $FAQImgDir = "../assets/img/FAQ/";
                $FAQImgName = "Img_".time().rand(1,99999)."."."{$fileExtension}";
                // echo "이미지 파일이 맞네요!";
                // 이미지 파일
                $sql = "UPDATE myFAQ SET FAQTitle = '{$FAQTitle}', FAQSubTitle = '{$FAQSubTitle}', FAQContents = '{$FAQContents}', FAQImgFile = '{$FAQImgName}' WHERE myFAQID = '{$myFAQID}'";
            } else {
                echo "<script>alert('jpg, jpeg, png, gif 파일만 첨부할 수 있습니다.'); history.back(1)</script>";
            }
        }
    } else {
        // echo "이미지 파일이 첨부되지 않았습니다.";
        $sql = "UPDATE myFAQ SET FAQTitle = '{$FAQTitle}', FAQSubTitle = '{$FAQSubTitle}', FAQContents = '{$FAQContents}' WHERE myFAQID = '{$myFAQID}'";
    }
    //이미지 사이즈 확인
    if($FAQImgSize > 1000000){
        echo "<script>alert('이미지 용량이 1MB를 초과했습니다.'); history.back(1)</script>";
        exit;
    }

    $result = $connect -> query($sql);
    $result = move_uploaded_file($FAQImgTmp, $FAQImgDir.$FAQImgName);
?>

<script>
    // location.href = "FAQ.php";
</script>