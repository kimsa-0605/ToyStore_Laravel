import { postData, getData, putData, deleteData, showLoading, hideLoading } from "../service/apiClient.js";

let emailForm = document.getElementById('emailForm');
let otpForm = document.getElementById('otpForm');
let passwordForm = document.getElementById('passwordForm');

let emailButton = document.getElementById('input-email');
let otpButton = document.getElementById('input-otp');
let passwordButton = document.getElementById('input-password');

let emailError = document.getElementById('emailError');
let otpError = document.getElementById('otpError');
let passwordError = document.getElementById('passwordError');

emailButton.addEventListener('click', async function () {
    const email = document.getElementById('email').value;
    try {
        const data = await postData('/api/forgot-password', {'email': email});
        console.log(data);
        if (data.isSent) {
            emailForm.style.display = 'none';
            otpForm.style.display = 'block';
        } else {
            emailError.style.display = 'block';
            emailError.innerHTML = `${data.message}`;
        }
    } catch (error) {
        console.log(error);
        emailError.innerHTML = "An error occurred while sending the OTP.";
    }
});

otpButton.addEventListener('click', async function () {
    const otpInput = document.getElementById('otp').value;
    const email = document.getElementById('email').value;
    try {
        const data = await postData('/api/forgot-password/otp', { 'otp': otpInput, 'email': email });
        console.log(data)
        if (data.isCorrect) {
            otpForm.style.display = 'none';
            passwordForm.style.display = 'block';
        } else {
            otpError.style.display = 'block';
            otpError.innerHTML = `${data.response.data.message}`;
        }
    } catch (error) {
        otpError.innerHTML = "An error occurred while verifying the OTP.";
    }
});

passwordButton.addEventListener('click', async function () {
    const newPassword = document.getElementById('newPassword').value;
    if (!newPassword) {
        passwordError.textContent = "Please enter a new password.";
        return;
    }
    try {
        const data = await putData('/api/forgot-password', { 'password':newPassword });
        if (data.isSuccess) {
            window.location.href = '/login';
        } else {
            passwordError.style.display = 'block';
            passwordError.innerHTML = `${data.response.data.message}`;
        }
    } catch (error) {
        passwordError.innerHTML = "An error occurred while resetting the password.";
    }
});