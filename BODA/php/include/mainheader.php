<div class="mainEffect">
    <header id="header" class="header__container">
        <div class="header__area overlay headerEffect">
            <div class="header__logo">
                <a href="main.php">BODA</a>
            </div>
            <div class="header__menu">
                <ul>
                    <li>
                        <a class="main__menu" href="../exhibition/current.php">EXHIBITION</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a class="main__menu" href="../search/search01.php">SEARCH</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a class="main__menu" href="../community/Review.php">COMMUNITY</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a class="main__menu" href="../notice/notice.php">NOTICE</a>
                    </li>
                </ul>
            </div>
            <div class="subMenu hide">
                <ul class="sub">
                    <li><a href="../exhibition/current.php">현재전시</a></li>
                    <li><a href="../exhibition/upcomming.php">예정전시</a></li>
                    <li><a href="../exhibition/last.php">지난전시</a></li>
                </ul>
                <ul class="sub">
                    <li><a href="../search/search01.php">키워드별 검색</a></li>
                </ul>
                <ul class="sub">
                    <li><a href="../community/Review.php">REVIEW</a></li>
                    <li><a href="../community/Talk.php">TALK</a></li>
                </ul>
                <ul class="sub">
                    <li><a href="../notice/notice.php">NOTICE</a></li>
                    <li><a href="../notice/FAQ.php">FAQ</a></li>
                </ul>
            </div>
            <div class="header__right">
                <a class="search" href="#">
                    <svg width="22" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.7261 18.239H19.4162L18.952 17.7913C20.5769 15.9011 21.5552 13.4471 21.5552 10.7776C21.5552 4.82504 16.7301 0 10.7776 0C4.82504 0 0 4.82504 0 10.7776C0 16.7301 4.82504 21.5552 10.7776 21.5552C13.4471 21.5552 15.9011 20.5769 17.7913 18.952L18.239 19.4162V20.7261L25.391 27.8638C25.7937 28.2658 25.9951 28.4667 26.2279 28.5402C26.424 28.602 26.6345 28.6019 26.8306 28.5399C27.0633 28.4662 27.2644 28.265 27.6667 27.8627L27.8627 27.6667C28.265 27.2644 28.4662 27.0633 28.5399 26.8306C28.6019 26.6345 28.602 26.424 28.5402 26.2279C28.4667 25.9951 28.2658 25.7937 27.8638 25.391L20.7261 18.239ZM10.7776 18.239C6.64894 18.239 3.31618 14.9062 3.31618 10.7776C3.31618 6.64894 6.64894 3.31618 10.7776 3.31618C14.9062 3.31618 18.239 6.64894 18.239 10.7776C18.239 14.9062 14.9062 18.239 10.7776 18.239Z" fill="#323232" />                    
                    </svg>
                </a>
                <svg class="ham" width="35" height="32" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d ="M6.25 5.94922H33.75M6.25 15.8979H33.7 8M6.25 25.8467H33.75"stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <svg class="ham__close blind" width="20" height="23" viewBox="0 0 29 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 31L27.9483 1M27.9483 31L1 1" stroke="#323232" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <svg class="ham__mobile" width="35" height="32" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d ="M6.25 5.94922H33.75M6.25 15.8979H33.7 8M6.25 25.8467H33.75"stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <svg class="ham__mobile__close blind" width="20" height="23" viewBox="0 0 29 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 31L27.9483 1M27.9483 31L1 1" stroke="#323232" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <div class="smallmenu blind">
                <?php if (isset($_SESSION['myMemberID'])) { ?>
                    <li><a href="../login/logout.php">LOGOUT</a></li>
                    <li><a href="../mypage/mypage__main.php">MYPAGE</a></li>
                <?php } else { ?>
                    <li><a href="#" id="login__btn">LOGIN</a></li>
                    <li><a href="../login/agree.php">SIGN UP</a></li>
                <?php } ?>
                <div class="mobilemenu">
                    <li>
                        <a href="../exhibition/current.php">EXHIBITION</a>
                        <ul>
                            <li><a href="../exhibition/current.php">현재전시</a></li>
                            <li><a href="../exhibition/upcomming.php">예정전시</a></li>
                            <li><a href="../exhibition/last.php">지난전시</a></li>
                        </ul>
                    </li>
                    <li><a href="../search/search01.php">SEARCH</a>
                        <ul>
                            <li><a href="../search/search01.php">키워드별 검색</a></li>
                        </ul>
                    </li>
                    <li><a class="main__menu" href="../community/Review.php">COMMUNITY</a>
                        <ul>
                            <li><a href="../community/Review.php">REVIEW</a></li>
                            <li><a href="../community/Talk.php">TALK</a></li>
                        </ul>
                    </li>
                    <li><a href="../notice/notice.php">NOTICE</a>
                        <ul>
                            <li><a href="../notice/notice.php">NOTICE</a></li>
                            <li><a href="../notice/FAQ.php">FAQ</a></li></li>
                        </ul>
                    </li>
                    <ul class="small">
                    <?php if (isset($_SESSION['myMemberID'])) { ?>
                        <li><a href="../login/logout.php">LOGOUT</a></li>
                        <li><a href="../mypage/mypage__main.php">MYPAGE</a></li>
                    <?php } else { ?>
                        <li><a href="../login/loginmobile.php">LOGIN</a></li>
                        <li><a href="../login/agree.php">SIGN UP</a></li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>
                </div>