<?php
$ip = ($_SERVER["HTTP_X_FORWARDED_FOR"] != '') ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER['REMOTE_ADDR'];
$ping = shell_exec("ping -c1 ".$ip."");
$output = shell_exec("arp -n ".$ip."");
$mac = preg_split("/\s+/",$output);
$macs = array("00:00:00:00:00:1A","40:25:c2:2b:34:94");
$v=0;
for ($i=0;$i<count($macs);$i++) {if ($macs[$i] == $mac[8])  {echo "MAC Cadastrado";$v=1;}}
if ($v==0){echo "MAC Não Cadastrado";}
//echo "<br>".$mac[8];
?>