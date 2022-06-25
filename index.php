<?php
    // $connection = mysqli_connect("us-cdbr-east-05.cleardb.net", "b704e0507b7306", "41c3cb98", "heroku_f8f2d91b657802f");
    $connection = mysqli_connect("localhost", "root", "Tranquoctrung224!", "test");

    

    if (mysqli_connect_error()) {
        die("Database connection failed: " . mysqli_connect_error());
    } else{
        echo "successfully connected";
    }

    $sql = "SELECT * FROM employee";
    $result = $connection -> query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["number"]. " - name: " . $row["name"].  " - position: ". $row["position"]. " - department: ". $row["department"]. " - supervisor: ". $row["supervisor"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $connection->close();
    // abcavkjsaskfjksjksdndsfds
    // abc
    echo "abc";

    //dsadadasadsad
?>