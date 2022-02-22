<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
</head>
<body>
    <div class="container">
        <button class="btn">
            <a href="user.php" class="test">Add user</a>
        </button>
        <table class="table1">
                <thead>
                    <tr>
                        <th scope="col">Sl no</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Password</th>
                        <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "Select * from `crud`";
                    $result = mysqli_query($con,$sql);
                    if($result) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $mobile = $row['mobile'];
                            $password = $row['password'];
                            echo '<tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$mobile.'</td>
                            <td>'.$password.'</td>
                            <td>
                            <button class="btn"><a href="update.php?updateid='.$id.'" class="test">Update</a></button>
                            <button class="btn"><a href="delete.php?deleteid='.$id.'" class="test">Delete</a></button>
                            </td>   
                        </tr>';
                        }
                    }
                    ?>
                    
                </tbody>
            </table>
    </div>
</body>
</html>