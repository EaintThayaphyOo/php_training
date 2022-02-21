<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial-4 update</title>
</head>
<body>
<div>
  <h2>LOGIN/LOGOUT</h2>
</div>	
<form action="login.php" method="post">
  <label for="email">Email</label><br>
  <input type="text" name="email"><br>
  <label for="password">Password</label><br>
  <input type="password" name="password"><br><br>
  <input type='submit' value="Login">
  <input type="hidden" name="submitted" value="1">
</form>
</body>
</html>