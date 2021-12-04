<section id="hero-view" class="hero-view">
    <div class="container">
        <div id="heroCarousel" class="hero-corouse" data-bs-ride="carousel">
            <img src="<?php echo base_url() . 'assets/newfrontend/assets/img/blog/icon3.png'; ?>" alt="">
            <h2>Blog View</h2>
        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- breadcrumb start -->
    <div class="breadcrumb-container-blog">
        <div class="container" data-aos="fade-up">
            <ol class="breadcrumb">
                <li class="breadcrumb-item-blog"><a href="index2.html">Home</a></li>
                <li class="breadcrumb-item-blog"><a href="blog-list.html">Blogs</a></li>
                <li class="breadcrumb-item-blog active" aria-current="page"></li>
            </ol>
        </div>
    </div>
    <!-- breadcrumb end -->
    <section id="bg-view-blog" class="bg-view-blog">
        <div class="container" data-aos="fade-up">
            <div class="row mt-4">
                <!-- blog main start -->
                <div class="col-xl-9 col-lg-9 col-md-8">

                    <div class="cv-course-container">
                        <!-- <br><h5>{{ $blog->blog_title }}</h5> -->

                        <div class="course-image my-3">
                            <img src="">
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-4 col-12">
                                <div class="instructor-clist m-0 pt-1">
                                    <div>
                                        <i class="fas fa-edit"></i>&nbsp;
                                        <span><i class="d-md-none d-sm-none d-lg-inline-block">Posted on</i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-12">
                                <div class="float-sm-right">
                                    <button type="button" class="btn btn-sm social-btn-sm facebook-btn">
                                        <i class="bx bxl-linkedin"></i>&nbsp;&nbsp;
                                        <span>Linkedin</span>
                                    </button>
                                    <button type="button" class="btn btn-sm social-btn-sm twitter-btn">
                                        <i class="bx bxl-instagram"></i>&nbsp;&nbsp;
                                        <span>Instagram</span>
                                    </button>
                                    <button type="button" class="btn btn-sm social-btn-sm google-btn">
                                        <i class="bx bxl-twitter"></i>&nbsp;&nbsp;
                                        <span>Tweet</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- <p>{!! $blog->description !!}</p> -->
                        <hr class="mb-5 mt-4">
                    </div>

                </div>
                <!-- blog main end -->

                <!-- blog sidebar start -->
                <div class="col-xl-3 col-lg-3 col-md-4 d-none d-md-block blok-view">
                    <h6 class="mt-4 underline-heading">BLOG ARCHIVES</h6>
                    <ul class="ul-no-padding">
                        <!-- @foreach ($archieves as $archieve) -->
                        <li class="my-2">
                            <!-- {{ $archieve->month_name.' '.$archieve->year.' ('.$archieve->blog_count.')' }} -->
                        </li>
                        <!-- @endforeach -->
                    </ul>
                </div>
                <!-- blog sidebar end -->
            </div>
    </section>

</main><!-- End #main -->