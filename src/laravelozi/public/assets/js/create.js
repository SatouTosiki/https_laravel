document.addEventListener('DOMContentLoaded', function() {
    let optionCount = 1;

    // 初期のボタンにイベントを設定
    setFileInputListener('image_1', document.querySelector('.fileButton'));

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
                <input type="file" id="image_${optionCount}" name="options[${optionCount - 1}][image]" multiple accept="image/*" style="display:none" />
                <button class="fileButton" type="button">
                    <span class="button_text">画像</span>
                    <span class="button_icon">
                        <ion-icon name="add-circle-outline"></ion-icon>
                    </span>
                </button>
            </div>
            <div class="textStyle">
                <input type="text"  id="text_${optionCount}" name="options[${optionCount - 1}][text]" required>
            </div>
        `;
        document.getElementById('options').appendChild(optionDiv);

        // 新しく追加されたボタンにイベントを設定
        setFileInputListener(`image_${optionCount}`, optionDiv.querySelector('.fileButton'));
    }

    function setFileInputListener(inputId, fileSelectButton) {
        const fileInput = document.getElementById(inputId);

        fileSelectButton.addEventListener('click', function() {
            fileInput.click();
        });

        fileInput.addEventListener('change', function() {
            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    fileSelectButton.innerHTML = `<img src="${e.target.result}" alt="選択した画像" class="button_img">`;
                }
                reader.readAsDataURL(fileInput.files[0]);
            }
        });
    }

    window.addOption = addOption; // addOption関数をグローバルに公開
});
