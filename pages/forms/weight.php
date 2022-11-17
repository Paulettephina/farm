<?php
if (isset($_REQUEST['we'])) {
  # code...
include_once 'connect.php';

$num=$_REQUEST['serial'];
$kg=$_REQUEST['weight'];

$insert=$con->query("INSERT into weight(`weight`,Serial_No_Dev) values('$kg','$num')");
if (!$insert) {
echo "<script>alert('failed to insert')</script>";
}
else {
  echo"well";
}
}
?>
