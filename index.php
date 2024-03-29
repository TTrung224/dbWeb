<?php
session_start();
if(!isset($_SESSION['logedIn'])){
    header("Location: loginPage.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css3?family=Mitr&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="Assets/title-logo.png" />
    <!-- Style sheet -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">   
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container" style="background: url(Assets/mainbackground.jpeg)">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="Assets/logo.png" alt="web-logo">
                </div>
            </div>
            
            <div class="sidebar">
                <a href="index.php" class="active">
                    <span class="material-icons-sharp">grid_view</span>       
                    <h3>Dashboard</h3>         
                </a>
                <a href="todo.php">
                    <span class="material-icons-sharp">checklist</span>       
                    <h3>To-do list</h3>         
                </a>
                <a href="deadline.php">
                    <span class="material-icons-sharp">free_cancellation</span>       
                    <h3>Deadlines</h3>
                    <span class="upcoming-deadline-count">69</span>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">date_range</span>       
                    <h3>Time table</h3>         
                </a>
                <a href="functions/logout.php">
                    <span class="material-icons-sharp">logout</span>       
                    <h3>Log out</h3>         
                </a>
            </div>
        </aside>

        <!------------------ End Sidebar ----------------->
        <main>
            <div class="background" style="background: url(Assets/mainbackground.jpeg)"></div>
            <h1>Dashboard</h1>

            <div class="date">
            </div>

            <div class="welcome">
                <h2 class="name"> Welcome, <?=$_SESSION['userInfo']['username']?></h2>
            </div>
        </main>
         <!------------------ End Main ----------------->

         <div class="upcoming-deadlines">
            <h1>Upcoming deadlines!</h1>
            <?php include("functions/upcomingDl.php")?>
         </div>
    </div>
    <script src="dateScript.js"></script>
    <?php
        include("templates/footer.php")
    ?>
</body>
</html>