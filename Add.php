<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
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
            height: 40rem;
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

            <form action="Add.php" method="post"  onsubmit="return Validate()" class="signin-form">
                <h2>Add Record</h2>

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
                    <input type="submit" value="Add User">
                </div>
            </form>
        
        </div>

    </div>

    <script>
        function Validate()
        {
            var Name = document.getElementById("name").value;
            var Email = document.getElementById("email").value.trim();
            var Mobile = document.getElementById("mobile").value.trim();
            var Pin = document.getElementById("pin").value.trim();
            
            var Vname = /^[a-z A-Z] + $/;
            var Vemail = /^[a-z]+[0-9]+\@[a-z]{4,}\.[a-z]{3,4}$/;
            var Vmobile = /^[0-9]{10}$/;
            var Vpin = /^\d{6}$/;

            // if(!Vname.test(Name)){
            //     document.getElementById("ename").innerHTML = "*Enter Appropriate Name";
            //     return false;
            // }
            if(!Vemail.test(Email)){
                document.getElementById("eemail").innerHTML = "*Enter Appropriate Email";
                return false;
            }
            if(!Vmobile.test(Mobile)){
                document.getElementById("emobile").innerHTML = "*Enter Appropriate Mobile No.";
                return false;
            }
            if(!Vpin.test(Pin)){
                document.getElementById("epin").innerHTML = "*Enter Appropriate Pin Code";
                return false;
            }
            return true;
        }
    </script>

</body>
</html>


<?php
    // session_start();

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
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $mobile = isset($_POST["mobile"]) ? $_POST["mobile"] : '';
    $pin = isset($_POST["pin"]) ? $_POST["pin"] : '';
    $password = isset($_POST["password"]) ? $_POST["password"] : '';
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    if($name && $email && $mobile && $pin && $password){
        $sql = "insert into users_info values(
            '', '$name', '$email', '$mobile', '$pin', '$hashedPassword'
        )";
        mysqli_query($conn, $sql);
        // echo "Data Stored"."<br>"."<br>";
        echo "<script type='text/javascript'>
                alert('Data Stored Successfully');
                window.location.href = 'admin.php';
                </script>";
    }
    // else{
    //     echo "Please Add Appropriate Values"."<br>"."<br>";
    // }

    // if(mysqli_query($conn, $sql)){
    //     echo "Data Storeed"."<br>";
    // }
    // else{
    //     echo "Error";
    // }
?>