<?php
if(isset($_GET['ip'])){
  $ip = $_GET['ip'];
  snmpset($ip, "snmpcommunity", ".1.3.6.1.2.1.69.1.1.2.0", "i", 1);
  echo "Rebooted " . $ip;
} else{
?>

Enter the IP address of the modem you would like to reboot:
<br />
<form action="" method="get">
<input type='hidden' name='tool' value='reboot'>
<input type='hidden' name='page' value='cmtools'>
IP Address: <input type="text" name="ip"><br />
<input type="submit" value="Check">
</form>

<?php } ?>
