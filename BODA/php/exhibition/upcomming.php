<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <?php include "../include/link.php" ?>
    <title>예정전시 페이지</title>
</head>
<body>
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">콘텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>
<?php include "../include/header.php" ?>
<?php include "../login/login.php" ?>
<!-- //header -->

<!-- main -->
<main id="main">
      <h2 class="blind">예정전시 게시판입니다.</h2>
      <div class="current__header container">
        <h2>
          예정전시 <span class="sp">예정된 전시를 확인할 수 있습니다.</span><a href="currentWrite.php">지옥의링크</a>
        </h2>
        <div class="current__home">
          <a class="current__home_iconBox" href="../main/main.php">
            <span class="current__home_icon"></span>
          </a>
          <span>EXHIBITION</span>
        </div>
      </div>
      <section class="current__inner container">
<?php 
$today = date("Y-m-d");
$todaydate = strtotime($today);

$ExhibitionSql = "SELECT * FROM myExhibition WHERE (StartDate > $todaydate) ORDER BY myExhibitionID DESC";
$ExhibitionResult = $connect -> query($ExhibitionSql);

    forEach($ExhibitionResult as $ExhibitionSql){ ?>

    <article class="current">
    <div class="current__h">
        <div class="current__title"><?=$ExhibitionSql['ExhibitionTitle']?></div>
        <p class="current__desc__one"><?=$ExhibitionSql['ExhibitionArtistEng']?></p>
        <p class="current__desc__two"><?=date('Y-m-d', $ExhibitionSql['StartDate'])?> - <?=date('Y-m-d', $ExhibitionSql['EndDate'])?></p>
        <a href="detail.php?myExhibitionID=<?=$ExhibitionSql['myExhibitionID']?>" class="current__box">view more</a>
    </div>
    <figure>
        <img src="../assets/img/Exhibition/<?=$ExhibitionSql['MainImgFile']?>" alt="이미지1" />
    </figure>
    </article>

<?php } ?>
        <div class="board__pages">
            <ul>
<?php
    $sql = "SELECT count(myExhibitionID) FROM myExhibition";
    $result = $connect -> query($sql);
    $viewNum = 5;

    $ExhibiCount = $result -> fetch_array(MYSQLI_ASSOC);
    $ExhibiCount = $ExhibiCount['count(myExhibitionID)'];

    $ExhibiCount = ceil($ExhibiCount / $viewNum);

    $pageCurrent = 5;
    $startPage = $page - $pageCurrent;
    $endPage = $page + $pageCurrent;

    // 처음 페이지 초기화
    if($startPage < 1) $startPage = 1;

    // 마지막 페이지 초기화
    if($endPage >= $ExhibiCount) $endPage = $ExhibiCount;

    // 이전 페이지, 처음 페이지 이동
    if($page != 1){
        $prevPage = $page - 1;
        echo "<li><a href='current.php?page=1'><svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
        <path d='M17.2498 18L11.2498 12L17.2498 6' stroke='#323232' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
        <path d='M11.25 18L5.25 12L11.25 6' stroke='#323232' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
        </svg></a></li>";
        echo "<li><a href='current.php?page={$prevPage}'><svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
        <path d='M14.25 6L8.25 12L14.25 18' stroke='#323232' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
        </svg></a></li>";
    }
    
    // 페이지 넘버 표시
    for($i=$startPage; $i<=$endPage; $i++){
        $active = "";
        if($i == $page) $active = "active";
        echo "<li ><a class='{$active}' href='current.php?page={$i}'>{$i}</a></li>";
    }
    
    // 다음 페이지, 마지막 페이지 이동
    if($page != $endPage){
        $nextPage = $page + 1;
        echo "<li><a href='current.php?page={$nextPage}'><svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
        <path d='M9 18L15 12L9 6' stroke='#323232' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
        </svg></a></li>";
        echo "<li><a href='current.php?page={$ExhibiCount}'><svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
        <path d='M6.75024 6L12.7502 12L6.75024 18' stroke='#323232' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
        <path d='M12.75 6L18.75 12L12.75 18' stroke='#323232' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
        </svg></a></li>";
    }
?>
            </ul>
        </div>
      </section>
    <!-- //main -->
    <a href="../login/agree.php"><div class="smalieAgree ir">btn</div></a>
    <div class="topBtn ir">top</div>
</main>
<!-- //main -->

<?php include "../include/footer.php" ?>
<!-- //footer -->
<?php include "../include/script.php" ?>
<!-- //login -->
</body>
</html>