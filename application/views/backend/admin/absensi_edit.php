<!-- start page title -->

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

                    <form class="required-form" action="<?php echo site_url('admin/absensi_actions/edit'); ?>" method="post" enctype="multipart/form-data">

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
                                    <option value="<?php echo $teacher['id_teachers']; ?>" <?php if ($absensi['teacher_id'] == $teacher['id_teachers']) echo 'selected'; ?>><?php echo $teacher['first_name'] . ' ' . $teacher['last_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="parent"><?php echo get_phrase('Class'); ?></label>
                            <select class="form-control select2" data-toggle="select2" name="class" id="class">
                                <option value="0"><?php echo get_phrase('Select Class'); ?></option>
                                <?php foreach ($class->result_array() as $cl) : ?>
                                    <optgroup label="<?php echo $cl['name']; ?>">
                                        <?php $sub_class = $this->crud_model->get_sub_class($cl['id_kelas']);
                                        foreach ($sub_class as $scl) : ?>
                                            <option value="<?php echo $scl['id_kelas']; ?>"><?php echo $scl['name']; ?></option>
                                        <?php endforeach; ?>
                                    </optgroup>
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


                        <p id="demo"></p>

                        <input type="hidden" name="absensi_id" value="<?php echo $absensi['id'] ?>" required>
                        <button type="button" class="btn btn-primary" onclick="checkRequiredFields()"><?php echo get_phrase("submit"); ?></button>
                    </form>
                </div>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<script type="text/javascript">
    $(document).ready(function() {
        //call function get data edit
        get_data_edit();
        // var teachers = $('#teachers').val();
        // document.getElementById("demo").innerHTML = teachers;

        $('#class').change(function() {
            var id = $('#class').val();
            var student_id = "<?php echo $absensi['student_id']; ?>";

            $.ajax({
                url: "<?php echo site_url('admin/get_student_class'); ?>",
                method: "POST",
                data: {
                    id: id
                },
                async: true,
                dataType: 'json',
                success: function(data) {

                    $('select[name="students"]').empty();

                    $.each(data, function(key, value) {
                        if (student_id == value.id_students) {
                            $('select[name="students"]').append('<option value="' + value.id_students + '" selected>' +
                                value.first_name + " " + value.last_name + '</option>').trigger('change');

                        } else {
                            $('select[name="students"]').append('<option value="' + value.id_students + '">' + value.first_name + " " + value.last_name + '</option>');
                        }
                    });

                }
            });
            return false;
        });

        //load data for edit
        function get_data_edit() {
            var absensi_id = $('[name="absensi_id"]').val();
            $.ajax({
                url: "<?php echo site_url('admin/get_absensi_edit'); ?>",
                method: "POST",
                data: {
                    absensi_id: absensi_id
                },
                async: true,
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(i, item) {
                        $('[name="courses"]').val(data[i].course_id).trigger('change');
                        // $('[name="teachers"]').val(data[i].teacher_id).trigger('change');
                        $('[name="keterangan"]').val(data[i].description).trigger('change');
                        $('[name="class"]').val(data[i].class_id).trigger('change');
                        // $('[name="students"]').val(data[i].student_id).trigger('change');
                    });
                }

            });
        }

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