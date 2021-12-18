<!-- start page title -->
<div class="row ">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo get_phrase('add_new'); ?></h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<div class="row justify-content-center">
    <div class="col-xl-7">
        <div class="card">
            <div class="card-body">
                <div class="col-lg-12">
                    <h4 class="mb-3 header-title"><?php echo get_phrase('prestasi_add_form'); ?></h4>

                    <form class="required-form" action="<?php echo site_url('admin/prestasi/add'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name"><?php echo get_phrase('title'); ?><span class="required">*</span></label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="name"><?php echo get_phrase('description'); ?><span class="required">*</span></label>
                            <input type="text" class="form-control" id="title" name="description" required>
                        </div>
                        <div class="form-group">
                            <label for="name"><?php echo get_phrase('image'); ?><span class="required">*</span></label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="slider_image" name="prestasi_image" accept="image/*" onchange="changeTitleOfImageUploader(this)">
                                    <label class="custom-file-label" for="user_image"><?php echo get_phrase('choose_image'); ?></label>
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