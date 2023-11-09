<?php 

// Creatae the function for search data
function Search_Data()
{
    global $conn; 
   // The word that user type in  
   $keyword = $_POST['search'];
   // If the data is empty
   if($keyword =='')
   {
     // This $result will print out all the data in Database => When the search is empty and user click "Go" 
     $result = display();
   } 		 	    	
	
   else
   {
        // This $result will print out the data by the keyword user type in 
        $result = mysqli_query($conn, "SELECT * FROM thongtinweb where name LIKE '%$keyword%' ");         
   }
   return $result;
}




?>