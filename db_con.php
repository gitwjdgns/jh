<?php
    $db_id="root";
    $db_pw="0000";
    $db_name="board_db";
    $db_domain="localhost";
    $db=mysqli_connect($db_domain, $db_id, $db_pw, $db_name);

    if(!$db)
    {
        die("Connection failed: ". mysqli_connect_error());
    }

    function qe($sql)
    {
        global $db;
        return mysqli_query($db, $sql);
    }
?>