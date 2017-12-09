<?php
$host="localhost";
$user="flatstud_cimol";
$passwd="Janganambilcpanelku:p";
$db="flatstud_cimol";
$koneksi=mysql_connect($host,$user,$passwd) or die (mysql_error());
mysql_select_db($db, $koneksi) or die (mysql_error());
?>