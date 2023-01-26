<?php
if(count($_POST)>0)
{    
include 'conn.php';
$msg_name = $_POST['msg_name'];
$msg_date= $_POST['msg_date'];
$msg_text = $_POST['msg_text'];

$query = "insert into mesages (msg_name,msg_date,msg_text)
values ('$msg_name','$msg_date','$msg_text')";
$res = pg_query($dbCon, $query);

if($res) {
echo json_encode($res);
} else {
echo "Error: " . $query . "" . pg_error($dbCon);
}

}
?>