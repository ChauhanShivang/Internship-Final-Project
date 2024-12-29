<?php

    session_start();

    $hostname = "localhost";
    $servername = "root";
    $password = "";
    $dbname = "final_project";

    $conn = mysqli_connect($hostname, $servername, $password, $dbname);

    // if($conn == true){
    //     echo "Connected"."<br>";
    // }
    // else{
    //     echo "Not Connected";
    // }

    $name = isset($_POST["Name"]) ? $_POST["Name"] : '';
    $email = isset($_POST["Email"]) ? $_POST["Email"] : '';
    $mobile = isset($_POST["Mobile"]) ? $_POST["Mobile"] : '';
    $pin = isset($_POST["Pin"]) ? $_POST["Pin"] : '';
    $password = isset($_POST["Password"]) ? $_POST["Password"] : '';
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "insert into users_info values(
        '', '$name', '$email', '$mobile', '$pin', '$hashedPassword'
    )";

    if(mysqli_query($conn, $sql)){
        echo "<script type='text/javascript'>
                alert('Record Accepted');
                window.location.href = '3D Form.html';
                </script>";
    }
    else{
        echo "<script type='text/javascript'>
                alert('Error');
                window.location.href = '3D Form.html';
                </script>";
    }
?>