
<?php
    // $connection = mysqli_connect("us-cdbr-east-05.cleardb.net", "b704e0507b7306", "41c3cb98", "heroku_f8f2d91b657802f");
    $connection = mysqli_connect("localhost", "root", "Tranquoctrung224!", "test");

    if (mysqli_connect_error()) {
        die("Database connection failed: " . mysqli_connect_error());
    } else{
        echo "successfully connected";
    }

    // $sql = "SELECT * FROM employee";
    // $result = $connection -> query($sql);

    // if ($result->num_rows > 0) {
    //     // output data of each row
    //     while($row = $result->fetch_assoc()) {
    //         echo "id: " . $row["number"]. " - name: " . $row["name"].  " - position: ". $row["position"]. " - department: ". $row["department"]. " - supervisor: ". $row["supervisor"]. "<br>";
    //     }
    // } else {
    //     echo "0 results";
    // }
    $connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link href="css/mobiscroll.javascript.min.css" rel="stylesheet" />
    <script src="js/mobiscroll.javascript.min.js"></script>
</head>
<body>
    <input id="input-picker"/>
    <script>
        mobiscroll.datepicker('#input-picker', {
            controls: ['calendar','time'],
            touchUi: true,
            timeFormat: 'H:mm'
        });
    </script>
</body>
</html>