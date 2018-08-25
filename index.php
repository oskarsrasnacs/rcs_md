<?php

var_dump($_POST);

//mysql_connect
//PDO -
//var " localhost 127.0.0.1

if(isset($_POST["submit"])){
	$username = $_POST['username'];
	$password = $_POST['password'];

if (($username=="students" and $password=="students") or 
	($username=="docetajs" and $password=="docetajs")){

	$connection=mysqli_connect("127.0.0.1","root","","test");
	} else {
		echo "BAD PASSWORD OR USERNAME";
	}

	if (!$connection){
		die("Database connection failed");
	}

$sql = "INSERT INTO `users` (`username`, `password`)"; 
$sql .="VALUES ('$username', '$password')";

$result=mysqli_query($connection,$sql);
if (!$result){
	die("Query error".mysqli_error($connection));
}
if (($username=="students") and ($password=="students")){include("students.php");}
else if ($username=="docetajs" and $password=="docetajs"){
	include("docetajs.php");}


}
//kopet
?>

<!DOCTYPE html>
<html>
<head>
<head>
    <meta charset="UTF-8">
    <title>PHP CRUD</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="styles.css">
</head>
</head>
<body>
<div class="login-body">
		<article class="container-login center-block">
			<section>
				<ul id="top-bar" class="nav nav-tabs nav-justified">
					<li class="active"><a href="#login-access">Login</a></li>
					<li><a href="#">Register</a></li>
					<li><a href="#">All Users</a></li>
				</ul>
				<div class="tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12">
					<div id="login-access" class="tab-pane fade active in">
						<h2><i class="glyphicon glyphicon-log-in"></i> Super WEB</h2>						
						<form method="post" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal">
							<div class="form-group ">
								<label for="login" class="sr-only">Email</label>
									<input type="text" class="form-control" name="username" id="login_value" 
										placeholder="User name" tabindex="1" value="" />
							</div>
							<div class="form-group ">
								<label for="password" class="sr-only">Password</label>
									<input type="password" class="form-control" name="password" id="password"
										placeholder="Password" value="" tabindex="2" />
							</div>
							<br/>
							<div class="form-group ">				
									<button type="submit" name="submit" id="submit" tabindex="5" class="btn btn-lg btn-primary">Login</button>
							</div>
						</form>			
					</div>
				</div>
			</section>
		</article>
	</div>
</body>
</html>
