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

    $sql = "select * from users_info";

    $result = mysqli_query($conn, $sql);

    echo "<html style='width: 100%; height: 100vh; background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(214, 196, 196, 0.7)), url(bg.jpg) center no-repeat; background-size: cover; perspective: 1000px;'>";

    echo "<div style='text-align: left; margin: 20px;'>";
    echo "<a href='3D Form.html' style='margin: 10px; padding: 10px; background-color: transparent; color: white; text-decoration: none; border-radius: 5px; font-size: 1.8rem;'>Home</a>"."<br>";
    echo "</div>";
    
    if($result -> num_rows > 0){
        echo "<div style='width:100%; display: flex; justify-content: center; align-items: center; margin-top: 20px;'>";
        echo "<br>"."<table border='1px' cellpadding='15px' style='background-color: rgba(16, 16, 37, 0.925); text-align: center; color: white;'>";
        echo "<tr><th>Id</th><th>Name</th><th>Email</th><th>Mobile</th><th>Pin Code</th></tr>";
        for($i=0; $i<$result -> num_rows; $i++){
                $row = $result -> fetch_assoc();
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['mobile'] = $row['mobile_no'];
                $_SESSION['pin'] = $row['pinCode'];
            echo "<tr>";
            echo "<td>".$_SESSION['id']."</td>";
            echo "<td>".$_SESSION['name']."</td>";
            echo "<td>".$_SESSION['email']."</td>";
            echo "<td>".$_SESSION['mobile']."</td>";
            echo "<td>".$_SESSION['pin']."</td>";
            echo "</tr>";
        }
        echo "</table>"."<br>";
        echo "</div>";
    }
    echo "<div style='text-align: center; margin: 20px;'>";
    echo "<a href='Add.php' style='margin: 10px; padding: 10px; background-color: rgba(16, 16, 37, 0.925); color: white; text-decoration: none; border-radius: 5px;'>Add User</a>";
    echo "<a href='Update.html'  style='margin: 10px; padding: 10px; background-color: rgba(16, 16, 37, 0.925); color: white; text-decoration: none; border-radius: 5px;'>Update</a>";
    echo "<a href='Delete.html' style='margin: 10px; padding: 10px; background-color: rgba(16, 16, 37, 0.925); color: white; text-decoration: none; border-radius: 5px;'>Delete</a>";
    
    echo "</html>";
?>