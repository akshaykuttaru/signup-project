<?php
    include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <div id = "form">
        <h1> SignUp Form </h1>
        <form name="form" action="signup.php" method="post">
            <label for="name" > Name </label>
            <input type="text" name="name" id="name" placeholder="Enter Name" required><br><br>
            <label for="mobile"> Mobile </label>
            <input type="tel" pattern="[6789]\d{9}" maxlength="10" name="mobile" id="mobile" placeholder="Enter Mobile" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter Email Id" required><br><br>
            <label for="username"> Username</label>
            <input type="text" name="username" id="username" placeholder="Enter User name" required><br><br>
            <label for="password">Enter Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Password" required><br><br>
            <label for="password">Reenter Password</label>
            <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" required><br><br>
            <input type="submit" value="Sign Up" name="submit" id="submit">
        </form>
    </div>
</body>
</html>