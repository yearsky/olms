<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <?php foreach ($sliders as $sl) : ?>
                <div class="carousel-item active">
                    <div class="carousel-container">
                        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
                            <div>
                                <h1>
                                    <b><?= $sl['title']; ?></b>
                                </h1>
                                <h2><?= $sl['description']; ?>
                                </h2>

                            </div>
                        </div>
                        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
                            <img src="<?php echo base_url() . 'assets/newfrontend/assets/img/bg 2.png'; ?>" width="65%" class="img-fluid animated" alt="" alt="">
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= work Section (Content 2)======= -->
    <section id="work" class="work">
        <div class="container">
            <div class="row" data-aos="zoom-in">
                <div class="col-lg-3 col-6 text-center">
                    <img src="<?php echo base_url() . 'assets/newfrontend/assets/img/icon1.png'; ?>" class="img-fluid" alt=""><br>
                    <h5><b>Program Islamic</b></h5>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <img src="<?php echo base_url() . 'assets/newfrontend/assets/img/icon2.png'; ?>" class="img-fluid" alt="">
                    <h5><b>Program & Keunggulan GIBS</b></h5>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <img src="<?php echo base_url() . 'assets/newfrontend/assets/img/icon3.png'; ?>" class="img-fluid" alt="">
                    <h5><b>Program Departemen SES</b></h5>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <img src="<?php echo base_url() . 'assets/newfrontend/assets/img/icon4.png'; ?>" class="img-fluid" alt="">
                    <h5><b>Ekstrakurikuler & Intra-kurikuler</b></h5>
                </div>

            </div>
        </div>
    </section> <!-- End work section -->


    <!-- ======= video Section (content 3)======= -->
    <section id="video" class="video" style="text-align: center;">
        <div class="container">
            <div class="section-title">
                <h2><br><b>So, what is your role to this world ?</b></h2><br>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/FxPiSYBwHQ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h1><b>GIBS AT A GLANCE</b></h1><br />
            </div>
        </div>
    </section><!-- End video Section -->

    <!-- ======= Picture Section (content 4) ======= -->
    <section id="picture" class="picture" style="background: #3DB2FF;">

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-0">

                <div class="col-lg-3 col-md-4">
                    <div class="picture-item">
                        <a href="<?php echo base_url() . 'assets/newfrontend/assets/img/gallery/GIBS 2.jfif'; ?>" class="picture-lightbox" data-gall="picture-item">
                            <img src="<?php echo base_url() . 'assets/newfrontend/assets/img/gallery/GIBS 13.png'; ?>" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="picture-item">
                        <a href="<?php echo base_url() . 'assets/newfrontend/assets/img/gallery/GIBS 13.png'; ?>" class="picture-lightbox" data-gall="picture-item">
                            <img src="<?php echo base_url() . 'assets/newfrontend/assets/img/gallery/GIBS 14.png'; ?>" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="picture-item">
                        <a href="<?php echo base_url() . 'assets/newfrontend/assets/img/gallery/GIBS 14.png'; ?>" class="picture-lightbox" data-gall="picture-item">
                            <img src="<?php echo base_url() . 'assets/newfrontend/assets/img/gallery/GIBS 14.png'; ?>" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="picture-item">
                        <a href="<?php echo base_url() . 'assets/newfrontend/assets/img/gallery/GIBS 15.png'; ?>" class="picture-lightbox" data-gall="picture-item">
                            <img src="<?php echo base_url() . 'assets/newfrontend/assets/img/gallery/GIBS 15.png'; ?>" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>



            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-text">
            </div>
        </div>
    </section><!-- End picture Section -->

    <!-- count section (content 6) -->
    <section id="counts" class="counts section-bg">
        <div class="container">
            <div class="row counters">
                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Students</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Courses</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Events</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Trainers</p>
                </div>
            </div>
        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Gallery prestasi Section (content 7) ======= -->
    <section id="gallery" class="gallery">
        <div class="container" data-aos="fade-up">
        </div>
        <div class="container-fluid" data-aos="fade-up">
            <div class="gallery-slider swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($prestasi as $pr) : ?>
                        <div class="swiper-slide">
                            <a href="<?php echo $this->crud_model->get_prestasi_url($pr['image']); ?>" class="gallery-lightbox" data-gall="gallery-carousel">
                                <img src="<?php echo $this->crud_model->get_prestasi_url($pr['image']); ?>" class="img-fluid" alt=""></a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Testimonials Section (content 8)======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">
            <div class="testimonials-slider swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>Radina Nur Syafa </h3>
                            <h4>VIII &amp; Girls</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                I am learning, I am participating, I am progressing
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>Naufal Wijaya</h3>
                            <h4>XI Social Science Boys</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Where Everyone is Exceptional
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>Rizki Najwa</h3>
                            <h4>ITS Surabaya</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                "Pendidikan karakter membuat saya memiliki perubahan dan memiliki pandangan masa depan, dengan giat belajar di GIBS"
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>Marsha Prifirani</h3>
                            <h4>Universitas Gajah Mada</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                " Dengan belajar yang giat dan tekun di GIBS saya bisa berhasil masuk kedalam Universitas Gajah Mada, dan dengan doa dari guru-guru"
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section><!-- End Testimonials Section -->


</main><!-- End #main -->