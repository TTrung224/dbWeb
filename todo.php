<?php
session_start();
if(!isset($_SESSION['logedIn'])){
    header("Location: loginPage.php");
}
include("functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>To-do List</title>
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
    <div class="todo-container" style="background: url(Assets/mainbackground.jpeg)">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="Assets/logo.png" alt="web-logo">
                </div>
            </div>
            
            <div class="sidebar">
                <a href="index.php">
                    <span class="material-icons-sharp">grid_view</span>       
                    <h3>Dashboard</h3>         
                </a>
                <a href="todo.php" class="active">
                    <span class="material-icons-sharp">checklist</span>       
                    <h3>To-do list</h3>         
                </a>
                <a href="#">
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
        <main>
            <h1>To-do List</h1>
            <div class="todo-input">
                <form action="functions/todo-add.php" method="post" id="new-task-form">
                    <input type="text" name="title" id="new-task-input" placeholder="What task do you need to do?">
                    <select name="categoryId" id="category" required>
                        <option value="" disabled selected>Choose category</option>
                        <?php include("functions/edit-todo.php") ?>
                    </select>
                    <input type="submit" id="new-task-submit" value="Add">
                </form>
            </div>
            <section class="todo-list">
                <h2>Tasks</h2>
                <div class="tasks">
                    <?php
                        displayTask($connection);
                    ?> 
                </div>
            </section>
        </main>
    </div>
    <?php
        include("templates/footer.php")
    ?>
</body>
</html>