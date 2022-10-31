<?php

    include "../connect/connect.php";
    include "../connect/session.php";

    $ExhibitionTitle = $_POST['ExhibitionTitle'];
    $ExhibitionArtist = $_POST['ExhibitionArtist'];
    $ExhibitionArtistEng = $_POST['ExhibitionArtistEng'];
    $StartDate = $_POST['StartDate'];
    $EndDate = $_POST['EndDate'];
    $MainTitle = $_POST['MainTitle'];
    $MainDesc = $_POST['MainDesc'];

    $Artist1Name = $_POST['Artist1Name'];
    $Artist1Eng = $_POST['Artist1Eng'];
    $Artist1WorkName = $_POST['Artist1WorkName'];
    $Artist1WorkDesc = $_POST['Artist1WorkDesc'];
    $Artist1ModalDesc = $_POST['Artist1ModalDesc'];

    $Artist2Name = $_POST['Artist2Name'];
    $Artist2Eng = $_POST['Artist2Eng'];
    $Artist2WorkName = $_POST['Artist2WorkName'];
    $Artist2WorkDesc = $_POST['Artist2WorkDesc'];
    $Artist2ModalDesc = $_POST['Artist2ModalDesc'];
    
    $Artist3Name = $_POST['Artist3Name'];
    $Artist3Eng = $_POST['Artist3Eng'];
    $Artist3WorkName = $_POST['Artist3WorkName'];
    $Artist3WorkDesc = $_POST['Artist3WorkDesc'];
    $Artist3ModalDesc = $_POST['Artist3ModalDesc'];

    $Location = $_POST['Location'];
    $ViewTime = $_POST['ViewTime'];
    $ViewAge = $_POST['ViewAge'];
    $AdLink = $_POST['AdLink'];
    $Closed = $_POST['Closed'];
    $Contact = $_POST['Contact'];
    $Category1 = $_POST['Category1'];
    $Category2 = $_POST['Category2'];

    $MainImgFile = $_FILES['MainImgFile'];
    $SubImgFile = $_FILES['SubImgFile'];
    $Artist1WorkPhoto = $_FILES['Artist1WorkPhoto'];
    $Artist1ModalPhoto = $_FILES['Artist1ModalPhoto'];
    $Artist1Photo = $_FILES['Artist1Photo'];
    $Artist2WorkPhoto = $_FILES['Artist2WorkPhoto'];
    $Artist2ModalPhoto = $_FILES['Artist2ModalPhoto'];
    $Artist2Photo = $_FILES['Artist2Photo'];
    $Artist3WorkPhoto = $_FILES['Artist3WorkPhoto'];
    $Artist3ModalPhoto = $_FILES['Artist3ModalPhoto'];
    $Artist3Photo = $_FILES['Artist3Photo'];
    $DetailImgFile = $_FILES['DetailImgFile'];

    $MainImgFileType = $_FILES['MainImgFile']['type'];
    $SubImgFileType = $_FILES['SubImgFile']['type'];
    $Artist1WorkPhotoType = $_FILES['Artist1WorkPhoto']['type'];
    $Artist1ModalPhotoType = $_FILES['Artist1ModalPhoto']['type'];
    $Artist1PhotoType = $_FILES['Artist1Photo']['type'];
    $Artist2WorkPhotoType = $_FILES['Artist2WorkPhoto']['type'];
    $Artist2ModalPhotoType = $_FILES['Artist2ModalPhoto']['type'];
    $Artist2PhotoType = $_FILES['Artist2Photo']['type'];
    $Artist3WorkPhotoType = $_FILES['Artist3WorkPhoto']['type'];
    $Artist3ModalPhotoType = $_FILES['Artist3ModalPhoto']['type'];
    $Artist3PhotoType = $_FILES['Artist3Photo']['type'];
    $DetailImgFileType = $_FILES['DetailImgFile']['type'];

    $MainImgFileName = $_FILES['MainImgFile']['name'];
    $SubImgFileName = $_FILES['SubImgFile']['name'];
    $Artist1WorkPhotoName = $_FILES['Artist1WorkPhoto']['name'];
    $Artist1ModalPhotoName = $_FILES['Artist1ModalPhoto']['name'];
    $Artist1PhotoName = $_FILES['Artist1Photo']['name'];
    $Artist2WorkPhotoName = $_FILES['Artist2WorkPhoto']['name'];
    $Artist2ModalPhotoName = $_FILES['Artist2ModalPhoto']['name'];
    $Artist2PhotoName = $_FILES['Artist2Photo']['name'];
    $Artist3WorkPhotoName = $_FILES['Artist3WorkPhoto']['name'];
    $Artist3ModalPhotoName = $_FILES['Artist3ModalPhoto']['name'];
    $Artist3PhotoName = $_FILES['Artist3Photo']['name'];
    $DetailImgFileName = $_FILES['DetailImgFile']['name'];
    
    $MainImgFileTmp = $_FILES['MainImgFile']['tmp_name'];
    $SubImgFileTmp = $_FILES['SubImgFile']['tmp_name'];
    $Artist1WorkPhotoTmp = $_FILES['Artist1WorkPhoto']['tmp_name'];
    $Artist1ModalPhotoTmp = $_FILES['Artist1ModalPhoto']['tmp_name'];
    $Artist1PhotoTmp = $_FILES['Artist1Photo']['tmp_name'];
    $Artist2WorkPhotoTmp = $_FILES['Artist2WorkPhoto']['tmp_name'];
    $Artist2ModalPhotoTmp = $_FILES['Artist2ModalPhoto']['tmp_name'];
    $Artist2PhotoTmp = $_FILES['Artist2Photo']['tmp_name'];
    $Artist3WorkPhotoTmp = $_FILES['Artist3WorkPhoto']['tmp_name'];
    $Artist3ModalPhotoTmp = $_FILES['Artist3ModalPhoto']['tmp_name'];
    $Artist3PhotoTmp = $_FILES['Artist3Photo']['tmp_name'];
    $DetailImgFileTmp = $_FILES['DetailImgFile']['tmp_name'];



