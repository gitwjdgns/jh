<?php
	$id=$_POST['id'];
	$pw=$_POST['pw'];

	$con=mysqli_connect("localhost","root","0000","board_db");
	$sql="select * from user where id='$id'";

	$result=mysqli_query($con, $sql);

	$num_match=mysqli_num_rows($result);

	if(!$num_match) {
		echo(" <script>
				window.alert('This ID doesn't exist!')
				history.go(-1)
				</script> ");
		}
		else {
			$row=mysqli_fetch_array($result);
			$db_pw=$row['pw'];

			mysqli_close($con);

			if(!password_verify($pw, $db_pw))
			{
				echo("
					<script>
					window.alert('The password is wrong!')
					history.go(-1)
					</script> ");
					exit;
			}
			else{
				session_start();
				$_SESSION["userid"]=$row["id"];
				echo("
					<script>
					location.href='list.php';
					</script> ");
			}
		}
?>

