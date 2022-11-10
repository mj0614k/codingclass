<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    // 변수 설정
    $type = $_POST['type'];

    // 쿼리문 생성
    // $sql = "SELECT youEmail, youNickName FROM myAdminMember WHERE youEmail = '{$youEmail}'";
    // $sql = "SELECT youEmail, youNickName FROM myAdminMember WHERE youNickName = '{$youNickName}'";

    $sql = "SELECT youNickName FROM myMember ";
    
    if($type == "nickCheck"){
        $youNickName = $connect -> real_escape_string(trim($_POST['youNickName']));
        $sql .= "WHERE youNickName = '{$youNickName}'";
    }

    $result = $connect -> query($sql);
    $jsonResult = "bad";

    // 데이터 유무 확인
    if($result -> num_rows == 0){
        $jsonResult = "good";
    }

    echo json_encode(array("result" => $jsonResult));
?>