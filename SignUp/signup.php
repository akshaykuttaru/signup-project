<?php
    include("connect.php");
    if(isset($_POST['submit']))
    {
        $name = $_POST["name"];
        $mobile=$_POST["mobile"];
        $email= $_POST["email"];
        $username =$_POST["username"];
        $password =$_POST["password"];
        $cpassword =$_POST["cpassword"];

        $sql = "select * from signup where username ='$username'";
        $result = mysqli_query($conn, $sql);
        $counter_user = mysqli_num_rows($result);

        $sql = "select * from signup where email ='$email'";
        $result = mysqli_query($conn, $sql);
        $counter_email = mysqli_num_rows($result);

        if($counter_user == 0 & $counter_email == 0)
        {
            if($password == $cpassword)
            {
                $sql = "INSERT INTO signup(name, mobile, email, username, password) VALUES('$name', '$mobile', '$email', '$username', '$password')";
                $result= mysqli_query($conn, $sql);
                if($result)
                {
                    header("Location: welcome.php");
                }
            }
        }
        else
        {
            if($counter_user>0)
            {
                
                echo '<script>
                window.location.href="index.php";
                alert("Username already exists");
                </script>';
            }
            else
            {
                echo '<script>
                window.location.href="index.php";
                alert("Email already exists");
                </script>';
            }
        }

    }
?>