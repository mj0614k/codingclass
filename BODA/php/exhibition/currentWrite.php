<h3>파일은 무족권 jpg다...</h3>


<form action="currentWriteSave.php" name="CurrentWrite" method="post" enctype="multipart/form-data">
    <fieldset>
        <div>
            <input type="text" name="ExhibitionTitle" id="ExhibitionTitle" class="Title" placeholder="2. 전시제목" required>
            <input type="text" name="ExhibitionArtist" id="ExhibitionArtist" class="Title" placeholder="3. 작가이름(대표 혹은 단체이름)" required>
            <input type="text" name="ExhibitionArtistEng" id="ExhibitionArtistEng" class="Title" placeholder="4. 작가이름(영어로)" required>
            <div>
            5. 메인이미지 ( 680 x 340 )    
                <input type="file" class="" name="MainImgFile" id="MainImgFile" accept=".jpg, .jpeg, .png, .gif">
            </div>
            <input type="text" name="StartDate" id="StartDate" class="Title" placeholder="6. 전시기간 - 시작날짜 (0000.00.00)" required>
            <input type="text" name="EndDate" id="EndDate" class="Title" placeholder="7. 전시기간 - 종료날짜 (0000.00.00)" required>
            <div>
                8. 상세정보 이미지 ( width 1160 )
                <input type="file" class="" name="SubImgFile" id="SubImgFile" accept=".jpg, .jpeg, .png, .gif" placeholder="8. 상세정보 이미지1(width: 1160)">
            </div>
            <input type="text" name="MainTitle" id="MainTitle" class="Title" placeholder="9. 주제" required>
            <input type="text" name="MainDesc" id="MainDesc" class="Title" placeholder="10. 설명" required>
        </div>

        <br>
        <br>
        
        <div>
            <input type="text" name="Artist1Name" id="Artist1Name" class="Title" placeholder="11. 작가1이름" required>
            <input type="text" name="Artist1Eng" id="Artist1Eng" class="Title" placeholder="12. 작가1이름 영어로" required>
            <input type="text" name="Artist1WorkName" id="Artist1WorkName" class="Title" placeholder="13. 작가1 작품이름" required>
            <div>
            14. 작가1 작품사진
                <input type="file" class="" name="Artist1WorkPhoto" id="Artist1WorkPhoto" accept=".jpg, .jpeg, .png, .gif">
            </div>
            <textarea name="Artist1WorkDesc" id="Artist1WorkDesc" class="Contents" rows="5" placeholder="15. 작가1 작품설명"required></textarea>
            <div>
            16. 작가1 소개사진(모달창)
                <input type="file" class="" name="Artist1ModalPhoto" id="Artist1ModalPhoto" accept=".jpg, .jpeg, .png, .gif">
            </div>
            <textarea name="Artist1ModalDesc" id="Artist1ModalDesc" class="Contents" rows="5" placeholder="17. 작가1 소개설명(모달창)"required></textarea>
            <div>
            18. 작가1 프로필사진 ( 330 x 460 )
                <input type="file" class="" name="Artist1Photo" id="Artist1Photo" accept=".jpg, .jpeg, .png, .gif">
            </div>
        </div>

        <div>
            <input type="text" name="Artist2Name" id="Artist2Name" class="Title" placeholder="19. 작가2이름" required>
            <input type="text" name="Artist2Eng" id="Artist2Eng" class="Title" placeholder="20. 작가2이름 영어로" required>
            <input type="text" name="Artist2WorkName" id="Artist2WorkName" class="Title" placeholder="21. 작가2 작품이름" required>
            <div>
            22. 작가2 작품사진
                <input type="file" class="" name="Artist2WorkPhoto" id="Artist2WorkPhoto" accept=".jpg, .jpeg, .png, .gif">
            </div>
            <textarea name="Artist2WorkDesc" id="Artist2WorkDesc" class="Contents" rows="5" placeholder="23. 작가2 작품설명"required></textarea>
            <div>
            24. 작가2 소개사진(모달창)
                <input type="file" class="" name="Artist2ModalPhoto" id="Artist2ModalPhoto" accept=".jpg, .jpeg, .png, .gif">
            </div>
            <textarea name="Artist2ModalDesc" id="Artist2ModalDesc" class="Contents" rows="5" placeholder="25. 작가2 소개설명(모달창)"required></textarea>
            <div>
            26. 작가2 프로필사진 ( 330 x 460 )
                <input type="file" class="" name="Artist2Photo" id="Artist2Photo" accept=".jpg, .jpeg, .png, .gif">
            </div>
        </div>

        <div>
            <input type="text" name="Artist3Name" id="Artist3Name" class="Title" placeholder="27. 작가3이름" required>
            <input type="text" name="Artist3Eng" id="Artist3Eng" class="Title" placeholder="28. 작가3이름 영어로" required>
            <input type="text" name="Artist3WorkName" id="Artist3WorkName" class="Title" placeholder="29. 작가3 작품이름" required>
            <div>
            30. 작가3 작품사진
                <input type="file" class="" name="Artist3WorkPhoto" id="Artist3WorkPhoto" accept=".jpg, .jpeg, .png, .gif">
            </div>
            <textarea name="Artist3WorkDesc" id="Artist3WorkDesc" class="Contents" rows="5" placeholder="31. 작가3 작품설명"required></textarea>
            <div>
            32. 작가3 소개사진(모달창)
                <input type="file" class="" name="Artist3ModalPhoto" id="Artist3ModalPhoto" accept=".jpg, .jpeg, .png, .gif">
            </div>
            <textarea name="Artist3ModalDesc" id="Artist3ModalDesc" class="Contents" rows="5" placeholder="33. 작가3 소개설명(모달창)"required></textarea>
            <div>
            34. 작가3 프로필사진 ( 330 x 460 )
                <input type="file" class="" name="Artist3Photo" id="Artist3Photo" accept=".jpg, .jpeg, .png, .gif">
            </div>
        </div>
        
        <div>
        <div>
            35. 상세정보 사진 ( 664 x 750 )
                <input type="file" class="" name="DetailImgFile" id="DetailImgFile" accept=".jpg, .jpeg, .png, .gif">
            </div>
            <p>주소 아니고 장소다... 명심해</p>
        <input type="text" name="Location" id="Location" class="Title" placeholder="36. 장소" required>
            <textarea type="text" name="ViewTime" id="ViewTime" class="Title" row="2" placeholder="37. 관람시간" required></textarea>
            <input type="text" name="ViewAge" id="ViewAge" class="Title" placeholder="38. 연령" required>
            <input type="text" name="AdLink" id="AdLink" class="Title" placeholder="39. 입장권 링크" required>
            <textarea type="text" name="Closed" id="Closed" class="Title" placeholder="40. 휴관일" required></textarea>
            <input type="text" name="Contact" id="Contact" class="Title" placeholder="41. 연락처(031-1234-1234)" required>
            <input type="text" name="Category1" id="Category1" class="Title" placeholder="42. 카테고리1" required>
            <input type="text" name="Category2" id="Category2" class="Title" placeholder="43. 카테고리2" required>
        </div>
        <button type="submit" value="저장">저장</button>
    </fieldset>
</form>