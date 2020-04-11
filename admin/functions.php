<?php
//Query to confirm the database connection has been made 
function confirmQuery($result) {
  global $connection;
  if(!$result) {
    die("Query Failed. " . mysqli_error($connection));

  } 
}

