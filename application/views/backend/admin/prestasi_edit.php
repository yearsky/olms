<!-- start page title -->
<?php
$prestasi_details = $this->db->get_where('prestasi', array('id' => $prestasi_id))->row_array();
// echo $slider_id;
?>

<div class="row ">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo get_phrase('edit_prestasi'); ?></h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<div class="row justify-content-center">
    <div class="col-xl-7">
        <div class="card">
            <div class="card-body">
                <div class="col-lg-12">
                    <h4 class="mb-3 header-title"><?php echo get_phrase('edit_prestasi_form'); ?></h4>

                    <form class="required-form" action="<?php echo site_url('admin/prestasi/edit/' . $prestasi_details['id']); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name"><?php echo get_phrase('title'); ?><span class="required">*</span></label>
                            <input type="text" class="form-control" id="title" value="<?= $prestasi_details['title'] ?>" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="name"><?php echo get_phrase('description'); ?><span class="required">*</span></label>
                            <input type="text" class="form-control" id="title" value="<?= $prestasi_details['description'] ?>" name="description" required>
                        </div>
                        <div class="form-group">
                            <label for="name"><?php echo get_phrase('image'); ?><span class="required">*</span></label>
                            <div class="input-group">
                                <div class="d-flex">
                                    <div class="">
                                        <img class="rounded-circle img-thumbnail" src="<?php echo $this->crud_model->get_prestasi_url($prestasi_details['image']); ?>" alt="" style="height: 50px; width: 50px;">
                                    </div>
                                    <div class="flex-grow-1 mt-1 pl-3">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="prestasi_image" id="slider_image" onchange="changeTitleOfImageUploader(this)" accept="image/*">
                                                <label class="custom-file-label ellipsis" for="user_image"><?php echo get_phrase('choose_image'); ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary" onclick="checkRequiredFields()"><?php echo get_phrase("submit"); ?></button>
                    </form>
                </div>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>