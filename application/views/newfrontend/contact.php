<main id="main">
    <section id="bg-contact" class="bg-contact">
        <div class="container">

            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center mb-5">
                            <h2 class="heading-section">CONTACT US</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="wrapper">
                                <div class="row no-gutters mb-5">
                                    <div class="col-md-7">
                                        <div class="contact-wrap w-100 p-md-5 p-4">
                                            <div id="form-message-warning" class="mb-4"></div>
                                            <div id="form-message-success" class="mb-4">
                                                Your message was sent, thank you!
                                            </div>
                                            <form method="POST" action="<?php echo site_url('home/sent_message_contact'); ?>" id="contactForm" name="contactForm" class="contactForm">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="label" for="name">Full Name</label>
                                                            <input type="text" required class="form-control" name="name" id="name" placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="label" for="email">Email Address</label>
                                                            <input type="email" required class="form-control" name="email" id="email" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="label" for="subject">Subject</label>
                                                            <input type="text" required class="form-control" name="subject" id="subject" placeholder="Subject">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="label" for="#">Message</label>
                                                            <textarea name="message" required class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="submit" value="Send Message" class="btn btn-primary">
                                                            <div class="submitting"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-5 d-flex align-items-stretch">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15933.925901316828!2d114.5989091!3d-3.2296474!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x97af7aefc2dd490f!2sGIBS%20(Global%20Islamic%20Boarding%20School)!5e0!3m2!1sen!2sid!4v1637367200244!5m2!1sen!2sid" width="600" height="490" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="dbox w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="bx bxl-periscope"></span>
                                            </div>
                                            <div class="text">
                                                <p><span>Address:</span> Jl. Trans Kalimantan, Sungai Lumbah Alalak, Barito Kuala Kalimantan Selatan 70582</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="dbox w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="bx bx-phone"></span>
                                            </div>
                                            <div class="text">
                                                <p><span>Phone:</span> <a href="tel:(0511) 3356777">(0511) 3356777</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="dbox w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="bx bxs-envelope"></span>
                                            </div>
                                            <div class="text">
                                                <p><span>Email:</span> <a href="marketing@gibs.sch.id">marketing@gibs.sch.id</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="dbox w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="bx bx-globe"></span>
                                            </div>
                                            <div class="text">
                                                <p><span>Website</span> <a href="https://www.gibs.sch.id/">gibs.sch.id</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </section>

</main>