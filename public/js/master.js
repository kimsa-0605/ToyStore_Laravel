document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        let errorMessages = document.querySelectorAll(".error-message");
        errorMessages.forEach(error => error.innerHTML = "");
    }, 8000);
});