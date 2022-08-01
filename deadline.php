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
    <title>Deadline List</title>
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
    <div class="deadline-container" style="background: url(Assets/mainbackground.jpeg)">
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
                <a href="todo.php">
                    <span class="material-icons-sharp">checklist</span>       
                    <h3>To-do list</h3>         
                </a>
                <a href="deadline.php" class="active">
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
            <h1>Deadline List</h1>
            <div class="deadline-input" id="deadline-form">
                <form action="functions/deadlineAdd.php" method="post" id="new-deadline-form">
                    <div class="title-row">
                        <input type="text" name="title" id="new-deadline-input" placeholder="What deadline do you need to finish?">
                        <select name="categoryId" id="category" required>
                            <option value="" disabled selected>Choose category</option>
                            <?php include("functions/listCat.php") ?>
                            <option><a href="index.php">..add new</a></option>
                        </select>
                        <input type="submit" id="new-deadline-submit" value="Add"><br>
                    </div>
                    <input type="text" name="info" id="new-deadline-info" placeholder="Description">
                    <input type="datetime-local" name="date" id="date">
                </form>
            </div>
            <div class="deadline-input create-cat-form non-display">
                <form action="functions/addCat.php" method="post" id="new-task-form">
                    <input type="text" name="category" id="new-task-input" placeholder="Name of category">
                    <label for="cat-color-chooser">Color for your category:</label>
                    <input type="color" name="color" id="cat-color-chooser" placeholder="Color for your category">
                    <input type="submit" id="new-task-submit" value="Create">
                </form>
            </div>
            <section class="deadline-list">
                <h2>Deadlines</h2>
                <div class="upcoming-deadlines">
                    <?php
                        displayDeadline($connection);
                    ?> 
                </div>
            </section>
        </main>
    </div>
    <?php
        include("templates/footer.php");
    ?>
    <script src="deadlinePage.js"></script>
</body>
</html>