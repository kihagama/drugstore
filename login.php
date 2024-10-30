<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="logi.css">
    <title>Login Page</title>
</head>
<body>
    <header>
        <h1><span></span><img style="width:50px;height:50px;border-radius:50%;" src="images/uniconlogo.PNG" alt=""></span><span>Uni-Con</span></h1>
    </header>
    <?php
    include 'connect.php';

    $message = ''; // Initialize message variable
    $redirectUrl = ''; // Initialize redirect URL variable

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $action = $_POST['action'];
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);

        if ($action === 'signup') {
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $checkQuery = "SELECT * FROM users WHERE username='$username' OR email='$email'";
            $result = mysqli_query($conn, $checkQuery);

            if (mysqli_num_rows($result) > 0) {
                $message = "Username or email already exists.";
                $redirectUrl = "login.php"; // Redirect back to the signup page
            } else {
                $signupQuery = "INSERT INTO users (username, email, phone, password) VALUES ('$username', '$email', '$phone', '$hashedPassword')";
                if (mysqli_query($conn, $signupQuery)) {
                    $message = "Signup successful. You can now log in.";
                    $redirectUrl = "login.php"; // Redirect to product.php after signup
                } else {
                    $message = "Error: " . mysqli_error($conn);
                    $redirectUrl = "login.php"; // Redirect back to the login page
                }
            }
        } elseif ($action === 'login') {
            $loginQuery = "SELECT * FROM users WHERE username='$username' OR email='$username'";
            $result = mysqli_query($conn, $loginQuery);

            if (mysqli_num_rows($result) == 1) {
                $user = mysqli_fetch_assoc($result);

                if (password_verify($password, $user['password'])) {
                    $message = "Login successful. Welcome, " . $user['username'] . "!";
                    $redirectUrl = "home.php"; // Redirect to product.php
                } else {
                    $message = "Incorrect password.";
                    $redirectUrl = "login.php"; // Redirect back to the login page
                }
            } else {
                $message = "User not found.";
                $redirectUrl = "login.php"; // Redirect back to the login page
            }
        }
    }
    ?>

    <!-- Alert Message Div -->
    <div class="alert" id="alert" style="display: none;">
        <?php echo $message; ?>
    </div>

    <div class="form-container">
        <h2 id="form-title">Login</h2>
        <form id="auth-form" method="POST">
            <input type="hidden" name="action" id="action" value="login">
            <input type="text" name="username" id="username" placeholder="Username or Email" required>
            <input type="email" name="email" id="email" placeholder="Email" style="display: none;">
            <input type="text" name="phone" id="phone" placeholder="Phone" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <button type="submit" id="submit-btn">Login</button>
        </form>
        <p id="toggle-text">Don't have an account? <a href="#" id="toggle-link">Sign Up</a></p>
    </div>

    <script src="login.js"></script>
    <script>
        // Show alert if there's a message
        const alertMessage = '<?php echo $message; ?>';
        const alertDiv = document.getElementById('alert');
        const redirectUrl = '<?php echo $redirectUrl; ?>';

        if (alertMessage) {
            alertDiv.style.display = 'block';
            alertDiv.innerHTML = alertMessage;
            alertDiv.classList.add('show');

            // Wait for 5 seconds and then redirect
            setTimeout(() => {
                window.location.href = redirectUrl; // Redirect to the specified URL
            }, 1000);
        }
    </script>
</body>
</html>
