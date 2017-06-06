

<?php
// script.php

/*
 *  ' OR '1'='1
 *  ' OR '1'='1'; INSERT INTO `test` . `user` (`username`, `password`, `f_name`, `l_name`, `phone`) VALUES ('hacker', 'h@x0r', 'Evil', 'Hacker', '9996669999'); SELECT * FROM user WHERE '1'='1
 * ' OR '1'='1'; DROP TABLE `user`; SELECT * FROM user WHERE '1' = '1
 *
 *  [Source]
 *  [SQL Injection Demo](https://www.youtube.com/watch?v=J6v_W-LFK1c)
 */
?>

<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = 'root123';
$db_database = 'websites';

$connect = @mysqli_connect($db_host, $db_username, $db_password, $db_database) or die('Connection error: ' . mysqli_connect_error());

$query = "SELECT * FROM user WHERE username = '" . $_POST['form_input_username'] . "'";
// $query = "SELECT * FROM user WHERE username = '" . mysql_real_escape_string( $_POST['form_input_username'] ) . "'";

$result = @mysqli_query($connect, $query);
?>