<html>
<head>
<title>Demo Models</title>
</head>
<body>
<h2>Login</h2>
<form action="http://localhost/CI/login" method=POST>
<?php echo $model->labels['username']; ?><br>
<input type= 'text' name= 'username'><br><br>
<?php echo $model->labels['password']; ?><br>
<input type= 'text' name= 'password'><br><br>
<input type = 'submit' name = 'btnsubmit' value='Login'><br><br>
</form>
</body>
</html>