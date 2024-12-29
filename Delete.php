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

    error_reporting(E_ALL & ~E_WARNING);
    ini_set('error_reporting', E_ALL & ~E_WARNING);

    $name = $_POST["name"];
    $sql = "select * from users_info where name = '$name'";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
        // $name = $_POST["name"];
        // echo "Set"."<br>"."<br>";
        $sql = "delete from users_info where name = '$name'";
        mysqli_query($conn, $sql);

        if($sql){
            // echo "Deleted"."<br>"."<br>";
            echo "<script type='text/javascript'>
                    alert('Record Deleted');
                    window.location.href = 'admin.php';
                    </script>";
        }
    }
    else{
        echo "<script type='text/javascript'>
                alert('No Record Found');
                window.location.href = 'Delete.html';
                </script>";
    }
?>