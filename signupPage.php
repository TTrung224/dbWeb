<?php
session_start();
if(isset($_SESSION['logedIn'])){
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeflow Login</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="Assets/title-logo.png" />
    <!-- Style sheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class='main'>
        <div class='slide-show'>
            <img src="Assets/slide-show-1.png" alt="Slide Image">
        </div>
        <div class="signup-box">
            <div class="logo-signup">
                <img src="Assets/logo.png" alt="logo">
            </div>
            <div class="signup-form">
                <form action="functions/signup.php" method="post">
                    <div class="form-inputs">
                        <input type="text" id="email" placeholder="&#xf0e0; Enter email" name="email">
                        <input type="password" id="password" placeholder="&#xf084; Enter password" name="password">
                        <input type="password" id="re-password" placeholder="&#xf084; Re-type password" name="re-password">
                        <input type="text" id="user-name" placeholder="&#xf007;  Username" name="username">
                        <input type="text" id="major" placeholder="&#xf0b1; Major/Job" name="major">
                    </div>
                    <div class="btn-inputs">
                        <button class="btn-signup" name="btn-signup" >Sign up</button>
                    </div>
                </form>
            </div>
            <div class="signup-link">
                <span>Already have account? &nbsp</span>
                <a href="loginPage.php">Login</a> 
            </div>
        </div>
    </div>

    <?php include_once("templates/footer.php"); ?>

</body>
</html>
