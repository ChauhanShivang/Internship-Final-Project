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

    if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["mobile"]) && isset($_POST["pin"]) && isset($_POST["password"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $pin = $_POST["pin"];
        $password1 = $_POST["password"];
        $password = password_hash($password1, PASSWORD_DEFAULT);

        $Name = $_SESSION["name"];

        $sql = "update users_info set name = '$name', email = '$email', mobile_no = '$mobile', pinCode = '$pin', password = '$password' where name = '$Name'";
        
        if(mysqli_query($conn, $sql)){
            // echo "Updated"."<br>"."<br>";
            echo "<script type='text/javascript'>
                alert('Record Updated');
                window.location.href = 'admin.php';
                </script>";
        }else{
            echo "Not Updated"."<br>"."<br>";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: Arial, sans-serif;
        }

        html{
            font-size: 72.5%;
        }

        .home-btn{
            padding: 4rem 4rem;
            text-decoration: none;
            font-size: 2rem;
        }

        .home-btn a{
            color: #fff;
        }

        .container{
            width: 100%;
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(214, 196, 196, 0.7)), url(bg.jpg) center no-repeat;
            background-size: cover;
            perspective: 1000px;
        }

        .forms-wrapper{
            position: absolute;
            top: 15rem;
            left: 40rem;
        }

        .forms-wrapper form{
            width: 50rem;
            height: 45rem;
            background-color: rgba(16, 16, 37, 0.925);
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            box-shadow: #fff;
            position: absolute;
        }

        form a{
            position: absolute;
            top: 2rem;
            background-color: #fff;
            font-weight: 600;
            text-transform: uppercase;
            color: rgba(40, 114, 108);
            letter-spacing: 0.2rem;
        }

        .signin-btn{
            right: 2rem;
            padding: .5rem 1rem .5rem 1rem;
            border-radius: .1rem 50% 50% .1rem;
        }

        form h2{
            font-size: 2.4rem;
            text-transform: uppercase;
            letter-spacing: 0.2rem;
            color: #fff;
        }

        .input-wrapper{
            display: flex;
            flex-direction: column;
        }

        .input-wrapper input{
            width: 25rem;
            height: 3rem;
            padding: .5rem 1rem;
            margin: 0.5rem 0;
            background-color: transparent;
            border: 0.1rem solid #fff;
            border-radius: 5rem;
            color: #fff;
            letter-spacing: 0.1rem;
            outline: none;
        }

        .input-wrapper input::placeholder{
            color: #fff;
            font-weight: 300;
        }

        .input-wrapper input[type="submit"]{
            background-color: #fff;
            color: rgba(40, 114, 108);
            font-weight: 900;
            text-transform: uppercase;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="home-btn">
            <a href="admin.php">Back</a>
        </div>
        <div class="forms-wrapper">
            <form action="Update2.php" method="post"  onsubmit="return Validate()" class="signin-form">
                <h2>Update Record</h2> 

                <div class="input-wrapper">
                    <input type="text" id="name" name="name" placeholder="Name"><br>
                    <p id="ename" style="color: red;"></p><br>
                    <input type="text" id="email" name="email" placeholder="Email"><br>
                    <p id="eemail" style="color: red;"></p><br>
                    <input type="text" id="mobile" name="mobile" placeholder="Mobile"><br>
                    <p id="emobile" style="color: red;"></p><br>
                    <input type="text" id="pin" name="pin" placeholder="Pin Code"><br>
                    <p id="epin" style="color: red;"></p><br>
                    <input type="text" id="password" name="password" placeholder="Password"><br>
                    <p id="epassword" style="color: red;"></p>
                    <input type="submit" value="Update">
                </div>

            </form>
        </div>
    </div>

    <script>
        function Validate()
        {
            var name = document.getElementById("name").value.trim();
            var email = document.getElementById("email").value.trim();
            var mobile = document.getElementById("mobile").value.trim();
            var pin = document.getElementById("pin").value.trim();
            
            var Vname = /^[a-z A-Z] + $/;
            var Vemail = /^[a-z]+[0-9]+\@[a-z]{4,}\.[a-z]{3,4}$/;
            var Vmobile = /^[0-9]{10}$/;
            var Vpin = /^\d{6}$/;

            // if(!Vname.test(name)){
            //     document.getElementById("ename").innerHTML = "*Enter Appropriate Name";
            //     return false;
            // }
            if(!Vemail.test(email)){
                document.getElementById("eemail").innerHTML = "*Enter Appropriate Email";
                return false;
            }else{
                document.getElementById("eemail").innerHTML = "";
            }
            if(!Vmobile.test(mobile)){
                document.getElementById("emobile").innerHTML = "*Enter Appropriate Mobile No.";
                return false;
            }else{
                document.getElementById("emobile").innerHTML = "";
            }
            if(!Vpin.test(pin)){
                document.getElementById("epin").innerHTML = "*Enter Appropriate Pin Code";
                return false;
            }else{
                document.getElementById("epin").innerHTML = "";
            }
            return true;
        }
    </script>

</body>
</html>