<div class='modal fade' id='exampleModal'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title'>
                    Thêm trang web mới
                </h5>
                <button type='button' class='close'
                    data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>
                        ×
                    </span>
                </button>
            </div>
            <div class='modal-body'>
                <!-- Take data from user ../Controller/create.php -->
                <form action='' method='POST' enctype="multipart/form-data">
                    <div class='form-group'>
                        <label for='website-name'>Tên trang web</label>
                        <input type='text' class='form-control' id='website-name' name='website-name' required>
                    </div>
                    <div class='form-group'>
                        <label for='website-link'>Liên kết trang web</label>
                        <input type='url' class='form-control' id='website-link' name='website-link' required>
                    </div>
                    <div class='form-group'>
                        <label for='website-description'>Mô tả trang web</label>
                        <textarea class='form-control' id='website-description' name='website-description' required></textarea>
                    </div>

                    <!-- This is a picture of user will add into DB -->
                    <div class='form-group'>
                        <label for='website-image'>Ảnh trang web</label>
                        <!-- Take input is file images from user -->
                        <input type='file' class='form-control' id='website-image' name='website-image' required>
                    </div>

                      
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary'
                            data-dismiss='modal'>
                            Hủy
                        </button>
                        <!-- When the user clicks the button, the data will be submitted to Action="../Controller/create.php" => Name is key for POST -->
                        <button type='submit' name='submitdata' class='btn btn-primary'>
                            Thêm
                        </button>
                    </div>
                   
                </form>
                <!-- End of form  -->
            </div>
        </div>
    </div>
</div>