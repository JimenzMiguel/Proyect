<?php

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'New-Proyect'
);
if (isset($conn)) {
  echo "database successfully connected";
} else {
  echo "error connecting to the database";
}
?>