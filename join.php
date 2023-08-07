<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width" initial -scale="1">
<title>Jh's Board</title>
<link rel="stylesheet" href="css/bootstrap.css">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>

    function check_input()
    {
    const idInput = document.getElementById('id');
    const pwInput = document.getElementById('pw');
    const pwConfirmInput = document.getElementById('pw_confirm');
    const idMessage = document.getElementById('idMessage');
    const pwMessage = document.getElementById('pwMessage');

    if (!idInput.value) {
        alert('Please type your ID');
        idInput.focus();
        return;
    }

    if (!pwInput.value) {
        alert('Please type the password');
        pwInput.focus();
        return;
    }

    if (!pwConfirmInput.value) {
        alert('Please type the password_confirm');
        pwConfirmInput.focus();
        return;
    }

    if (pwInput.value !== pwConfirmInput.value) {
        alert("Password don't match.\nPlease try again");
        pwInput.focus();
        pwInput.select();
        return;
    }

    document.join.submit();
    }

    function reset_form()
    {
        document.join.id.value="";
        document.join.pw.value="";
        document.join.pw_confirm.value="";
        return;
    }
</script>
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
<li><a href="loginjh.php">Login</a></li>
<li><a href="join.php">Sign Up</a></li>
</ul></li></ul></div></nav>
<div class="container">
<div class="col-lg-4"></div>
<div class="col-lg-4">
<div class="jumbotron" style="padding-top: 20px;">
<form name="join" method="POST" action="join_ok.php">
<h3 style="text-align: center">Sign up Window</h3>
<div class="col-lg-4"></div>
<div class="form-group">
    <input type="text" class="form-control" placeholder="ID" name="id" id="id" maxlength="15" onblur="checkId()">
    //<button type="button" class="btn btn-primary" onclick="checkDup()">중복체크</button>
    <div id="idMessage" style="color: red;"></div>
</div>

<div class="form-group">
    <input type="password" class="form-control" placeholder="PW" name="pw" id="pw" maxlength="20" onblur="checkPw()">
    <div id="pwMessage" style="color: red;"></div>
</div>
    <input type="password" class="form-control" placeholder="PW_confirm" name="pw_confirm" id="pw_confirm" maxlength="20">
    <div class="form-group" style="text-align: center">

</div>

<span class="btn btn-primary form-control" onclick="check_input()">Sign up</span>&nbsp;
<span class="btn btn-primary form-control" onclick="reset_form()">Reset</span>
</form></div></div></div>
<script>
    function checkId()
    {
        const idInput= document.getElementById('id');
        const idMessage= document.getElementById('idMessage');

        if(!idInput.value)
        {
            idMessage.textContent= 'Please type your ID';
        }
        else
        {
            idMessage.textContent='';
        }
    }
    function checkPw()
    {
        const pwInput= document.getElementById('pw');
        const pwMessage= document.getElementById('pwMessage');

        if(!pwInput.value)
        {
            pwMessage.textContent= 'Please type the Password';
        }
        else
        {
            pwMessage.textContent='';
        }
    }

    // function checkDup()
    // {
    //     var id= document.getElementById('id').value;

    //     var xhr= new XMLHttpRequest();

    //     xhr.open("POST", "./check_dup.php", true);

    //     var params= "id="+encodeURI(id);

    //     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        
    //     xhr.onreadystatechange = function () {
    //     if (xhr.readyState == 4 && xhr.status == 200) {
    //         var data = JSON.parse(xhr.responseText);

    //         if (data.data_check===1) {
    //             document.getElementById('idMessage').innerHTML = "사용 가능한 아이디입니다.";
    //             document.getElementById('idMessage').style.color = "blue";
    //             //document.getElementById('idMessage').setAttribute("data-check", "1");

    //         } else if(data.data_check===0){
    //             document.getElementById('idMessage').innerHTML = "중복된 아이디입니다.";
    //             document.getElementById('idMessage').style.color = "red";
    //             //document.getElementById('idMessage').setAttribute("data-check", "0");
    //             document.getElementById('id').focus();
    //         }
    //         else
    //         {
    //             document.getElementById('idMessage').innerHTML = "오류가 발생했습니다.";
    //             document.getElementById('idMessage').style.color = "red";
    //             //document.getElementById('idMessage').setAttribute("data-check", "0");
    //         }
    //     }
    // };

    // xhr.send(params);
    // }

</script>
</body>
</html>
