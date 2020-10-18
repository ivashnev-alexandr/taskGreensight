document.addEventListener('DOMContentLoaded', () => {
    let submitBtn = document.querySelector("[type='submit']");
    submitBtn.addEventListener('click', (event) => {
        event.preventDefault();
        let registerForm = document.forms.registerForm;
        let registerFormData = new FormData(registerForm);
        for(let [key, value] of registerFormData) {
            if (!value) {//если хоть одно пустое поле в форме, то не отправляем данные
                return false;
            }
        }
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'registerForm.php');
        xhr.send(registerFormData);
        let responseData = null;
        xhr.addEventListener('load', () => {
            if (xhr.status == 200) {
                responseData = JSON.parse(xhr.responseText);
                if (responseData.isRegistered) {
                    registerForm.style.display = 'none';
                }
                alert(responseData.message);
            }
        });
    });
});