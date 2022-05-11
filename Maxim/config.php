<?php
  session_start();
  $host = "localhost"; /* Host name */
  $user = "root"; /* User */
  $password = ""; /* Password */
  $dbname = "db_assignment_abdullah"; /* Database name */

  $con_abdullah = mysqli_connect($host, $user, $password,$dbname);
  // Check connection
  if (!$con_abdullah) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>
