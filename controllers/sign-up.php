<?php

require_once("../db/db.php");

$name_user = $_POST['name_user'];
$firts_lastname_user = $_POST['firts_lastname_user'];
$second_lastname_user = $_POST['second_lastname_user'];
$username_user = $_POST['username_user'];
$email_user = $_POST['email_user'];
$password_user = $_POST['password_user'];
$confirm_password_user = $_POST['confirm_password_user'];

$query = "INSERT INTO user(name_user,firts_lastname_user,second_lastname_user,username_user,email_user,password_user,confirm_password_user) values('$name_user', '$firts_lastname_user', '$second_lastname_user','$username_user', '$email_user', '$password_user', '$confirm_password_user')";
$result = mysqli_query($conn, $query);


if (!$result) {
  echo "no";
} else {
  echo "no";
}



?>