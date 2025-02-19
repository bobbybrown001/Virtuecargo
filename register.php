<?php
// database connection file
include("config/config.php");

$fullname = "";
$username = "";
$email = "";
$phone = "";
$success = "";
$error = array();

// if form is submitted
if(isset($_POST['submit'])){
    // sanitize user inputs
    $fullname = mysqli_real_escape_string($connection, $_POST['fullname']);
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $pass = mysqli_real_escape_string($connection, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($connection, $_POST['confirmPassword']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);

    $sql = "SELECT * FROM users WHERE email='$email'";

    $query = mysqli_query($connection, $sql);

    // Lets check for errors in the fields
    if(empty($fullname)){
        array_push($error, "Full name cannot be empty");
    }

    if(empty(trim($username))){
        array_push($error, "Username cannot be empty");
    }

    if(empty($email)){
        array_push($error, "Email cannot be empty");
    }

    if(mysqli_num_rows($query) > 0){
        array_push($error, "Email has already been taken by another user");
    }

    if($pass != $confirmpassword){
        array_push($error, "Passwords do not match");
    }

    if(empty($phone)){
        array_push($error, "Phone number cannot be empty");
    }

    // if there are no errors in the form then continue
    if(count($error) == 0){
        // encrypt password
        $password = password_hash($pass, PASSWORD_DEFAULT);

        // insert into the database
        $insert = "INSERT INTO users (fullname, username, email, password, phone)
        VALUES('$fullname', '$username', '$email', '$password', '$phone')";

        if(mysqli_query($connection, $insert)){
            $success = "<span class='text-success'>Registered successfully</span>";
            header("Location: login.php");
            exit(); // Prevent further code execution after redirect
        } else {
            $success = "<span class='text-danger'>Registration failed</span>";
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
    <link rel="stylesheet" href="./css/register.css">

    <!-- Font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Register</title>
</head>
<body>
    <?php require("include/nav/nav.php"); ?>
        
    <!-- Register Form -->
    <div class="form-body">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" autocomplete="off" class="reg_form">
            <h3 id="register" class="mt-5">REGISTER</h3>
            <?php
            if ($success) {
                echo "<p class='text-success text-center'>$success</p>";
            }
            foreach ($error as $errors) {
                echo "<p class='text-danger text-center'>$errors</p>";
            }
            ?>
            <div class="input-div">
                <!-- Full name -->
                <input class="formInput" type="text" id="full-name" name="fullname" placeholder="Full Name:" required
                value="<?php echo $fullname ?>" >
            </div>
            <div class="input-div">
                <!-- Username -->
                <input class="formInput" type="text" id="username" name="username" placeholder="User Name:" required
                value="<?php echo $username ?>" >
            </div>
            <div class="input-div">
                <!-- Email -->
                <input class="formInput" type="email" id="email" name="email" placeholder="Email" required
                value="<?php echo $email ?>" >
            </div>
            <div class="input-div">
                <!-- Password -->
                <input class="formInput" type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-div">
                <!-- Confirm Password -->
                <input class="formInput" type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
            </div>
            <div class="input-div">
                <!-- Phone -->
                <input class="formInput" type="number" id="phone" name="phone" placeholder="Phone Number" required
                value="<?php echo $phone ?>" >
            </div>
            <button class="formButton" type="submit" name="submit">
                Sign Up
            </button>
            <div id="account">
                <p>Already have an account?
                    <span style="color: #0d6efd;">
                        <a href="./login.php">Sign In</a>
                    </span>
                </p>
            </div>
        </form>
    </div>

    <?php require("include/footer/loginFooter.php"); ?>
</body>
</html>
