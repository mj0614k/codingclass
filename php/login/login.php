<!-- 로그인 가입 팝업 -->
<div class="login__popup">
    <div class="login__inner">
        <div class="login__header">
            <h3>로그인</h3>
        </div>
        <div class="login__contents">
                <form name="login" action="../login/loginSave.php" method="post">
                    <fieldset>
                        <legend>로그인 입력 폼</legend>
                    <div>
                        <label for="youEmail">이메일</label>
                        <input
                            class="input__style"
                            type="email"
                            name="youEmail"
                            id="youEmail"
                            placeholder="이메일"
                            required
                        />
                    </div>
                    <div>
                        <label for="youPass">비밀번호</label>
                        <input
                            class="input__style"
                            type="password"
                            name="youPass"
                            id="youPass"
                            placeholder="비밀번호"
                            required
                        />
                    </div>
                    <button type="submit" class="input__button">로그인</button>
                </fieldset>
            </form>
        </div>
        <div class="login__footer">
            <div class="btn">
                <a href="#">회원가입</a>
                <a href="#">아이디 찾기</a>
                <a href="#">비밀번호 찾기</a>
            </div>
            <ul class="desc">
                <li>비밀번호 분실 시 알아서 찾으시면 됩니다.</li>
                <li>회원가입을 하시면 정보를 중국으로 전달해 드립니다.</li>
                <li>회원가입 시 발생한 일에 대하여 어떠한 책임도 지지 않습니다.</li>
            </ul>
            <button type="button" class="btn-close"><span>닫기</span></button>
        </div>
    </div>
</div>