<?php
  $DB_SERVER="localhost";
  $DB_USER="root";
  $DB_PASS="csec";
  $DB_NAME="quizzer";

  $db = new mysqli($DB_SERVER, $DB_USER, $DB_PASS, $DB_NAME);
  
  if ($db) {
    echo "";
  } else {
    echo "Connection Failed";
  }
  
?>
