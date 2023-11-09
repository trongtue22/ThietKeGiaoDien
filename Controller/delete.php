<?php 

// Call the connection => $Conn
include('../Model/connection.php');

function Delete_Data()
{
    global $conn;
    $id = $_GET['id'];
    $query = "DELETE FROM `thongtinweb` WHERE id=$id";
    $query_run = mysqli_query($conn,$query);
    if($query_run)
        { 
            
            // Translate the page back to TrangChu.php after we detele data  
            header("Location:../View/TrangChu.php");
            
        }
        else
        {
            echo "<script> alert('Xóa thất bại'); </script>";
        }
}






?>