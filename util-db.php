<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'hustonbr_hw3user', 'HustonB319', 'hustonbr_HW3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
