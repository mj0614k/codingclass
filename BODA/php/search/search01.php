<?php 
    include "../connect/connect.php";
    include "../connect/session.php";

    $category = $_GET['category'];


    // $categoryCount = $categoryResult -> num_rows;

    // $today = date("Y-m-d");
    // $todaydate = strtotime($today);

    $ExhibitionSql = "SELECT * FROM myExhibition WHERE Category1 = '{$category}' OR Category2 = '{$category}' OR Category3 = '{$category}' ORDER BY myExhibitionID DESC";
    $ExhibitionResult = $connect -> query($ExhibitionSql);
    $ExhibitionInfo = $ExhibitionResult -> fetch_array(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <?php include "../include/link.php" ?>
    <title>KEYWORD SEARCH</title>
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

<main id="main">
    <h2 class="blind">서치 게시판</h2>
    <div class="current__header container">
        <h2>
            KEY WORD <span class="sp">원하는 키워드를 선택하여 검색할 수 있습니다.</span>
        </h2>
        <div class="current__home">
            <a class="current__home_iconBox" href="../main/main.php">
            <span class="current__home_icon"></span>
            </a>
            <span>Key Word</span>
        </div>
    </div>

    <div class="keyWordClickBox">
        <p>키워드를 클릭해보세요!</p>
        <span class="arrow_icon01"></span>
    </div>
    <!-- //keyWordClickBox -->

    <div class="keyword__wrap">
        <div class="keyword__inner">
            <a href="search01.php" class="keyword keyword__click" data-filter="전체"># 전체</a>
            <a href="search01.php?category=자연" class="keyword" data-filter="자연"># 자연</a>
            <a href="search01.php?category=다채로운" class="keyword" data-filter="다채로운"># 다채로운</a>
            <a href="search01.php?category=귀여운" class="keyword" data-filter="귀여운"># 귀여운</a>
            <a href="search01.php?category=화려한" class="keyword" data-filter="화려한"># 화려한</a>
        </div>
        <div class="keyword__inner">
            <a href="search01.php?category=여유로운" class="keyword" data-filter="여유로운"># 여유로운</a>
            <a href="search01.php?category=감성적인" class="keyword" data-filter="감성적인"># 감성적인</a>
            <a href="search01.php?category=트렌디한" class="keyword" data-filter="트렌디한"># 트렌디한</a>
            <a href="search01.php?category=심오한" class="keyword" data-filter="심오한"># 심오한</a>
            <a href="search01.php?category=무료" class="keyword" data-filter="무료"># 무료</a>
        </div>
        <!-- <div class="keyword__inner">
            <button class="keyword keyword__click" data-filter="전체"># 전체</button>
            <button class="keyword" data-filter="자연"># 자연</button>
            <button class="keyword" data-filter="다채로운"># 다채로운</button>
            <button class="keyword" data-filter="귀여운"># 귀여운</button>
            <button class="keyword" data-filter="연인과"># 연인과</button>
        </div>
        <div class="keyword__inner">
            <button class="keyword" data-filter="여유로운"># 여유로운</button>
            <button class="keyword" data-filter="감성적인"># 감성적인</button>
            <button class="keyword" data-filter="트렌디한"># 트렌디한</button>
            <button class="keyword" data-filter="무료"># 무료</button>
            <button class="keyword" data-filter="어린이"># 어린이</button>
        </div> -->
    </div>
    <div class="kewordResult__wrap">
        <div class="kewordResult__inner mid__container">
            <h2>Result</h2>
            <div class="keyword__imgBox__inner">
<?php foreach($ExhibitionResult as $exhibi){ ?>
                <div class="keyword__imgBox">
                    <figure class="keyword__img">
                        <a href="../exhibition/detail.php"><img src="../assets/img/Exhibition/<?=$exhibi['DetailImgFile']?>" alt="전시 이미지">
                        <div class="keword__desc">
                            <p># <?=$exhibi['Category1']?></p>
                            <p># <?=$exhibi['Category2']?></p>
                        </div>
                        </a>
                    </figure>
                    <h3><?=$exhibi['ExhibitionTitle']?></h3>
                </div>
<?php } ?>
            </div>
        </div>
        <!-- <div class="board__pages keyword__page">
            <ul>
                <li><a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.2498 18L11.2498 12L17.2498 6" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11.25 18L5.25 12L11.25 6" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></a></li>
                <li><a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.25 6L8.25 12L14.25 18" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        </a></li>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18L15 12L9 6" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></a></li>
                <li><a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.75024 6L12.7502 12L6.75024 18" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12.75 6L18.75 12L12.75 18" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></a></li>
            </ul>
        </div>
        //page
    </div> -->


    <div class="topBtn ir">top</div>
</main>
<!-- //main -->

<?php include "../include/footer.php" ?>
<!-- //footer -->
<?php include "../include/script.php" ?>
<!-- //login -->
<script>
</script>
</body>
</html>