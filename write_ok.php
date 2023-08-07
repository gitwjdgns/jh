<?php
    include "./config.php";
    include "./db_con.php";

    $name=$userid;
    $date=date('Y-m-d');
    $userpw=password_hash($_POST['pw'], PASSWORD_DEFAULT);
    $title=$_POST['title'];
    $content=$_POST['content'];

    qe("insert jh_board set
    name='".$name."',
    pw='".$userpw."',
    title='".$title."',
    content='".$content."',
    date='".$date."',
    ");
?>
<script>
  alert("글쓰기에 성공했습니다!");
  location.href="list.php";
</script>
