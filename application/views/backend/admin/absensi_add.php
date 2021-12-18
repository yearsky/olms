<!-- start page title -->
<?php
// var_dump($class);
?>
<div class="row ">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo get_phrase('add_new_absensi'); ?></h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<div class="row justify-content-center">
    <div class="col-xl-7">
        <div class="card">
            <div class="card-body">
                <div class="col-lg-12">
                    <h4 class="mb-3 header-title"><?php echo get_phrase('absensi_add_form'); ?></h4>

                    <form class="required-form" action="<?php echo site_url('admin/absensi_actions/add'); ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="parent"><?php echo get_phrase('Courses'); ?></label>
                            <select class="form-control select2" data-toggle="select2" name="courses" id="courses">
                                <option value="0"><?php echo get_phrase('Select Courses'); ?></option>
                                <?php foreach ($courses as $course) : ?>
                                    <option value="<?php echo $course['id']; ?>"><?php echo $course['title']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="parent"><?php echo get_phrase('teachers'); ?></label>
                            <select class="form-control select2" data-toggle="select2" name="teachers" id="teachers">
                                <option value="0"><?php echo get_phrase('Select Teachers'); ?></option>
                                <?php foreach ($teachers as $teacher) : ?>
                                    <option value="<?php echo $teacher['id_teachers']; ?>"><?php echo $teacher['first_name'] . ' ' . $teacher['last_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="parent"><?php echo get_phrase('Class'); ?></label>
                            <select class="form-control select2" data-toggle="select2" name="class" id="class">
                                <option value="0"><?php echo get_phrase('Select Class'); ?></option>
                                <?php foreach ($class as $cl) : ?>
                                    <?php if ($cl['parent'] <> 0) : ?>
                                        <option value="<?php echo $cl['id_kelas']; ?>"><?php echo $cl['name']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="parent"><?php echo get_phrase('Students'); ?></label>
                            <select class="form-control select2" data-toggle="select2" name="students" id="students">
                                <option value="">Select Students</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="parent"><?php echo get_phrase('Keterangan'); ?></label>
                            <select class="form-control select2" data-toggle="select2" name="keterangan" id="keterangan">
                                <option value="0">-- Choose Action--</option>
                                <option value="Hadir">Hadir</option>
                                <option value="Izin">Izin</option>
                                <option value="Sakit">Sakit</option>
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
    $(document).ready(function() {
        $('#class').change(function() {
            var kelas = $('#class').val();

            if (kelas != '') {
                $.ajax({
                    url: "<?php echo site_url('admin/fetch_student_class'); ?>",
                    method: "POST",
                    data: {
                        kelas: kelas
                    },
                    success: function(data) {
                        $('#students').html(data);
                        // $('#city').html('<option value="">Select City</option>');
                    }
                });
            } else {
                $('#students').html('<option value="">Select Students</option>');
                // $('#city').html('<option value="">Select City</option>');
                console.log('no id');
            }
        });
    });

    function checkCategoryType(category_type) {
        if (category_type > 0) {
            $('#thumbnail-picker-area').hide();
            $('#icon-picker-area').hide();
        } else {
            $('#thumbnail-picker-area').show();
            $('#icon-picker-area').show();
        }
    }
</script>