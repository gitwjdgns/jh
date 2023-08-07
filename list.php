<?php
	include_once "./config.php";
    include_once "./db_con.php";

    if (isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;
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
			<div id="board_area"> 
			  <h1><b>자유게시판</b></h1><br>
			  <table class="table table-striped" style="text-align: center; border: 1px solid #ddddda">
			  	<tr>
					<th style="background-color: #eeeeee; text-align: center;">번호</th>
					<th style="background-color: #eeeeee; text-align: center;">제목</th>
					<th style="background-color: #eeeeee; text-align: center;">작성자</th>
					<th style="background-color: #eeeeee; text-align: center;">작성일</th>
					<th style="background-color: #eeeeee; text-align: center;">조회수</th>
			    </tr>

                <?php
                $sql2=qe("select * from board order by idx desc");
                    while($board=$sql2->fetch_array())
                    {
                        $title=$board["title"];
                        if(strlen($title)>30)
                        {
                            $title=str_replace($board["title"],mb_substr($board["title"],0,30,
                            "utf-8")."...",$board["title"]);
                        }
                    }
                    ?>
<!--게시판 목록 가져오기-->
<tbody>
			      	<tr>
			          <td width="70"><?=$board['idx']; ?></td>
			          <td width="500">
                        <span class="read_check" style="cursor:pointer"
                        data-action="./read.php?idx=<?=$board['num']?>" ><?
                        =$title?></span>
                            <td width="120"><?=$board['name'];?></td>
			                <td width="100"><?=$board['date'];?></td>
			                <td width="100"><?=$board['hit']; ?></td>
			        </tr>
                </tbody>
                </table>
                </div>

<script>
  document.addEventListener("DOMContentLoaded", function (){
    var readCheckElements = document.querySelectorAll(".read_check");

    readCheckElements.forEach(function (element) {
      element.addEventListener("click", function () {
        var action_url = element.getAttribute("data-action");
        console.log(action_url);

        window.location.href = action_url;
      });
    });
  });
</script>
	    
</body>
</html>

