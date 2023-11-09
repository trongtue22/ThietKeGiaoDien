<?php 
    // Call the connection => $Conn
    include('../Model/connection.php');
   
    // Get id from button delete
    function Update_Data()
    {
        // Take data out of Update_Form to work with 
        global $conn;
        $id = $_POST['website-id'];
        $name =  $_POST['website-name'];
        $link = $_POST['website-link'];
        $description = $_POST['website-description'];
        
        // Data of file images: 
        $filename = $_FILES['website-image']['name'];        // Name of images => This will go to database 

        $tempname = $_FILES['website-image']['tmp_name'];   //  The path of images of  => This will working on local computer
        $folder = '../View/Upload/'.$filename;          // path for images to go => This is where pictures will go to save on 
        $old_filename = $_POST['website-image-old'];
        
        if ($filename !== '') {
            // Move images file to Upload folder on Local computer 
            move_uploaded_file($tempname, $folder);

            // Import function Update Images
            Update_Images($filename, $id, $name, $link, $description);
       
        } 
        else 
        {  
            // Import function Updates Images 
            Update_Images($old_filename, $id, $name, $link, $description);
        }
    }
    
    // Update_Imaages function => Use for update images depend on condition of user choose change images or not 
    function Update_Images($nameFile, $id, $name, $link, $description) // Take all the input from above to use and update 
    {     
         
        global $conn;
        $query = "UPDATE `thongtinweb` SET `name`='$name', `link`='$link', `description`='$description', `picture`='$nameFile' WHERE id=$id";
        $query_run = mysqli_query($conn, $query);
        if($query_run)
        { 
            header("Location:../View/TrangChu.php");
        } 
    }


?>