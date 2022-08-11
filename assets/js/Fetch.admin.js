const newsList = document.querySelector(".news-list")

function Fetch() {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../../backend/FetchAdmin.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                newsList.innerHTML = data;
            }
        }
    }

    xhr.send();
}

setInterval(() => {
    Fetch();
}, 500);