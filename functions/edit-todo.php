<?php
$email = $_SESSION['userInfo']['email'];
$connection = dbConnect();
$query = "SELECT * FROM category c WHERE c.email='$email' or c.public=1";
$result = mysqli_query($connection,$query);
$result = mysqli_fetch_all($result, MYSQLI_ASSOC);

$name = array_column($result, 'name');
array_multisort($name, SORT_ASC, $result);

foreach ($result as $row){
    ?>
    
    <option value=<?=$row['id']?>><?=$row['name']?></option>

<?php
}