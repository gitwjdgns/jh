<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width" initial -scale="1">
<title>Jh's Board</title>
<link rel="stylesheet" href="css/bootstrap.css">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="./js/login.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="main.php">Jh's Board</a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li class="active"><a href="main.php">Main</a></li>
<li><a href="list.php">Board</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Connect<span class="caret"></span></a>
<ul class="dropdown-menu">
<li class="active"><a href="loginjh.php">Login</a></li>
<li><a href="join.php">Sign Up</a></li>
</ul></li></ul></div></nav>
<div class="container">
<div class="col-lg-4"></div>
<div class="col-lg-4">
<div class="jumbotron" style="padding-top: 20px;">
<form name="loginSbmt" id="loginSbmt" method="POST" action="login_ok.php">
<h3 style="text-align: center">Login Window</h3>
<div class="col-lg-4"></div>
<div class="form-group">
<input type="text" class="form-control" placeholder="ID" name="id" maxlength="15"></div>
<div class="form-group">
<input type="password" class="form-control" placeholder="PW" name="pw" maxlength="20"></div>
<a href="#"><span class="btn btn-primary form-control" onclick="check_input()">Login</span></a>
</form></div></div></div></body>
</html>

