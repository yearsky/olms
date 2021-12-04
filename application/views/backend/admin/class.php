<div class="row ">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo get_phrase('Class'); ?>
                    <a href="<?php echo site_url('admin/class_form/add_class'); ?>" class="btn btn-outline-primary btn-rounded alignToTitle"><i class="mdi mdi-plus"></i><?php echo get_phrase('add_new_class'); ?></a>
                </h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<div class="row">
    <?php foreach ($class->result_array() as $cl) :
        if ($cl['parent'] > 0)
            continue;
        $sub_class = $this->crud_model->get_sub_class($cl['id_kelas']); ?>
        <div class="col-md-6 col-lg-6 col-xl-4 on-hover-action" id="<?php echo $cl['id_kelas']; ?>">
            <div class="card d-block">
                <div class="card-body">
                    <h4 class="card-title mb-0">
                        <?php echo $cl['name']; ?></h4>
                    <small style="font-style: italic;">
                        <p class="card-text"><?php echo count($sub_class) . ' ' . get_phrase('sub_class'); ?></p>
                    </small>
                </div>

                <ul class="list-group list-group-flush">
                    <?php foreach ($sub_class as $sub_class) : ?>
                        <li class="list-group-item on-hover-action" id="<?php echo $sub_class['id_kelas']; ?>">
                            <span><i class="<?php echo $sub_class['font_awesome_class']; ?>"></i> <?php echo $sub_class['name']; ?></span>
                            <span class="category-action" id='category-delete-btn-<?php echo $sub_class['id_kelas']; ?>' style="float: right; margin-left: 5px; display: none; height: 20px;">
                                <a href="javascript::" class="action-icon" onclick="confirm_modal('<?php echo site_url('admin/class/delete/' . $sub_class['id_kelas']); ?>');"> <i class="mdi mdi-delete" style="font-size: 18px;"></i></a>
                            </span>
                            <span class="category-action" id='category-edit-btn-<?php echo $sub_class['id_kelas']; ?>' style="float: right; display: none; height: 20px;">
                                <a href="<?php echo site_url('admin/class_form/edit_class/' . $sub_class['id_kelas']); ?>" class="action-icon"> <i class="mdi mdi-pencil" style="font-size: 18px;"></i></a>
                            </span>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="card-body">
                    <a href="<?php echo site_url('admin/class_form/edit_class/' . $cl['id_kelas']); ?>" class="btn btn-icon btn-outline-info btn-sm" id="category-edit-btn-<?php echo $cl['id_kelas']; ?>" style="display: none;" style="margin-right:5px;">
                        <i class="mdi mdi-wrench"></i> <?php echo get_phrase('edit'); ?>
                    </a>
                    <a href="#" class="btn btn-icon btn-outline-danger btn-sm" id="category-delete-btn-<?php echo $cl['id_kelas']; ?>" style="float: right; display: none;" onclick="confirm_modal('<?php echo site_url('admin/class/delete/' . $cl['id_kelas']); ?>');" style="margin-right:5px;">
                        <i class="mdi mdi-delete"></i> <?php echo get_phrase('delete'); ?>
                    </a>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
    <?php endforeach; ?>
</div>

<script type="text/javascript">
    $('.on-hover-action').mouseenter(function() {
        var id = this.id;
        $('#category-delete-btn-' + id).show();
        $('#category-edit-btn-' + id).show();
    });
    $('.on-hover-action').mouseleave(function() {
        var id = this.id;
        $('#category-delete-btn-' + id).hide();
        $('#category-edit-btn-' + id).hide();
    });
</script>