<?php 
// Call the connection => $Conn
include('../Model/connection.php');

    // Create a function 
    function Add_Data()
    {
        global $conn;
        $name =  $_POST['website-name'];
        $link = $_POST['website-link'];
        $description = $_POST['website-description'];
        
        // This is important => Take name of the files from user input 
        $filename = $_FILES['website-image']['name'];        // This is name of images file
        $tempname = $_FILES['website-image']['tmp_name'];   // This is link of file 
        $folder = '../View/Upload/'.$filename;             // This is folder where file will come to 
        move_uploaded_file($tempname, $folder);           // This how we move files to thata folder above 
        
        // Insert data to DB 
        $query = "INSERT INTO `thongtinweb`(`name`, `link`, `description`,`picture`) VALUES ('$name','$link','$description','$filename')";
        $query_run = mysqli_query($conn,$query);

        // If we insert into DB success
        if($query_run)
        { 
           
            // Translate the page back to TrangChu.php after we insert data into DB 
            header("Location:../View/TrangChu.php");
            echo "<script> alert('Thêm mới thành công'); </script>";
        }
        else
        {
            echo "<script> alert('Thêm mới thất bại'); </script>";
        }
    }
   

?>