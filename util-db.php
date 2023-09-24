<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'parkwill_hw3user', 'Guava401!', 'parkwill_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
