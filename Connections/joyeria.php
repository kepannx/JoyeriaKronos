<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_joyeria = "localhost";
$database_joyeria = "joyeria5_joyeria";
$username_joyeria = "joyeria5_kronos";
$password_joyeria = "25165258";
$joyeria = mysql_pconnect($hostname_joyeria, $username_joyeria, $password_joyeria) or trigger_error(mysql_error(),E_USER_ERROR); 
?>