<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>NAI Creative</title>
        <link href="{{asset('css/home.css')}}" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
        <style>
        .center {
        display: block;
        margin-left: auto;
        margin-right: auto;width="50%" height="50%" 
        }
        #about{
    position: relative;
    top: -180px; /* Angka negatif menggeser ke atas */


        }
        </style>
        <style>
        .separator {
        display: flex;
        align-items: center;
        text-align: center;
        }


        .separator::after {
        content: '';
        flex: 1;
        border-bottom: 1px solid #000;
        }

        .separator:not(:empty)::before {
        margin-right: .25em;
        }

        .separator:not(:empty)::after {
        margin-left: .25em;
        }
        .col-color {
        background-color: #ffffff;
        }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
            <img src="assets/page1/Asset 49.png" alt="..." style="height: 3rem"/>
                <!-- <a class="navbar-brand fw-bold" href="#page-top">Start Bootstrap</a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-left me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#portofolio">Our Portopolio</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <nav class="navbar navbar-expand-lg  navbar-light">
        <div class="container">
            <!-- Toggler for small screens -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Content -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Empty left side to keep dropdown on right -->
                <ul class="navbar-nav me-auto"></ul>
                
                <!-- Admin Dropdown (kanan) -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi-person-circle me-1"></i> 
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Dashboard</a>
                            <a class="dropdown-item" href="#">Users</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                               Logout
                            </a>
                            <form id="logout-form" action="#" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

                    </button>
                    </ul>
                    
                </div>
            </div>
        </nav>
        
        <header class="masthead" id="home">
    <div class="text-content">
        <div class="text-warning">
            <h2 id="welcomeText">Welcome to NAI-Creative</h2>
        </div>
        <h1 id="helpText">We Help Your<br> Business With</h1>
        <div class="text-warning">
            <h1 id="creativityText">Creativity</h1>
        </div>
        <div class="fs-3 fw-light text-muted">
            <h5 id="descriptionText">NAI Creative's team of experts can work with you<br> 
                to develop a comprehensive plan that takes into<br>
                your specific needs and goals</h5>
        </div>
        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
            <button class="btn btn-outline-dark btn-lg rounded-pill px-5 py-3 fs-6 fw-bolder" 
                data-bs-toggle="modal" data-bs-target="#feedbackModal">
                <span class="d-flex align-items-center">
                    <span>Contact Us</span>
                </span>
            </button>
        </div>
    </div>

    <!-- Slideshow -->
    <div class="slideshow-container">
        <div class="slideshow">
           <img src="../assets/page1/tengah.png" class="slide" alt="Gambar Tengah">
           <img src="../assets/page1/kiri.png" class="slide" alt="Gambar Kiri">
           <img src="../assets/page1/kanan.png" class="slide" alt="Gambar Kanan">
        </div>
    </div>

   
