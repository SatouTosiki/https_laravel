document.addEventListener('DOMContentLoaded', function() {
    let optionCount = 1;

    // 初期のボタンにイベントを設定
    UserChoiceImg('image_1', document.querySelector('.fileButton'));

    function addOption() {
        if (optionCount >= 4) {
            alert('選択肢は4つまでです。');
            return;
        }
        optionCount++;

        const optionDiv = document.createElement('div');
        optionDiv.classList.add('option');
        optionDiv.innerHTML = `
            <div>
                <input type="file" id="image_${optionCount}" name="img${optionCount}" multiple accept="image/*" style="display:none" >
                <button class="fileButton" type="button">
                    <span class="button_text">画像必須</span>
                    <span class="button_icon">
                        <ion-icon name="add-circle-outline"></ion-icon>
                    </span>
                </button>
            </div>
            <div class="textStyle">
                <input type="text"  id="text_${optionCount}" name="text${optionCount}" placeholder="タイトル" required>
            </div>
        `;
        document.getElementById('options').appendChild(optionDiv);

        // 新しく追加されたボタンにイベントを設定
        //この行でUserChoiceImg関数を動かしている
        UserChoiceImg(`image_${optionCount}`, optionDiv.querySelector('.fileButton'));
        console.log(optionCount);
    }

    function UserChoiceImg(inputId, fileSelectButton) {
        const fileInput = document.getElementById(inputId);

        fileSelectButton.addEventListener('click', function() {
            fileInput.click();
        });

        fileInput.addEventListener('change', function() {
            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();//FileReaderは画像を読み込むためのメソッドらしい
                reader.onload = function(e) {
                    fileSelectButton.innerHTML = `<img src="${e.target.result}" alt="選択した画像" class="button_img" id="img_${optionCount}" >`;//ここで選んだ画像を表示している
                }
                reader.readAsDataURL(fileInput.files[0]);
            }
        });
    }

    window.addOption = addOption; // addOption関数をグローバルに公開
});
