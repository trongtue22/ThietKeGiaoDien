<?php
// Call the database => Take out the $Conn ( connection) for function to access
include('../Model/connection.php'); // => $Conn bien ket noi 

/*-----------------------------------------------------------The funtion show here------------------------------------------*/
    // 1) Call the Display function
    require('../Controller/display.php');
    // The function will execute and throw the value into the $result => $result now will carry that list  
    $result = display();
   
    // 2) Call the Create function 
    require('../Controller/create.php');
    // If the user click the button in the Modal Form      
    if(isset($_POST['submitdata']))
    {
        Add_Data();  
    }

    // 3) Call the delete function 
    require('../Controller/delete.php');
    if(isset($_GET['action']) && isset($_GET['id']))
    {    
        Delete_Data();
    }

    // 4) Call the Update function
    require('../Controller/update.php');

    if(isset($_POST['updatedata'])) // Data will go inside here 
    { 
        Update_Data();
    }

/*-----------------------------------------------------------The Modal Show Up here-----------------------------------------*/
// Call the Modal: (alawy use ' to use import )
require('Modal_Add.php');

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang quản lý </title>
    <!-- Link connect to bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Here is java code to help pop-up form to run up -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"> </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script> 
  </head>
  <body>
  <!-- Navbar start here -->
  <nav class="navbar navbar-expand-md bg-secondary">
        <div class="col-xl-5 col-xxl-3 col-md-3 col-md-6" id="search-container" style="margin-left: 5%;">
            <a href="#">
                <img class="botron" src="Menu/img/logo.png">
            </a>
        </div>
        <div class="container-fluid"><a class="navbar-brand" href="Menu/index.php">Home</a><button data-bs-toggle="collapse"
                class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#">Liên hệ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Công ty</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Fangpage</a></li>
                </ul>
            </div>
            <div style="float: right; margin-right: 8%;">
                <ul class="navbar-nav mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="signin.php">Signin</a></li>
                </ul>
            </div>

        </div>
    </nav>
  <!-- End of navbar -->
  <h2 style="text-align: center;">Danh sách trang web tìm việc </h2> 
    
  <!-- Button for Modal Update to show up  -->
  <div class="container my-3">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
            Thêm mới
        </button>
  </div> 
  
  <!-- ---------------------------------------------------------------The start of table data----------------------------------------------------------------------------------->
    <!-- Set up the table position-->
  <div class="container my-4">  
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col" style="border-bottom: 1px solid black;">STT</th>
          <th scope="col" style="border-bottom: 1px solid black;">Tên</th>
          <th scope="col" style="border-bottom: 1px solid black;">Link</th>
          <th scope="col" style="border-bottom: 1px solid black;">Mô Tả</th>
          <th scope="col" style="border-bottom: 1px solid black;">Ảnh</th>
          <th scope="col" style="border-bottom: 1px solid black;"></th>
        </tr>
      </thead>
      <tbody>
        <?php
                $dem = 0;
                 while ($row = mysqli_fetch_assoc($result)) 
                { 
                    $dem = $dem + 1; 
                    // $id = $row['id'];
        ?> 
                <!-- Table of Real Data SQL <td> -->
            <tr>  
                <th>   <?php echo $dem ?>         </th>
                <td>     <?php echo $row['name']  ?>  </td>                     
                <td>
                    <a href='<?php echo $row['link']; ?>' target='_blank'><?php echo $row['link']; ?></a>
                </td>
                <td>   <?php echo $row['description'] ?>      </td>
                                 <!-- Picture -->
                <td>  <img src='./Upload/<?php echo $row['picture']; ?>' width="100" height="100" >             </td>         

                <!-- Button => name is key for POST method  -->
                <td>
                    <button type='button' class='btn btn-warning' data-toggle='modal' data-target='#update_form_<?php echo $row['id']; ?>'>
                        Cập nhật
                    </button>

                    <a  onclick='return confirm("Bạn có muốn xóa ?");'  class='btn btn-danger' href="?action=delete&id=<?php echo $row['id']; ?>">Xóa</a>
                </td>
            </tr>
                 <!--The end of SQL table-->
        <?php
            } 
        ?>
      </tbody>
    </table>
  <div>
  <!-------------------------------------------------------------------------The end of table-------------------------------------------------------------------------------------------->
 
 <?php 
        // Something need more analysis Why it have to write in here => Call out the update model  
        require('Modal_Update.php');
    ?> 





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

