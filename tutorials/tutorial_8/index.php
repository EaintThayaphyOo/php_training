<?php
include 'connect.php';
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `crud` (name,email,mobile,password)
    values('$name','$email','$mobile','$password')";
    $result = mysqli_query($con,$sql);
    if($result) {
        //echo "Data inserted successfully";//
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUDOperation</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
    <form method="post">
        <div class="form-group">
            <label>Name</label><br>
            <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name;?>><br><br>
        </div>
        <div class="form-group">
            <label>Email</label><br>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email;?>><br><br>
        </div>
        <div class="form-group">
            <label>Mobile</label><br>
            <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off" value=<?php echo $mobile;?>><br><br>
        </div>
        <div class="form-group">
            <label>Password</label><br>
            <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" value=<?php echo $password;?>><br><br>
        </div>
        <button type="submit" class="btn" name="submit">Submit</button>
    </form>
    </div>
</body>
</html>