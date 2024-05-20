<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); include("../conn_db.php"); include('../head.php');?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../css/login.css" rel="stylesheet">
    <link href="../img/Color Icon with background.png" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title> Admin Log in | Food Frenzy</title>
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
            <a href="../index.php">
                <img src="../img/Color Logo - no background.png" width="125" class="me-2" alt="Food Frenzy Logo">
            </a>
        </div>
    </header>

    <div class="container form-signin mt-auto">
        <form method="POST" action="check_admin_login.php" class="form-floating">
            <h2 class="mt-5 mb-3 fw-normal text-bold"><i class="bi bi-door-open me-2"></i>Admin Log In</h2>
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
        </form>
    </div>
    <?php include('admin_footer.php')?>
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