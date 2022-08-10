const form = document.querySelector(".signup form"),
    errorText = document.querySelector('.error-txt'),
    contnueBtn = document.querySelector(".button button");

form.onsubmit = (e) => {

    e.preventDefault();

}

contnueBtn.onclick = () => {
    // Start Ajax
    let xhr = new XMLHttpRequest();

    xhr.open("POST", "./backend/signup.php", true);

    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data == 'success') {
                    location.href = 'users.php';
                } else {
                    errorText.style.display = 'block';
                    errorText.textContent = data;
                }
            }
        }
    }

    let formDate = new FormData(form);
    xhr.send(formDate);
}