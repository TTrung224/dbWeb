<?php
function dbConnect(){
    $servername = "us-cdbr-east-05.cleardb.net";
    $username = "b704e0507b7306";
    $password = "41c3cb98";
    $dbname = "heroku_f8f2d91b657802f";

    // $connection = mysqli_connect("localhost", "root", "Hoangpro02", "test");
    $connection =  new mysqli("localhost", "root", "Hoangpro02", "test");

    // $connection = new mysqli($servername, $username, $password, $dbname);

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
                    <input type="text" class="text" value="<?=$row['title']?>" readonly>
                </div>
                <div class="actions">
                    <button class="edit">EDIT</button>
                    <button class="delete">DELETE</button>
                </div>
            </div>
    <?php
    }
    return null;
}