<!-- 
    1. 번호
    2. 전시이름
    3. 작가이름( 대표 혹은 단체이름 )
    4. 작가이름 영어로
    5. 메인이미지 ( 680 x 340 )

    6. 전시기간 - 시작날짜 ( 0000.00.00 )
    7. 전시기간 - 끝나는날짜 ( 0000.00.00 )
    8. 상세정보 이미지1 ( width : 1160 )
    9. 주제
    10. 설명

    11. 작가1 이름
    12. 작가1 이름 영어로
    13. 작가1 작품
    14. 작가1 작품사진
    15. 작가1 작품설명
    16. 작가1 소개사진( 모달창 )
    17. 작가1 소개설명( 모달창 )
    18. 작가1 프로필사진 ( 330 x 460 )

    19. 작가2 이름
    20. 작가2 이름 영어로
    21. 작가2 작품
    22. 작가2 작품사진
    23. 작가2 작품설명
    24. 작가2 소개사진( 모달창 )
    25. 작가2 소개설명( 모달창 )
    26. 작가2 프로필사진 ( 330 x 460 )

    27. 작가3 이름
    28. 작가3 이름 영어로
    29. 작가3 작품
    30. 작가3 작품사진
    31. 작가3 작품설명
    32. 작가3 소개사진( 모달창 )
    33. 작가3 소개설명( 모달창 )
    34. 작가3 프로필사진 ( 330 x 460 )

    35. 상세정보 사진 ( 664 x 750 )
    36. 장소
    37. 관람시간
    38. 연령
    39. 입장권 링크
    40. 휴관일
    41. 연락처

    42. 카테고리1
    43. 카테고리2
 -->

 <?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE myExhibition (";
    $sql .= "myExhibitionID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "ExhibitionTitle varchar(50) NOT NULL,";
    $sql .= "ExhibitionArtist varchar(50) NOT NULL,";
    $sql .= "ExhibitionArtistEng varchar(50) NOT NULL,";
    $sql .= "MainImgFile varchar(100) NOT NULL,";
    $sql .= "StartDate varchar(10) DEFAULT Null,";
    $sql .= "EndDate varchar(10) DEFAULT Null,";
    $sql .= "SubImgFile varchar(100) NOT NULL,";
    $sql .= "MainTitle varchar(50) NOT NULL,";
    $sql .= "MainDesc longtext NOT NULL,";

    //11.

    $sql .= "Artist1Name varchar(20) NOT NULL,";
    $sql .= "Artist1Eng varchar(20) NOT NULL,";
    $sql .= "Artist1WorkName varchar(50) NOT NULL,";
    $sql .= "Artist1WorkPhoto varchar(100) NOT NULL,";
    $sql .= "Artist1WorkDesc longtext NOT NULL,";
    $sql .= "Artist1ModalPhoto varchar(100) NOT NULL,";
    $sql .= "Artist1ModalDesc longtext NOT NULL,";
    $sql .= "Artist1Photo varchar(100) NOT NULL,";

    //19.

    $sql .= "Artist2Name varchar(20) NOT NULL,";
    $sql .= "Artist2Eng varchar(20) NOT NULL,";
    $sql .= "Artist2WorkName varchar(50) NOT NULL,";
    $sql .= "Artist2WorkPhoto varchar(100) NOT NULL,";
    $sql .= "Artist2WorkDesc longtext NOT NULL,";
    $sql .= "Artist2ModalPhoto varchar(100) NOT NULL,";
    $sql .= "Artist2ModalDesc longtext NOT NULL,";
    $sql .= "Artist2Photo varchar(100) NOT NULL,";

    //27.

    $sql .= "Artist3Name varchar(20) NOT NULL,";
    $sql .= "Artist3Eng varchar(20) NOT NULL,";
    $sql .= "Artist3WorkName varchar(50) NOT NULL,";
    $sql .= "Artist3WorkPhoto varchar(100) NOT NULL,";
    $sql .= "Artist3WorkDesc longtext NOT NULL,";
    $sql .= "Artist3ModalPhoto varchar(100) NOT NULL,";
    $sql .= "Artist3ModalDesc longtext NOT NULL,";
    $sql .= "Artist3Photo varchar(100) NOT NULL,";

    //35.
    $sql .= "DetailImgFile varchar(100) NOT NULL,";
    $sql .= "Location varchar(70) NOT NULL,";
    $sql .= "ViewTime varchar(50) NOT NULL,";
    $sql .= "ViewAge varchar(10) DEFAULT Null,";
    $sql .= "AdLink varchar(100) NOT NULL,";
    $sql .= "Closed varchar(50) NOT NULL,";
    $sql .= "Contact varchar(30) NOT NULL,";
    $sql .= "Category1 varchar(10) NOT NULL,";
    $sql .= "Category2 varchar(10) NOT NULL,";

    $sql .= "PRIMARY KEY (myExhibitionID)";
    $sql .= ")charset=utf8;";

    $connect -> query($sql);

?>