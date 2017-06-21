<?php


$host='localhost';
$user='Shop.komp.kg';
$pawd='123';
$db="shop..komp.kg";

$connection = mysql_connect($host, $user, $pawd);
mysql_set_charset('utf8',$connection);
if(!$connection||!mysql_select_db($db,$connection))
{exit(mysql_error());
}

?>
