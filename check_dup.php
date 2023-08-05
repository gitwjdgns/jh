<?php
include_once "./db_con.php";

$id = $_POST['id'];
$response= array();

$sql = "SELECT COUNT(*) as count FROM user WHERE id = '$id'";
$result=qe($sql);

if($result)
{
    $row=mysqli_fetch_assoc($result);
    if($row['count']>0)
    {
        $response['data_check']=0;
    }
    else
    {
        $response['data_check']=1;
    }
}
else
{
    http_response_code(500);
    $response['data_check']=-1;
}

mysqli_close($db);

header('Content-Type: application/json');

echo json_encode($response);
?>