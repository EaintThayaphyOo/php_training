<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "Select * from `crud` where id = $id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update `crud`set $id = '$id', name = '$name', email = '$email', mobile = '$mobile', password = '$password'  where id = $id";
    $result = mysqli_query($con,$sql);
    if($result) {
        echo "Updated successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>