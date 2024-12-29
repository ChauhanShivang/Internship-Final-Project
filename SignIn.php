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

    $name = isset($_POST["name"]) ? $_POST["name"] : '';
    $email = isset($_POST["email"]) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
    $password = isset($_POST["password"]) ? mysqli_real_escape_string($conn, $_POST['password']) : '';

    $sql = "select * from users_info where email = '$email'";
    $result1 = mysqli_query($conn, $sql);
    
    $sql = "select * from users_info where name = '$name'";
    $result2 = mysqli_query($conn, $sql);

    // $password1 = password_verify($password, $hashedPassword);
    // $sql = "select * from users_info where password = '$password1'";
    // $result3 = mysqli_query($conn, $sql);

    $message = "";

    if ($result1->num_rows > 0 && $result2->num_rows > 0) {
        $row = $result1->fetch_assoc();
        
        if ($password = $row["password"]) {
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['mobile'] = $row['mobile_no'];
            $_SESSION['pin'] = $row['pinCode'];
            
            header("Location:Data.php");
            exit();
        } else {
            echo "Invalid email or password.";
        }
    }
    else {
        $message = "No User Found";
        header("Location: 3D Form.html?message=" . urlencode($message));
        exit();
    }
    mysqli_close($conn);
?>