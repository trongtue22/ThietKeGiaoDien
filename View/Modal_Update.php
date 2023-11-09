<?php
include('../Model/connection.php');
        $result = mysqli_query($conn, 'SELECT * FROM thongtinweb');
        while($row = mysqli_fetch_assoc($result))
        { 
         ?>            
         <div class='modal fade' id='update_form_<?php echo $row['id'];?>'>
         <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                  <h5 class='modal-title'>
                       Cập nhật
                  </h5>
             <button type='button' class='close'
               data-dismiss='modal' aria-label='Close'>
               <span aria-hidden='true'>
                 ×
               </span>
             </button>
            </div>
         <div class='modal-body'>
             <!-- Take data from user  -->
            <form action='' method='POST' enctype='multipart/form-data'>
              <input type='hidden' class='form-control' id='website-name' name='website-id' value='<?php echo $row['id'] ?>' required>
                <div class='form-group'>
                 <label for='website-name'>Tên trang web</label>
                 <input type='text' class='form-control' id='website-name' name='website-name' value='<?php echo $row['name'] ?>' required>
               </div>
               <div class='form-group'>
                 <label for='website-link'>Liên kết trang web</label>
                 <input type='url' class='form-control' id='website-link' name='website-link'  value='<?php echo $row['link'] ?>' required>
               </div>
               <div class='form-group'>
                 <label for='website-description'>Mô tả trang web</label>
                 <input type='text' class='form-control' id='website-description' name='website-description'  value='<?php echo $row['description'] ?>'  required></textarea>
               </div>
   
               <!-- This is a picture solving part -->
               <div class="form-group">
                    <label for="old-image">Ảnh trang web cũ:</label> <br>
                    <!-- Display the old image => Just for display only -->
                    <img src='./Upload/<?php echo $row['picture']; ?>' width="100" height="100" name='old-image'> <br>
                    <input type = 'hidden' value='<?php echo $row['picture']; ?>' name='website-image-old'> 
                                        
                    <!-- Take input as file images from the user -->
                    <label for="website-image">Upload ảnh mới:</label> <br>
                    <input type="file" class="form-control" id="website-image" name="website-image">
                </div>
                <div class='modal-footer'>
           
                <button type='button' class='btn btn-secondary'
                   data-dismiss='modal'>
                   Hủy
                 </button>

                 <!-- When user click button, data will be submit into Action='../Controller/create.php' -->
                 <button type='submit' class='btn btn-primary' name ='updatedata'>
                   Cập nhật
                 </button>

                </div>
            </form>
             <!-- End of form  -->
            </div>
          </div>
       </div>
     </div> 
    <?php 
  ;}
?>