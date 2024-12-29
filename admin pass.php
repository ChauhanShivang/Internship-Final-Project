<?php
    session_start();

    $hostname = "localhost";
    $servername = "root";
    $password = "";
    $dbname = "final_project";

    $admin_name = "Shivang Chauhan";
    $admin_password = "Shivu@08";

    $conn = mysqli_connect($hostname, $servername, $password, $dbname);

    $name = isset($_POST["name"]) ? $_POST["name"] : '';
    $password = isset($_POST["password"]) ? $_POST["password"] : '';

    if($name == $admin_name && $password == $admin_password){
        header("Location: admin.php");
    }
    else{
        echo "<script type='text/javascript'>
                alert('Invalid Admin');
                window.location.href = 'admin pass.html';
                </script>";
        // header("Location: admin pass.html");
    }
?>