const password = document.getElementById("inputPassword");  

signupButton.addEventListener("click", (e) => {
    const pass = password.value;

    const strongPassword = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    if (!strongPassword.test(pass)) {
      e.preventDefault();
      alert("Password must be at least:\n" +
        "• 8 characters.\n" +
        "• Include 1 uppercase.\n" +
        "• 1 number.\n" +
        "• and 1 special character.");
        
      return;
    }



    e.preventDefault();
    window.location.href = 'login.php';
});