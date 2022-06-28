<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeflow Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="Assets/title-logo.png" />

</head>
<body>
    <div class='main'>
        <div class='slide-show'>
            <img src="Assets/slide-show-1.png" alt="Slide Image">
        </div>
        <div class="login-box">
            <div class="logo-login">
                <img src="Assets/logo.png" alt="logo">
            </div>
            <div class="login-form">
                <form action="#" method="post">
                    <div class="form-inputs">
                        <input type="text" id="email" placeholder="Email" name="email">
                        <input type="password" id="password" placeholder="Password" name="password">
                    </div>
                    <div class="btn-inputs">
                        <button class="btn-login" name="btn-login" >Log In</button>
                    </div>
                </form>
            </div>
            <div class="signup-link">
                <span>Don't have account?&nbsp</span>
                <a href="signupPage.php">Sign up</a> 
            </div>
        </div>
    </div>

    <?php include_once("templates/footer.php"); ?>

</body>
</html>
