<?php
function dbConnect(){
    $servername = "us-cdbr-east-05.cleardb.net";
    $username = "b704e0507b7306";
    $password = "41c3cb98";
    $dbname = "heroku_f8f2d91b657802f";

    // $connection = mysqli_connect("localhost", "root", "Hoangpro02", "test");

    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error) {
        die("Database connection failed: " . $connection->connect_error);
    } 

    return $connection;
}

function formatInput($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = strip_tags($data);
    return $data;
}

function displayTask($connection){
    $email = $_SESSION['userInfo']['email'];
    $query = "SELECT * FROM toDo t WHERE t.email='$email'";
    $result = mysqli_query($connection,$query);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $id = array_column($result, 'id');
    array_multisort($id, SORT_ASC, $result);
    
    foreach ($result as $row){
        ?>
            <div class="task">
                <div class="content">
                    <form action="functions/updateTodo.php" method="post" id="task-edit-form">
                        <input type="text" name="deadline" id="deadline-<?=$row['id']?>" class="text deadline-content" value="<?=$row['title']?>" readonly>
                        <input type="hidden" name="id" value="<?=$row['id']?>">
                        <input type="submit" id="save-edit-<?=$row['id']?>" class="save-edit non-display" value="SAVE">
                    </form>
                </div>
                <div class="actions">
                    <button class="edit" id="edit<?=$row['id']?>">EDIT</button>
                    <a href="functions/delTask.php?id= <?php echo $row["id"]?>" onclick="return confirm('Are you sure?')">DELETE</a>
                </div>
            </div>
    <?php
    }
    return null;
}