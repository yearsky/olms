<?php
$class_details = $this->crud_model->get_class_details_by_id($class_id)->row_array();
?>

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box ">
            <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo get_phrase('update_class'); ?></h4>
        </div>
    </div>
</div>

<div class="row justify-content-md-center">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="col-lg-12">
                    <h4 class="mb-3 header-title"><?php echo get_phrase('update_class_form'); ?></h4>

                    <form class="required-form" action="<?php echo site_url('admin/class/edit/' . $class_id); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="code"><?php echo get_phrase('class_title'); ?></label>
                            <input type="text" class="form-control" id="code" name="code" value="<?php echo $class_details['code']; ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="name"><?php echo get_phrase('class_title'); ?><span class="required">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $class_details['name']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="parent"><?php echo get_phrase('parent'); ?></label>
                            <select class="form-control select2" data-toggle="select2" name="parent" id="parent">
                                <option value="0"><?php echo get_phrase('none'); ?></option>
                                <?php foreach ($class as $cl) : ?>
                                    <?php if ($cl['parent'] == 0) : ?>
                                        <option value="<?php echo $cl['id_kelas']; ?>" <?php if ($class_details['parent'] == $cl['id_kelas']) echo 'selected'; ?>><?php echo $cl['name']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>



                        <button type="button" class="btn btn-primary" onclick="checkRequiredFields()"><?php echo get_phrase("submit"); ?></button>
                    </form>
                </div>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<script type="text/javascript">
    function checkCategoryType(category_type) {
        if (category_type > 0) {
            $('#thumbnail-picker-area').hide();
            $('#icon-picker-area').hide();
        } else {
            $('#thumbnail-picker-area').show();
            $('#icon-picker-area').show();
        }
    }

    $(document).ready(function() {
        var parent_category = $('#parent').val();
        checkCategoryType(parent_category);
    });
</script>