INSERT INTO `myExhibition`(`ExhibitionTitle`, `ExhibitionArtist`, `ExhibitionArtistEng`, `MainImgFile`, `StartDate`, `EndDate`, `SubImgFile`, `MainTitle`, `MainDesc`, `Artist1Name`, `Artist1Eng`, `Artist1WorkName`, `Artist1WorkPhoto`, `Artist1WorkDesc`, `Artist1ModalPhoto`, `Artist1ModalDesc`, `Artist1Photo`, `Artist2Name`, `Artist2Eng`, `Artist2WorkName`, `Artist2WorkPhoto`, `Artist2WorkDesc`, `Artist2ModalPhoto`, `Artist2ModalDesc`, `Artist2Photo`, `Artist3Name`, `Artist3Eng`, `Artist3WorkName`, `Artist3WorkPhoto`, `Artist3WorkDesc`, `Artist3ModalPhoto`, `Artist3ModalDesc`, `Artist3Photo`, `DetailImgFile`, `Location`, `ViewTime`, `ViewAge`, `AdLink`, `Closed`, `Contact`, `Category1`, `Category2`)
VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]','[value-18]','[value-19]','[value-20]','[value-21]','[value-22]','[value-23]','[value-24]','[value-25]','[value-26]','[value-27]','[value-28]','[value-29]','[value-30]','[value-31]','[value-32]','[value-33]','[value-34]','[value-35]','[value-36]','[value-37]','[value-38]','[value-39]','[value-40]','[value-41]','[value-42]','[value-43]')
?>




<?php
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
                $sql = "INSERT INTO myReview(myMemberID, ReviewTitle, ReviewContents, ReviewLike, ReviewImgFile, ReviewImgSize, ReviewView, ReviewregTime)
                VALUES('$myMemberID', '$ReviewTitle', '$ReviewContents', '0', '$ReviewImgName', '$ReviewImgSize', '$ReviewView', '$ReviewregTime')";
            } else {
                echo "<script>alert('jpg, jpeg, png, gif 파일만 첨부할 수 있습니다.'); history.back(1)</script>";
            }
        }
    } else {
        // echo "이미지 파일이 첨부되지 않았습니다.";
        $sql = "INSERT INTO myReview(myMemberID, ReviewTitle, ReviewContents, ReviewLike, ReviewImgFile, ReviewImgSize, ReviewView, ReviewregTime)
        VALUES('$myMemberID', '$ReviewTitle', '$ReviewContents', '0', 'Img_default.jpg', '$blogImgSize', '$ReviewView', '$ReviewregTime')";
    }

    $result = $connect -> query($sql);
    $result = move_uploaded_file($ReviewImgTmp, $ReviewImgDir.$ReviewImgName);
?>

<script>
    location.href = "Review.php";
</script>