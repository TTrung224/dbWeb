<?php
require("functions.php");
$email = $_SESSION['userInfo']['email'];
$connection = dbConnect();
$query = "SELECT * FROM deadline WHERE email='$email'";
$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row["title"];
    echo $row["info"];
    echo $row["deadline"];
}