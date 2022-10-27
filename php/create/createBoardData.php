<?php
    include "../connect/connect.php";

    for($i=1; $i<=500; $i++){
        $regTime = time();

        $sql = "INSERT INTO myBoard(myMemberID, boardTitle, boardContents, boardView, regTime)
        VALUES('1', '게시판 제목${i}입니다.', '게시판 콘텐츠${i}입니다.', '1', 'regTime')";
        $connect -> query($sql);
    }
?>