<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="<?= base_url() . 'assets/newfrontend/assets/img/gallery/GIBS 13.png' ?>" alt="" style="height:890px; width:1800px;">
                <div class="carousel-container">
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="<?= base_url() . 'assets/newfrontend/assets/img/gallery/GIBS 16.png' ?>" alt="" style="height:890px; width:1800px;">
                <div class="carousel-container">
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="<?= base_url() . 'assets/newfrontend/assets/img/gallery/slide 3.jpg' ?>" alt="" style="height:960px; width:1800px;">
                <div class="carousel-container">
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="carousel-item">
                <img src="<?= base_url() . 'assets/newfrontend/assets/img/gallery/slide 4.jpg' ?>" alt="" style="height:1100px; width:1750px;">
                <div class="carousel-container">
                </div>
            </div>

            <!-- Slide 5 -->
            <div class="carousel-item">
                <img src="<?= base_url() . 'assets/newfrontend/assets/img/gallery/slide 5.jpg' ?>" alt="" style="height:1100px; width:1800px;">
                <div class="carousel-container">
                </div>
            </div>

            <!-- Slide 6 -->
            <div class="carousel-item">
                <img src="<?= base_url() . 'assets/newfrontend/assets/img/gallery/slide 6.jpg' ?>" alt="" style="height:1100px; width:1800px;">
                <div class="carousel-container">
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
</section>

<main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <h1><b> Cerita Mereka Selama Belajar di<span><b>GIBS</b></span></b></h1>
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active"><b>All</b></li>
                        <li data-filter=".filter-karyatifitas"><b>Karyatifitas</b></li>
                        <li data-filter=".filter-extrakurikuler"><b>Extrakurikuler</b></li>
                        <li data-filter=".filter-fasilitas"><b>Fasilitas Sekolah </b></li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">

                <?php foreach ($gallery as $gl) : ?>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $gl['category']; ?>">
                        <img src="<?php echo $this->crud_model->get_gallery_url($gl['image']); ?>" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><?= $gl['title']; ?></h4>
                            <p><?= $gl['description'] ?></p>
                            <a href="<?php echo $this->crud_model->get_gallery_url($gl['image']); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= $gl['title']; ?>"><i class="bx bx-plus"></i></a>

                        </div>
                    </div>

                <?php endforeach; ?>




            </div>

        </div>
    </section><!-- End Portfolio Section -->


</main>