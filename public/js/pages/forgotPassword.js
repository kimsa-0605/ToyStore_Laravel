document.getElementById('emailFormSubmit').addEventListener('submit', function(e) {
        e.preventDefault();  
        const email = document.getElementById('email').value;
        if (email.includes('@') && email.includes('.')) {
            document.getElementById('emailForm').style.display = 'none';  
            document.getElementById('otpForm').style.display = 'block';  
        } else {
            emailError.textContent = "Please enter a valid email address.";
        }
    });
    document.getElementById('otpFormSubmit').addEventListener('submit', function(e) {
        e.preventDefault();  
        document.getElementById('otpForm').style.display = 'none';
        document.getElementById('passwordForm').style.display = 'block';
    });
    document.querySelector('.icon-back').addEventListener('click', function() {
        const emailForm = document.getElementById('emailForm');
        const otpForm = document.getElementById('otpForm');
        const passwordForm = document.getElementById('passwordForm');
        if (emailForm.style.display !== 'none') {
            window.location.href = 'login';
        } else if (otpForm.style.display !== 'none') {
            otpForm.style.display = 'none';
            emailForm.style.display = 'block';
        } else if (passwordForm.style.display !== 'none') {
            passwordForm.style.display = 'none';
            otpForm.style.display = 'block';
        }
    });
    
    