</header








        <!-- Quote/testimonial aside --!>
        <aside class="text-center bg-warning rounded-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                <div class="container">
                    <div class="row gap-3">
                        <div class="col rounded-5"  style="background-color:#ffffff;">
                            <div class="text-center">
                            <img src="assets/fitur/Asset_mission.png" alt="Icon" class="icon-feature text-warning">
                                <h3 class="font-alt">Mission</h3>
                                <p class="text-muted mb-0">Helping our clients create their future</p>
                            </div>
                        </div>
                        <div class="col rounded-5"  style="background-color:#ffffff;">
                            <div class="text-center">
                            <img src="assets/fitur/Asset_vision1.png" alt="Icon" class="icon-feature text-warning">                              
                              <h3 class="font-alt">Vision</h3>
                                <p class="text-muted mb-0">To become the preferred people management consultant committed to support our clients to grow and improve their businesses</p>
                            </div>
                        </div>
                        <div class="col rounded-5"  style="background-color:#ffffff;">
                            <div class="text-center">
                            <img src="assets/fitur/Asset_motto1.png" alt="Icon" class="icon-feature text-warning"> 
                                <h3 class="font-alt">Motto</h3>
                                <p class="text-muted mb-0">Think strategically, <br> Act decisively</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </aside>
        <!-- App features section-->
        <section id="features">
            <div class="container">
                <div class="row justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <p class="lead fw-light mb-4">WHY NAI-CREATIVE?</p>
                                <h2 class="display-5 fw-bolder">We Are Combination Of <br><span class="text-warning d-inline">Passion And Expertise</span></h2>
                                <p class="text-muted">We are a group of professionals from various fields who offer <br> expertise in the required field with the aim of achieving client <br> satisfaction. Our team is committed to delivering creative and <br> innovative concepts, giving each project a unique look and feel <br> and helping each one stand out from the crowd.</p>
                            </div>
                        </div>
                </div>
                <div class="row gx-5 align-items-center gap-3">
                    <div class="col-lg-4 order-lg-1 mb-5 mb-lg-0 rounded-5" style="background-color:#e8e8da;">
                        <div class="container-fluid px-5 text-center"><br>
                            <div class="text-center">
                                <img src="assets/about/Asset 74.png" class="col-color rounded-5" alt="..." height="200">
                            </div><br>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-0">
                        <hr>
                        <h3>NAI Creative Experience is working with a team of professionals from different fields:</h3>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-0">dynamic logo design - motion graphic, web design, web development, video production, animation, photos, and other media production also skill training.</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="row align-items-center gap-3">
                    <div class="col-lg-4 order-lg-0 mb-5 mb-lg-0 rounded-5" style="background-color:#e8e8da;">
                        <div class="container-fluid px-5 text-center"><br>
                            <div class="text-center">
                                <img src="assets/fitur/Asset 90.png" class="col-color rounded-5" alt="..." height="200">
                            </div><br>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <hr>
                        <h3>Client satisfaction with the outcome is our goal</h3>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-0">Our team is committed to delivering creative and innovative concepts, giving each project a unique look and feel and helping each one stand out from the crowd.</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="container px-5">
                <div class="row gx-5 align-items-center gap-3">
                    <div class="col-lg-4 order-lg-1 mb-5 mb-lg-0 rounded-5" style="background-color:#e8e8da;">
                        <div class="container-fluid px-5 text-center"><br>
                            <div class="text-center col-color rounded-5">
                                <img src="assets/fitur/Asset 104.png" alt="..." height="100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/fitur/Asset 105.png" alt="..." height="100">
                            </div><br>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-0">
                        <hr>
                        <h3>Flexible and offer competitive prices for a project</h3>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-0">The was we work allows us to be flexible and offer competitive prices for any given project and is designed to maintain our market position in combination with high quality and successful results.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- App about section-->
        <section id="about" class="mb-5">
            <div class="container">
                <div class="row justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder">You Should to Know <br> About <span class="text-warning d-inline">us</span></h2>
                                <p class="text-muted">NAI Creative Has experience in the field of Technology, Graphic<br> Design and IT Training and has been trusted by many companies <br> in the government and private sectior on a national scale.</p>
                            </div>
                        </div>
                </div>
                <div class="container">
                    <div class="row gap-3">
                        <div class="col rounded-5"  style="background-color:#e8e8da;">
                            <div class="text-left"><br>
                                <h3 class="font-alt">Experience</h3>
                                <p class="text-muted mb-0">NAI Creative Has experience in the field of Technology, Graphic Design and IT Training and has been trusted by many companies in the government and private sectior on a national scale.</p><br>
                            </div>
                        </div>
                        <div class="col rounded-5"  style="background-color:#e8e8da;">
                            <div class="text-left"><br>
                                <h3 class="font-alt">Services</h3>
                                <p class="text-muted mb-0">Let NAI Creative's experts help transform your business through IT, Graphic Design, Motion Graphics, Video Editing, and Creative Strategy. We use their deep tech knowledge to align the transformation with your business goals</p><br>
                            </div>
                        </div>
                        <div class="col rounded-5"  style="background-color:#e8e8da;">
                            <div class="text-left"><br>
                                <h3 class="font-alt">Strategic</h3>
                                <p class="text-muted mb-0">Our strategic consulting will help you automate and digitalise operations, optimise the software portofolio, and implement the latest technologies</p><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- App services section-->
        <section id="services" class="bg-dark">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                <div class="container">
                    <div class="col-xxl-8">
                        <div class="text-center my-5">
                            <h2 class="display-5 fw-bolder" style="color:white;">NAI Creative provides <span class="text-warning d-inline">many services</span></h2>
                        </div>
                    </div>
                    <div class="row gap-3">
                        <div class="col rounded-5">
                            <div class="text-center">
                            <i class="fa-solid fa-tv icon-feature text-warning"></i>
                                <h4 class="font-alt" style="color:white;">Video Editing</h4>
                                <p class="mb-0" style="color:white;">Video editing services include editing, color correction, visual effects, sound editing and more. This service helps clients to create high-quality videos for promotional, advertising, documentation or other needs</p>
                            </div>
                        </div>
                        <div class="col rounded-5">
                            <div class="text-center">
                                <i class="fa-solid fa-photo-film icon-feature text-warning"></i>
                                <h4 class="font-alt" style="color:white;">Graphic Design</h4>
                                <p class="mb-0" style="color:white;">Graphic design services include creation of logos, brochures, posters, business cards, brand guidebooks, and others. This service helps clients to strengthen their brand to make attractive visual communications</p>
                            </div>
                        </div>
                        <div class="col rounded-5">
                            <div class="text-center">
                                <i class="fa-solid fa-clapperboard icon-feature text-warning"></i>
                                <h4 class="font-alt" style="color:white;">Motion Graphic</h4>
                                <p class="mb-0" style="color:white;">Motion graphics services include the creation of animations, video motion graphics, animate nfographics, and others. This service helps clients to create creative and interesting video content for promotional or advertising</p>
                            </div>
                        </div>
                    </div>
                    <br><br><br><br>
                    <div class="row gap-3">
                        <div class="col rounded-5">
                            <div class="text-center">
                                <i class="fa-brands fa-wordpress icon-feature text-warning"></i>
                                <h4 class="font-alt" style="color:white;">Web Development</h4>
                                <p class="mb-0" style="color:white;">Web development services cover responsive, secure and SEO-friendly website design and development. This service helps clients to enhance their online presence and offers good user experience to visitors.</p>
                            </div>
                        </div>
                        <div class="col rounded-5">
                            <div class="text-center">
                                <i class="fa-solid fa-laptop icon-feature text-warning"></i>
                                <h4 class="font-alt" style="color:white;">IT Training</h4>
                                <p class="mb-0" style="color:white;">IT training services include training and skills development in various IT fields, such as design training, and others. This service helps clients to increase the productivity and skills of their employees in the IT field.</p>
                            </div>
                        </div>
                        <div class="col rounded-5">
                            <div class="text-center">
                                <i class="fa-solid fa-square-poll-vertical icon-feature text-warning"></i>
                                <h4 class="font-alt" style="color:white;">SEO</h4>
                                <p class="mb-0" style="color:white;">Focusing on delivering high quality and valuable SEO services to improve online visibility and attract customers</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!-- App portofolio section-->
        <section  id="portofolio" class="text-center bg-warning">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                <div class="container">
                    <div class="row gap-3">
                        <div class="col rounded-5"  style="background-color:#ffffff;">
                            <div class="text-center"><br>
                                <div class="badge bg-dark text-white"><div class="text-uppercase"><p style="font-size:30px">Business Coorperation</p></div></div>
                                <p class="text-muted mb-0">Since starting its first track record, Nai Creative has worked with several companies that have trusted us, as follows</p>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                    <img src="assets/page1/Asset 43.png" alt="..." width="50%" height="50%" class="center">
                                    </div>
                                    <div class="col">
                                    <img src="assets/page1/Asset 42.png" alt="..." width="50%" height="50%" class="center">
                                    </div>
                                    <div class="col">
                                    <img src="assets/page1/Asset 61.png" alt="..." width="50%" height="50%" class="center">
                                    </div>
                                    <div class="col">
                                    <img src="assets/page1/Asset 62.png" alt="..."  height="70%" class="center">
                                    </div>
                                </div><br><br>
                                <div class="row">
                                    <div class="col">
                                    <img src="assets/page1/Asset 63.png" alt="..." width="50%" height="50%" class="center">
                                    </div>
                                    <div class="col">
                                    <img src="assets/page1/Asset 64.png" alt="..." width="50%" height="50%" class="center">
                                    </div>
                                    <div class="col">
                                    <img src="assets/page1/Asset 65.png" alt="..." width="50%" height="50%" class="center">
                                    </div>
                                    <div class="col">
                                    <img src="assets/page1/Asset 66.png" alt="..." class="center"><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!-- App section-->
        <section class="text-center"  style="background-color:#e8e8da;">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                <div class="container">
                    <div class="badge bg-dark text-white">
                        <div class="text-uppercase">
                            <p style="font-size:30px">We build Brands Products<br>For a digital World</p>
                        </div>
                    </div><br><br>
                    <button class="btn btn-outline-warning rounded-pill px-5 py-3 fs-6 fw-bolder" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        <span class="d-flex align-items-center">
                            <span>Contact Us</span>
                        </span>
                    </button>
                </div>
                </div>
            </div>
        </section>
        <!-- Call to action section-->
        <section id="contact" class="text-left">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                <div class="container">
                    <div class="map" id="contact">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.57195184591!2d107.62631507381082!3d-6.941649667951466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8641552bf41%3A0xe89f9a982f78a798!2sJl.%20Kliningan%20No.6%2C%20Turangga%2C%20Kec.%20Lengkong%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040264%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1688296696559!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div><br><br><br>
                    <div class="row align-items-start">
                        <div class="col-lg-6">
                            <img src="assets/page1/Asset 49.png" alt="..." style="height: 3rem" /><br>
                            <p><span class="text-warning d-inline">Get Direction</span><br>
                            Techno Park Building<br>
                            Jl. Kliningan 6 Bandung, Provinsi Jawa Barat, Indonesia 40264</p>
                        </div>
                        <div class="col-lg-3">
                        <p><span class="text-warning d-inline">Services Graphic Design :</span><br>
                                Video Editing<br>
                                Web Development<br>
                                IT Training<br>
                                Motion Graphic<br>
                                SEO
                        </div>
                        <div class="col-lg-3">
                        <p><span class="text-warning d-inline">Contact:</span><br>
                            Ivan Irianto<br>
                            081224544020<br>
                            lvanirianto@gmail.com</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-black text-left py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <a href="#!">NAI Creative - 2023</a>
                    <div class="mb-2"> Copyright &copy; All right reserved</div>
                </div>
            </div>
        </footer>
        <!-- Feedback Modal-->
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send feedback</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src={{ asset('js/home.js')}}></script>
        <script>
    // Fungsi untuk mengubah teks ke bahasa Inggris
    function translateToEnglish() {
        document.getElementById('welcomeText').innerText = 'Welcome to NAI-Creative';
        document.getElementById('helpText').innerHTML = 'We Help Your<br> Business With';
        document.getElementById('creativityText').innerText = 'Creativity';
        document.getElementById('descriptionText').innerHTML = "NAI Creative's team of experts can work with you<br> to develop a comprehensive plan that takes into<br> your specific needs and goals";
    }

    // Fungsi untuk mengubah teks ke bahasa Indonesia
    function translateToIndonesian() {
        document.getElementById('welcomeText').innerText = 'Selamat Datang di NAI-Creative';
        document.getElementById('helpText').innerHTML = 'Kami Membantu Bisnis Anda<br> Dengan';
        document.getElementById('creativityText').innerText = 'Kreativitas';
        document.getElementById('descriptionText').innerHTML = "Tim ahli NAI Creative dapat bekerja sama dengan Anda<br> untuk mengembangkan rencana komprehensif yang sesuai dengan<br> kebutuhan dan tujuan Anda";
    }
</script>
        <!-- Font Awesome JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
