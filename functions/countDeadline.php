<?php
$email = $_SESSION['userInfo']['email'];
$connection = dbConnect();
$query = " SELECT COUNT(*)  FROM deadline d WHERE d.email='$email'";
$result = mysqli_query($connection,$query);

foreach ($result as $row){
    ?>
    
    <option value=<?=$row['id']?>><?=$row['name']?></option>

<?php
}