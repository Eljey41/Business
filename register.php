<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="section">
        <div class="signup-box">
            <form action="">
                <h2>Sign up</h2>
                <div class="input-box">
                    <input id="input" type="name" onkeypress="return /[A-Za-z. ]/.test(event.key)" required>
                    <label id="label">Full Name</label>
                </div>
                <div class="input-box">
                    <input id="inputUser" type="username" onkeypress="return /[a-z0-9]/.test(event.key)" required>
                    <label id="label">Username</label>
                </div>
                <div class="input-box">
                    <input id="inputPassword" type="password" required>
                    <label id="label">Password</label>
                </div>
                <button type="submit" id="signupButton">Sign Up</button>
                <div class="register-link">
                    <p id="p">Already Have an account? <a id="a" href="login.php">Log in</a></p>
                </div>
                
            </form>
        </div>
    </section>

    <script src="script.js"> </script>
</body>
</html>