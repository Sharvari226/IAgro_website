document.getElementById('createAccountForm').onsubmit = function(event) {
    const phone = document.getElementById('phone').value;
    const password = document.getElementById('password').value;

    // Validate phone number
    if (!/^\d{10}$/.test(phone)) {
        alert("Phone number must be a 10-digit number.");
        event.preventDefault(); // Prevent form submission
        return;
    }

    // Validate password length
    if (password.length < 8) {
        alert("Password must be at least 8 characters long.");
        event.preventDefault(); // Prevent form submission
        return;
    }

    // Optional: Add more validations here
};

document.getElementById('loginForm').onsubmit = function(event) {
    const loginPhone = document.getElementById('loginPhone').value;
    const loginPassword = document.getElementById('loginPassword').value;

    // Validate phone number
    if (!/^\d{10}$/.test(loginPhone)) {
        alert("Phone number must be a 10-digit number.");
        event.preventDefault(); // Prevent form submission
        return;
    }

    // Ensure password is not empty
    if (loginPassword.trim() === "") {
        alert("Password cannot be empty.");
        event.preventDefault(); // Prevent form submission
        return;
    }

    
};