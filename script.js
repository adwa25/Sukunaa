document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    form.addEventListener("submit", function (e) {
        e.preventDefault();
        const nominal = document.getElementById("nominal").value;
        const formdata = new FormData();
        formdata.append("nominal", nominal);
        fetch("payment.php", {
            method: "POST",
            body: formdata,
        })
            .then((response) => response.text())
            .then((data) => console.log(data))
            .catch((error) => console.error(error));
    });
});