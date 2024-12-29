<?php
    session_start();

    $hostname = "localhost";
    $servername = "root";
    $password = "";
    $dbname = "final_project";

    $conn = mysqli_connect($hostname, $servername, $password, $dbname);

    // if($conn == true){
    //     echo "Connected"."<br>"."<br>";
    // }
    // else{
    //     echo "Not Connected";
    // }

    error_reporting(E_ALL & ~E_WARNING);
    ini_set('error_reporting', E_ALL & ~E_WARNING);

    $name1 = $_POST["name"];
    $sql = "select * from users_info where name = '$name1'";
    $result = mysqli_query($conn, $sql);
    if($result -> num_rows > 0){
        // echo "Exists";
        if(isset($_POST["name"])){
            // $name = $_POST["name"];
            $_SESSION["name"] = $_POST["name"];
            // echo "Set"."<br>"."<br>";
            // echo "<h2>Enter Updated Values</h2>"."<br>"."<br>";
            header("Location: Update2.php");
    
            // $sql = "delete from users_info where name = '$name'";
            // mysqli_query($conn, $sql);
    
            // if($sql){
            //     echo "Deleted"."<br>"."<br>";
            // }
            // else{
            //     echo "Error"."<br>"."<br>";
            // }
        }else{
            echo "<script type='text/javascript'>
                alert('No Record Found');
                window.location.href = 'Update.php';
                </script>";
        }
    }
    else{
        echo "<script type='text/javascript'>
        alert('No Record Found');
        window.location.href = 'admin.php';
        </script>";
    }

    
    
?>