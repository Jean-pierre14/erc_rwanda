const form = document.querySelector(".form form"),
    errorText = document.querySelector(".error-text"),
    LoginBtn = document.querySelector(".form .button button");

form.onsubmit = (e) => {
    e.preventDefault();
}

LoginBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./backend/login.php", true)
    xhr.onload = () => {
        if (xhr.readyState == XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response
                if (data === "success") {
                    location.href = "users.php";
                } else {
                    errorText.style.display = "block";
                    errorText.textContent = data;
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}