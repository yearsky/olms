<?php
$user_details = $this->user_model->get_user($this->session->userdata('user_id'))->row_array();
?>



<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <a href="<?php echo site_url('home') ?>"><img src="<?php echo base_url() . 'assets/newfrontend/assets/img/name.png' ?>" alt=""></a>

        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto <?php if ($this->uri->uri_string() == 'home') {
                                                    echo 'active';
                                                } ?>" href="<?php echo site_url('home') ?>"><b>HOME</b></a></li>
                <li><a class="nav-link scrollto <?php if ($this->uri->uri_string() == 'home/blog') {
                                                    echo 'active';
                                                } ?>" href="<?php echo site_url('home/blog') ?>"><b>GIBS ARJUNA</b></a></li>
                <li class="dropdown"><a href="" active><span><b>PROFILE</b></span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a class="nav-link scrollto" <?php if ($this->uri->uri_string() == 'home/about') {
                                                                echo 'active';
                                                            } ?> href="<?php echo site_url('home/about') ?>"><b>About</b></a></li>
                        <li><a href="<?php echo site_url('home/programs') ?>" <?php if ($this->uri->uri_string() == 'home/programs') {
                                                                                    echo 'active';
                                                                                } ?>><b>Programs</b></a></li>
                        <li><a href="<?php echo site_url('home/gallery') ?>" <?php if ($this->uri->uri_string() == 'home/gallery') {
                                                                                    echo 'active';
                                                                                } ?>><b>Gallery</b></a></li>
                        <li><a href="<?php echo site_url('home/academic') ?>" <?php if ($this->uri->uri_string() == 'home/academic') {
                                                                                    echo 'active';
                                                                                } ?>><b>Academic</b></a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="<?= site_url('home/contact') ?>"><b>CONTACT US</b></a></li>
                <li><a class="getstarted scrollto" href="<?php echo site_url('home/login'); ?>"><b>Login / Sign Up</b></a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->