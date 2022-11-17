<?php
if (isset($_REQUEST['sub'])) {
include 'connect.php';

$p_lev=$_REQUEST['pond_lev'];
$p_ld=$_REQUEST['pond_ldev'];
$t_lev=$_REQUEST['tank_lev'];
$t_ld=$_REQUEST['tank_ldev'];

$insert=$con->query("INSERT into water_level(Pond_Water_level,Tank_Water_level,serial_pond_device,
serial_tank_device)
 values('$p_lev','$t_lev','$p_ld','$t_ld')");
if (!$insert) {
echo "<script>alert('failed to insert')</script>";
}
else {
echo "<script>alert('data recorded')</script>";

}
}
?>
