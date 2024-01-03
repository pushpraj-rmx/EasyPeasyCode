<?php
session_start();
if(isset($_SESSION["user"])){
    header("Location: index.php");
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/img-01.png" alt="IMG">
                </div>
                <?php
                function validatePassword($password) {
                    $uppercase = preg_match('@[A-Z]@', $password);
                    $lowercase = preg_match('@[a-z]@', $password);
                    $number = preg_match('@[0-9]@', $password);
                    $specialChars = preg_match('/[^A-Za-z0-9]/', $password);
                
                    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
                        return false; // Password does not meet requirements
                    } else {
                        return true; // Password meets requirements
                    }
                }
            // first we will check if the submit button has been clicked or not
            if(isset($_POST["submit"])){
                $fullName = $_POST["fullname"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $re_pass = $_POST["re_password"];
                $errors = array();
                $passHash = password_hash($password,PASSWORD_DEFAULT);
                // now check if user has filled all the columns or not
                if(empty($fullName) OR empty($email) OR empty($password) OR empty($re_pass)){
                    array_push($errors,"All fields are required");
                }
                // now check if the user has entered a write email id 
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    array_push($errors,"Please enter a valid email.");
                }
                if (strlen($password) < 8) {
                    array_push($errors, "Password length must be at least 8 characters long.");
                } elseif (!validatePassword($password)) {
                    array_push($errors, "Password should contain at least one uppercase letter, one lowercase letter, one number, one special character.");
                }
                if($password !== $re_pass){
                    array_push($errors,"Password is not matching recheck the password.");
                }
                require_once "database.php";
                $sql = "SELECT * FROM users WHERE email = '$email'";
                $results = mysqli_query($conn, $sql);
                $rowCount = mysqli_num_rows($results);
                if($rowCount>0){
                    array_push($errors,"Email already exist!");
                }
                if(count($errors)>0)
                {
                    foreach ($errors as $error) {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                }else{
                    $sql = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                    if($prepareStmt){
                        mysqli_stmt_bind_param($stmt,"sss",$fullName,$email,$passHash);
                        mysqli_stmt_execute($stmt);
                        echo "<div class='alert alert-success'>Registered Successfully</div>";
                    }else{
                        die("Something went wrong!");
                    }

                }
            }
        ?>
                <form action="register.php" method="post" class="login100-form validate-form">
                    <span class="login100-form-title">
                        Register
                    </span>
                    <div class="wrap-input100 validate-input" data-validate = "Full Name is required">
                        <input class="input100" type="text" name="fullname" placeholder="Full Name">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Confirm Password is required">
                        <input class="input100" type="password" name="re_password" placeholder="Confirm Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="container-login100-form-btn">
                        <button name="submit" class="login100-form-btn">
                            Register
                        </button>
                    </div>
                    <div class="text-center p-t-136">
                        <a class="txt2" href="login.php">
                            Already have an account? Login here
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script><!-- ... (existing script and JS links) ... -->
</body>
</html>
