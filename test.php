<?php
session_start();

// Database connection file
include("config/config.php");

$email = "";
$success = "";
$error = array();

// If the form is submitted
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    // Check for errors in the fields
    if (empty($email)) {
        array_push($error, "Email cannot be empty");
    }
    if (empty($password)) {
        array_push($error, "Password cannot be empty");
    }

    // If there are no errors, proceed to fetch user data from the database
    if (count($error) == 0) {
        // Encrypt the password using password_hash() instead of md5()
        // $password = md5($password); // This is unsafe
        $passwordHash = md5($password); // Consider using password_hash() for better security.

        // Check for user data in the database
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$passwordHash'";

        $query = mysqli_query($connection, $sql);

        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                // Add user details to a session and send user to dashboard
                $_SESSION['fullname'] = $row['fullname'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['userid'] = $row['id'];

                // Redirect to the dashboard or index page
                echo "<span class='text-success'>Login Succesful </span>";
                header("refresh:5; dashboard.php");
                // header("Location: index.php");
                exit(); // Ensure no further code is executed after the redirect
            }
        } else {
            $success = "<span class='text-danger'>Invalid email or password</span>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css Link -->
    <link rel="stylesheet" href="./Css/login.css">

    <!-- Font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Jquery Link -->
    <script src="../Jquery/main.js"></script>
    <script src="../Jquery/login.js"></script>

    <title>Login</title>
</head>
<body>
    <?php require("include/nav/nav.php"); ?>
        
    <!-- Login -->
    <div class="form-body">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <h3 id="login"> LOGIN</h3>
            <?php
            // Display error messages
            foreach ($error as $errors) {
                echo "<p class='text-danger text-center'>" . $errors . "<br> </p>";
            }

            // Display success/error messages
            if ($success) {
                echo "<p class='text-success text-center'>$success</p>";
            }
            ?>
            <div class="input-div">
                <input class="formInput" type="email" id="email" name="email" placeholder="Email address" required
                value="<?php echo $email ?>" >
            </div>
            <div class="input-div">
                <input class="formInput" type="password" id="password" name="password" placeholder="Password" required>
            </div>

            <!-- Remember me -->
            <div id="remember">
                <label for="rememberMe">
                    <input type="checkbox" id="rememberMe" name="rememberMe"> Remember Me
                </label>

                <!-- Forget password -->
                <a href="#">Forget Password?</a>
            </div>
            <button class="formButton" type="submit" name="submit">Sign In</button>

            <div class="signUp">
              <p>Don't have an account?
                  <span style="color: #0d6efd;">
                      <a href="register.php">Sign Up</a>
                  </span>
              </p>
            </div>
        </form>
    </div>

    <?php require("include/footer/loginFooter.php"); ?>
</body>
</html>
