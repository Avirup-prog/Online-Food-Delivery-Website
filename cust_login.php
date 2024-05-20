<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); include("conn_db.php"); include('head.php');?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">



    <title>Log in | Food Frenzy</title>
    <style>
        /* Style for the eye button */
        .icon-btn {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 1.2rem;
            color: #6c757d;
            background-color: transparent;
            border: none;
            outline: none;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">
    <header class="navbar navbar-light fixed-top bg-light shadow-sm mb-auto">
        <div class="container-fluid mx-4">
            <a href="index.php">
                <img src="img/Color logo - no background.png" width="125" class="me-2" alt="Food Frenzy Logo">
            </a>
        </div>
    </header>

    <div class="container form-signin mt-auto">
        <a class="nav nav-item text-decoration-none text-muted" href="#" onclick="history.back();">
            <i class="bi bi-arrow-left-square me-2"></i>Go back 
        </a>
        <form method="POST" action="check_login.php" class="form-floating">
            <h2 class="mt-4 mb-3 fw-normal text-bold"><i class="bi bi-door-open me-2"></i>Log In</h2>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username" required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pwd" required>
                <label for="floatingPassword">Password</label>
                <button type="button" class="icon-btn" onclick="togglePasswordVisibility()">
                <i class="fa-solid fa-eye"></i><!-- Lock Icon -->
                </button>
            </div>
            <button class="w-100 btn btn-success mb-3" type="submit">Log In</button>
            <a class="nav nav-item text-decoration-none text-muted mb-2 small" href="admin/admin_login.php">
                <i class="bi bi-shop me-2"></i>Log in to admin account
            </a>
            <a class="nav nav-item text-decoration-none text-muted mb-2 small" href="cust_forgot_pwd.php">
                <i class="bi bi-key me-2"></i>Forgot your password?
            </a>
            <a class="nav nav-item text-decoration-none text-muted mb-2 small" href="cust_regist.php">
                <i class="bi bi-person-plus me-2"></i>Create your new account
            </a>
        </form>
    </div>
    <?php include('footer.php') ?>
    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("floatingPassword");
            var iconBtn = document.querySelector(".icon-btn");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                iconBtn.innerHTML = '<i class="fa-solid fa-eye"></i>'; // Open lock icon
            } else {
                passwordField.type = "password";
                iconBtn.innerHTML = '<i class="fa-regular fa-eye-slash"></i>'; // Lock icon
            }
        }
    </script>
</body>

</html>