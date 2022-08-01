<?php
require("functions.php");
$email = $_SESSION['userInfo']['email'];
$connection = dbConnect();
$query = "SELECT * FROM deadline d, category c WHERE d.email='$email' AND d.categoryId=c.id";
$result = mysqli_query($connection,$query);
$result = mysqli_fetch_all($result, MYSQLI_ASSOC);

$date = array_column($result, 'deadline');
array_multisort($date, SORT_ASC, $result);

foreach ($result as $row){
    ?>
    
    <div class="deadline-info" style="background: <?=$row['color']?>;">
        <div class="deadline-title">
            <h2><?=$row['title']?></h2>
            <h2><?=$row['deadline']?></h2>
        </div> 
        <h3 class="category"><?=$row['name']?></h3>
    </div>

<?php
}