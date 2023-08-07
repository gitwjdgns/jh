<?php
    include "./config.php";
    include "./db_con.php";
    include "./login_check";
?>
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

<?php
    if(!$userid)
    {
        ?>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                aria-haspopup="true" aria-expanded="false">Connect<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="active">
                        <a href="loginjh.php">Login</a></li>
                        <li><a href="join.php">Sign up</a></li>
    </ul></li>
    <?php
    }
    else
    {
        $logged= $userid;
        ?>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                aria-haspopup="true" aria-expanded="false"><b><?=$logged ?></b>'s maintain<span class="caret">
    </span></a>
    <ul class="dropdown-menu">
        <li><a href="logout.php">Logout</a></li>
    </ul></li></ul>
    <?php
    }
    ?>
    </div></nav>

<div class="container">
    <div id="board_write">
<form action="write_ok.php" method="post">
    <table class="table table-striped" style="text-align: center; border: 1px solid #ddddda">
        <thead>
          <tr>
            <th colspan="2" style="background-color: #eeeeee; text-align: center;">
              <h3>게시판 글쓰기</h3>
            </th>
          </tr>
        </thead>
<tbody>
  <tr>
    <td><span class="pull-left">&nbsp;&nbsp;&nbsp;아이디: <b><?=$userid?></b></span></td>
  </tr>
  <tr>
    <td><input type="text" class="form-control" placeholder="제목" name="title" id="utitle" required></td>
  </tr>
  <tr>
    <td><input type="password" class="form-control" placeholder="비밀번호 설정" name="pw" id="upw" style="width: 150px;"></td>
  </tr>
  <tr>
    <td><textarea class="form-control" placeholder="내용" name="content" id="ucontent" style="height: 350px" required></textarea></td>
  </tr>
</tbody>
    </table>
<button type="submit" class="btn btn-primary">글쓰기</button>
</form>
    </div></div>
        </body>
</html>
