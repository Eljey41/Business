<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="section">
        <div class="login-box">
            <form id="form" action="">
                <h2>Login</h2>
                <div class="input-box">
                    <input id="input" type="username" required>
                    <label id="label">Username</label>
                </div>
                <div class="input-box">
                    <input id="input" type="password" required>
                    <label id="label">Password</label>
                </div>
                <button type="submit">Login</button>
                <div class="register-link">
                    <p id="p">Don't have an account? <a id="a" href="register.php">Register</a></p>
                </div>
                <div class="register-link">
                    <p id="p"><a id="a" href="index.php">Back</a></p>
                </div>
            </form>
        </div>
    </section>
    <script>
        const form = document.querySelector('form');

        form.addEventListener('submit', (e) => {
          e.preventDefault();
    
          alert("Login successful!");
        });
    </script>

</body>
</html>