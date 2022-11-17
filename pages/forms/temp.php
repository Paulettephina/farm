<?php
if (isset($_REQUEST['sub'])){
  include_once 'connect.php';
  $f_temp=$_REQUEST['fish_temp'];
  $f_hum=$_REQUEST['fish_hum'];
  $f_dev=$_REQUEST['f_dev'];
  $p_temp=$_REQUEST['pond_temp'];
  $p_hum=$_REQUEST['pond_hum'];
  $p_dev=$_REQUEST['pond_dev'];
  $a_temp=$_REQUEST['atm_temp'];
  $a_hum=$_REQUEST['atm_hum'];
  $a_dev=$_REQUEST['atm_dev'];
  $p_lev=$_REQUEST['pond_lev'];
  $p_ld=$_REQUEST['pond_ldev'];
  $t_lev=$_REQUEST['tank_lev'];
  $t_ld=$_REQUEST['tank_ldev'];
  $num=$_REQUEST['serial'];
  $kg=$_REQUEST['weight'];
  $tds=$_REQUEST['tds'];
  $tub=$_REQUEST['tub'];
  $tdsdev=$_REQUEST['tdsdev'];
  $tubdev=$_REQUEST['tubdev'];
  //$insert=$con->query("INSERT into weight(`weight`,Serial_No_Dev) values('$kg','$num')");
  $insert_level=$con->query("INSERT into water_level(Pond_Water_level,Tank_Water_level,serial_pond_device,
  serial_tank_device)
   values('$p_lev','$t_lev','$p_ld','$t_ld')");
$insert_weight=$con->query("INSERT into weight(`weight`,Serial_No_Dev) values('$kg','$num')");

  $insertf=$con->query("INSERT into fish_temperature(Fish_Temperature,Fish_Humidity,Serial_temp_device)
  values('$f_temp','$f_hum','$f_dev')");
// $insert_tds=$con->query("INSERT into tds_tub values('','tds','tub','tdsdev','tubdev','')");
  $insertp=$con->query("INSERT into pond_temperature(`Pond_Temperature(cer)`,`Pond_Humidity(%)`,Serial_No_dev)
  values('$p_temp','$p_hum','$p_dev')");

  $inserta=$con->query("INSERT into atmospheric(`Atmospheric_Temp(cer)`,`Atmospheric_Hum(%)`,Serial_No_dev)
  values('$a_temp','$a_hum','$a_dev')");

if (!$insertf) {

  echo "<script>alert('failed to record fish data')</script>";
  }
  elseif (!$insertp)
     {
  echo "<script>alert('failed to record pond data')</script>";

    }
    else if (!$inserta)
       {
  echo "<script>alert('failed to record atmospheric data')</script>";

      }
  //      elseif (!$insert_tds)
  //    {
  // echo "<script>alert('failed to record Tds data ')</script> ";

  //   }
    else if (!$insert_weight)
       {
  echo "<script>alert('failed to record weight data')</script>";

       }
       else if (!$insert_level)
       {
  echo "<script>alert('failed to record water level data')</script>";

       }
    else {
      echo "<script>alert('well done!! all data have been recorded');</script>";
      header("refresh:1;url=temperature.html");

    }

}
?>
