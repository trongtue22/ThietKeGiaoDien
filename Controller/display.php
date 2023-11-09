<?php 
// Call the connection DB
// include('../Model/connection.php');

// Create a function to display data
function display()
{
    // Take the $conn from the include() => So the $conn can be called from outside the function not being seen as a seprate number 
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM thongtinweb");
    return $result;
}


?>





