<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo ucwords($page_title) . ' | ' . get_settings('system_name'); ?></title>
    <?php
    $seo_pages = array('course_page');
    if (in_array($page_name, $seo_pages)) :
        $course_details = $this->crud_model->get_course_by_id($course_id)->row_array(); ?>
        <meta name="keywords" content="<?php echo $course_details['meta_keywords']; ?>" />
        <meta name="description" content="<?php echo $course_details['meta_description']; ?>" />
    <?php else : ?>
        <meta name="keywords" content="<?php echo get_settings('website_keywords'); ?>" />
        <meta name="description" content="<?php echo get_settings('website_description'); ?>" />
    <?php endif; ?>

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon"> -->
    <link href="newfrontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url() . 'assets/newfrontend/assets/vendor/aos/aos.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/newfrontend/assets/vendor/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/newfrontend/assets/vendor/bootstrap-icons/bootstrap-icons.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/newfrontend/assets/vendor/boxicons/css/boxicons.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/newfrontend/assets/vendor/glightbox/css/glightbox.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/newfrontend/assets/vendor/swiper/swiper-bundle.min.css'; ?>" rel="stylesheet">
    <link href="<?= base_url() . 'assets/newfrontend/assets/vendor/remixicon-2/remixicon.css;' ?>" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/default/css/jquery.webui-popover.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/default/css/select2.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/default/css/slick.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/default/css/slick-theme.css'; ?>">
    <!-- font awesome 5 -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/default/css/fontawesome-all.min.css'; ?>">

    <link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/default/css/bootstrap-tagsinput.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/newfrontend/assets/css/main.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/default/css/responsive.css'; ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/global/toastr/toastr.css' ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.css" />

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url() . 'assets/newfrontend/assets/css/index2Style.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/newfrontend/assets/css/index1style.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/newfrontend/assets/css/style.css'; ?>" rel="stylesheet">

</head>

<body>
    <?php
    if ($this->session->userdata('user_login')) {
        include 'logged_in.php';
    } else {
        include 'logged_out.php';
    }
    include $page_name . '.php';
    include 'footer.php';
    include 'script_btm.php';
    ?>

</body>

</html>