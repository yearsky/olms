<?php

$my_courses = $this->user_model->my_courses()->result_array();

$categories = array();
foreach ($my_courses as $my_course) {
    $course_details = $this->crud_model->get_course_by_id($my_course['course_id'])->row_array();
    if (!in_array($course_details['category_id'], $categories)) {
        array_push($categories, $course_details['category_id']);
    }
}
?>

<section class="page-header-area my-course-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="page-title"><?php echo get_phrase('Dashboard'); ?></h1>
                <ul>
                    <!-- <li class="active"><a href="<?php echo site_url('home/my_courses'); ?>"><?php echo get_phrase('Today Courses'); ?></a></li> -->
                    <li class="active"><a href="<?php echo site_url('home/my_courses'); ?>"><?php echo get_phrase('all_courses'); ?></a></li>
                    <li><a href="<?php echo site_url('home/my_messages'); ?>"><?php echo get_phrase('my_messages'); ?></a></li>
                    <li><a href="<?php echo site_url('home/profile/user_profile'); ?>"><?php echo get_phrase('user_profile'); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="my-courses-area">
    <div class="container">

        <div class="row no-gutters" id="my_courses_area">
            <?php foreach ($my_courses as $my_course) :
                $course_details = $this->crud_model->get_course_by_id($my_course['course_id'])->row_array();
                $instructor_details = $this->user_model->get_all_user($course_details['user_id'])->row_array(); ?>

                <div class="col-lg-3">
                    <div class="course-box-wrap">
                        <div class="course-box">
                            <a href="<?php echo site_url('home/lesson/' . slugify($course_details['title']) . '/' . $my_course['course_id']); ?>">
                                <div class="course-image">
                                    <img src="<?php echo $this->crud_model->get_course_thumbnail_url($my_course['course_id']); ?>" alt="" class="img-fluid">
                                    <span class="play-btn"></span>
                                </div>
                            </a>
                            <div class="course-details">
                                <a href="<?php echo site_url('home/course/' . slugify($course_details['title']) . '/' . $my_course['course_id']); ?>">
                                    <h5 class="title"><?php echo ellipsis($course_details['title']); ?></h5>
                                </a>
                                <a href="<?php echo site_url('home/instructor_page/' . $instructor_details['id']); ?>">
                                    <p class="instructors"><?php echo $instructor_details['first_name'] . ' ' . $instructor_details['last_name']; ?></p>
                                </a>


                            </div>
                            <div class="row" style="padding: 5px;">
                                <div class="col-md-6">
                                    <a href="<?php echo site_url('home/course/' . slugify($course_details['title']) . '/' . $my_course['course_id']); ?>" class="btn"><?php echo get_phrase('course_detail'); ?></a>
                                </div>
                                <div class="col-md-6">
                                    <a href="<?php echo site_url('home/lesson/' . slugify($course_details['title']) . '/' . $my_course['course_id']); ?>" class="btn"><?php echo get_phrase('start_lesson'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>