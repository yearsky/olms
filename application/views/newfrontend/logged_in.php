<?php
$user_details = $this->user_model->get_user($this->session->userdata('user_id'))->row_array();
?>



<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="<?php echo site_url('home') ?>"><b>LMS <span>GIBS</span></b></a></h1>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto <?php if ($this->uri->uri_string() == 'home') {
                                                    echo 'active';
                                                } ?>" href="<?php echo site_url('home') ?>"><b>HOME</b></a></li>
                <li><a class="nav-link scrollto <?php if ($this->uri->uri_string() == 'home/blog') {
                                                    echo 'active';
                                                } ?>" href="<?php echo site_url('home/blog') ?>"><b>GIBS ARJUNA</b></a></li>
                <li class="dropdown"><a href="#!"><span><b>PROFILE</b></span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a class="nav-link scrollto" href="about.html"><b>About</b></a></li>
                        <li><a href="program.html"><b>Programs</b></a></li>
                        <li><a href="gallery.html"><b>Gallery</b></a></li>
                        <li><a href="academic.html"><b>Academic</b></a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="<?= site_url('home/contact') ?>"><b>CONTACT US</b></a></li>


                <li class="dropdown"><a href="#!"><span><b> <?php echo $user_details['first_name'] . ' ' . $user_details['last_name']; ?></b></span>
                        &nbsp;
                        <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="<?php echo site_url('home/my_courses'); ?>"><i class="far fa-gem"></i><?php echo get_phrase('my_courses'); ?></a></li>
                        <li><a href="<?php echo site_url('home/my_messages'); ?>"><i class="far fa-envelope"></i><?php echo get_phrase('my_messages'); ?></a></li>
                        <li><a href="<?php echo site_url('home/profile/user_profile'); ?>"><i class="fas fa-user"></i><?php echo get_phrase('user_profile'); ?></a></li>
                        <li><a href="<?php echo site_url('login/logout/user'); ?>"><?php echo get_phrase('log_out'); ?></a></li>
                    </ul>
                </li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->