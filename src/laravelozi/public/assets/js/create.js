let optionCount =1;
        function addOption() {
            if (optionCount >= 4) {
                alert('選択肢は4つまでです。');
                return;
            }
            optionCount++;
            const optionDiv = document.createElement('div');
            optionDiv.classList.add('option');
            optionDiv.innerHTML = `
                <input type="file" id="image_${optionCount}" name="options[${optionCount - 1}][image]" required>
                
                <input type="text" id="text_${optionCount}" name="options[${optionCount - 1}][text]" required>
            `;
            document.getElementById('options').appendChild(optionDiv);
        }