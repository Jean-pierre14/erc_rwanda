const form = document.querySelector(".myForm"),
    errorText = document.querySelector(".error-text"),
    buttonSubmit = document.querySelector(".registerAdmin");

form.onsubmit = (e) => {
    e.preventDefault();
}

buttonSubmit.onclick = () => {
    // Start Ajax
    let xhr = new XMLHttpRequest();

    xhr.open("POST", "../../backend/newAdmin.php", true);

    xhr.onload = () => {

        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data == 'success') {
                    location.href = './register.php';
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