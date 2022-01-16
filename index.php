<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Website</title>


    <!-- Bootstrap Css 1 JS 2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Montserrat:wght@300&family=Mulish:wght@200;300;400;500&family=Open+Sans:wght@300;400;600&family=Raleway:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="./vendors/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="./vendors/css/owl.theme.default.min.css" rel="stylesheet" type="text/css">


    <!-- Magnificient Pop Up -->
    <link href="./vendors/css/magnific-popup.css" rel="stylesheet" type="text/css" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!-- Query Css -->
    <link href="css/query.css" rel="stylesheet" type="text/css">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0">

    <!-- Pre Loader -->
    <div id="pre-loader">
        <div class="loading-overlay">
            <div class="loading">&nbsp;</div>
        </div>
    </div>


    <!-- Start Navbar -->
    <nav id="navbar" class="navbar navbar-expand-md navbar-paddings fixed-top ">

        <a href="#" class="navbar-brand">
            <i class="fas fa-mug-hot brand-icons"></i>
            <span class="brands">coffee</span>
        </a>


        <button type="button" class="navbar-toggler navbuttons" data-bs-toggle="collapse" data-bs-target="#nav">
            <div class="bg-light lines1"></div>
            <div class="bg-light lines2"></div>
            <div class="bg-light lines3"></div>
        </button>


        <div class="navbar-collapse collapse justify-content-end" id="nav">


            <ul class="navbar-nav">
                <li class="nav-item"><a href="#header" class="nav-link navlinks text-white smooth-scroll">home</a></li>
                <li class="nav-item"><a href="#about" class="nav-link navlinks text-white smooth-scroll">about</a></li>
                <li class="nav-item"><a href="#menu-section" class="nav-link navlinks text-white smooth-scroll">menu</a>
                </li>
                <li class="nav-item"><a href="#gallery-section"
                        class="nav-link navlinks text-white smooth-scroll">gallery</a></li>

                <li class="nav-item"><a href="#customer-section"
                        class="nav-link navlinks text-white smooth-scroll">reviews</a></li>

                <li class="nav-item"><a href="#contact-section"
                        class="nav-link navlinks text-white smooth-scroll">contact</a></li>

                <li class="nav-item"><a href="#daily-section"
                        class="nav-link navlinks text-white smooth-scroll">blogs</a></li>

                <li class="nav-item "><a href="#header"
                        class="nav-link navlinks border-0 text-white modal-btn smooth-scroll">
                        <i class="fas fa-user "></i></a>
                </li>
            </ul>
        </div>

    </nav>
    <!-- End Navbar -->




    <!-- Modal Section -->
    <div id="modal" class="show-modal ">
        <div class="modal-overlay">
            <div class="modal-container">
                <button type="button" class="close-btn"><i class="fas fa-times"></i></button>
                <div class="modal-form">
                    <p><i class="fas fa-mug-hot "></i>coffee</p>
                    <p>Let's Start A New Great Day</p>
                    <form>
                        <div class="modal-form-group">
                            <input type="email" name="email" id="email" class="modal-input"
                                placeholder="enter your email" />
                        </div>

                        <div class="modal-form-group">
                            <input type="password" name="password" id="password" class="modal-input"
                                placeholder="enter your password" />
                        </div>

                        <div class="modal-form-group">
                            <div class="form-group">
                                <input type="checkbox" name="checkbox" id="checkbox" class="modal-checkbox" />
                                <label for="checkbox">remember me</label>
                            </div>


                            <div class="form-group">
                                <a href="#">forgot password?</a>
                            </div>
                        </div>


                        <div class="modal-form-group">
                            <button type="submit" class="modal-button">login now</button>
                        </div>
                        <div class="modal-form-group">
                            <div class="create-acc">
                                <span class="">don't have an account? <a href="#">create one!</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Start Header -->
    <header id="header">


        <div class="container">
            <div class="row align-items-center  min-vh-100">
                <div class="col-md-6">
                    <div class="hero-text-box">
                        <p class="text-lead">coffee house</p>
                        <h3>start your day with our coffee</h3>
                        <button type="button" class="header-btns">
                            get started
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- End Header -->



    <!-- Start About -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row align-items-center">

                <!-- About Sectoion 01 -->
                <div class="col-md-6 mx-auto about-ani-one">
                    <img src="./img/about-img-1.png" alt="about-img-1" class="img-fluid about-img">
                </div>

                <!-- About Sectoion 02 -->
                <div class="col-md-6 mx-auto about-second about-ani-two">
                    <h3>
                        why choose us?
                    </h3>

                    <h2>
                        The Best Coffee Maker In The Town
                    </h2>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolorem laborum itaque.
                        Perspiciatis in veniam illum deserunt, quos animi maiores nisi officiis amet accusantium soluta
                        a, excepturi vero obcaecati nobis.
                    </p>


                    <button type="button" class="about-btns">
                        read more
                    </button>


                    <section id="about-icon-section ">


                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-4">
                                <div class="first-icon-about">
                                    <i class="fas fa-coffee fa-3x"></i>
                                    <p>Best Coffee</p>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4 col-4">
                                <div class="first-icon-about">
                                    <i class="fas fa-shipping-fast fa-3x"></i>
                                    <p>Free Delievery</p>
                                </div>
                            </div>


                            <div class="col-md-4 col-lg-4 col-4">
                                <div class="first-icon-about">
                                    <i class="fas fa-headset fa-3x"></i>
                                    <p>24/7 Service</p>
                                </div>
                            </div>
                        </div>

                    </section>
                </div>

            </div>
        </div>
    </section>
    <!-- End About -->




    <!-- Start Menu -->
    <section id="menu-section" class="py-5">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Our Menu</h2>
                </div>
            </div>

            <div class="row">

                <!-- Menu Item 1 -->
                <div class="col-md-4  mx-auto">
                    <div class="menu-item text-center my-5 odd">
                        <div class="menu-img-container text-center">
                            <img src="./img/menu-1.png" alt="menu-1" class=" menu-img">
                        </div>
                        <h5>Coffee Bean</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, eos.</p>
                        <button type="button" class="menu-buttons">
                            read more
                        </button>
                    </div>
                </div>


                <!-- Menu Item 2 -->
                <div class="col-md-4  mx-auto">
                    <div class="menu-item text-center my-5 even">
                        <div class="menu-img-container text-center">
                            <img src="./img/menu-2.png" alt="menu-2" class=" menu-img">
                        </div>
                        <h5>Coffee Bean</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, eos.</p>
                        <button type="button" class="menu-buttons">
                            read more
                        </button>
                    </div>
                </div>


                <!-- Menu Item 3 -->
                <div class="col-md-4  mx-auto">
                    <div class="menu-item text-center my-5 odd">
                        <div class="menu-img-container text-center">
                            <img src="./img/menu-3.png" alt="menu-3" class=" menu-img">
                        </div>
                        <h5>Coffee Bean</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, eos.</p>
                        <button type="button" class="menu-buttons">
                            read more
                        </button>
                    </div>
                </div>


                <!-- Menu Item 4-->
                <div class="col-md-4  mx-auto">
                    <div class="menu-item text-center my-5 even">
                        <div class="menu-img-container text-center">
                            <img src="./img/menu-4.png" alt="menu-4" class=" menu-img">
                        </div>
                        <h5>Coffee Bean</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, eos.</p>
                        <button type="button" class="menu-buttons">
                            read more
                        </button>
                    </div>
                </div>



                <!-- Menu Item 5 -->
                <div class="col-md-4  mx-auto">
                    <div class="menu-item text-center my-5 odd">
                        <div class="menu-img-container text-center">
                            <img src="./img/menu-5.png" alt="menu-5" class=" menu-img">
                        </div>
                        <h5>Coffee Bean</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, eos.</p>
                        <button type="button" class="menu-buttons">
                            read more
                        </button>
                    </div>
                </div>




                <!-- Menu Item 6 -->
                <div class="col-md-4  mx-auto">
                    <div class="menu-item text-center my-5 even">
                        <div class="menu-img-container text-center">
                            <img src="./img/menu-6.png" alt="menu-6" class=" menu-img">
                        </div>
                        <h5>Coffee Bean</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, eos.</p>
                        <button type="button" class="menu-buttons">
                            read more
                        </button>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- End Menu -->




    <!-- Start Gallery  -->
    <section id="gallery-section" class="py-5">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center py-5">
                    <h2>Our Gallery</h2>
                </div>
            </div>


            <div class="row">

                <!-- Gallery Item 1 -->
                <div class="col-md-4">
                    <div class="gallery-item my-3">
                        <div class="gallery-img-container">
                            <img src="./img/g-img-1.jpg" alt="g-1" class=" gallery-img">
                        </div>

                        <div class="gallery-content text-center">
                            <h5>Morning Coffee</h5>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, dolore?
                            </p>

                            <a href="./img/g-img-1.jpg" class="test-popup-link">
                                read more
                            </a>
                        </div>
                    </div>
                </div>


                <!-- Gallery Item 2 -->
                <div class="col-md-4">
                    <div class="gallery-item my-3">
                        <div class="gallery-img-container">
                            <img src="./img/g-img-2.jpg" alt="g-2" class=" gallery-img">
                        </div>
                        <div class="gallery-content text-center">
                            <h5>Morning Coffee</h5>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, dolore?
                            </p>
                            <a href="./img/g-img-2.jpg" class="test-popup-link">
                                read more
                            </a>
                        </div>
                    </div>
                </div>


                <!-- Gallery Item 3 -->
                <div class="col-md-4">
                    <div class="gallery-item my-3">
                        <div class="gallery-img-container">
                            <img src="./img/g-img-3.jpg" alt="g-3" class=" gallery-img">

                        </div>
                        <div class="gallery-content text-center">
                            <h5>Morning Coffee</h5>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, dolore?
                            </p>
                            <a href="./img/g-img-3.jpg" class="test-popup-link">
                                read more
                            </a>
                        </div>
                    </div>
                </div>


                <!-- Gallery Item 4 -->
                <div class="col-md-4">
                    <div class="gallery-item my-3">
                        <div class="gallery-img-container">
                            <img src="./img/g-img-4.jpg" alt="g-4" class=" gallery-img">
                        </div>
                        <div class="gallery-content text-center">
                            <h5>Morning Coffee</h5>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, dolore?
                            </p>
                            <a href="./img/g-img-4.jpg" class="test-popup-link">
                                read more
                            </a>
                        </div>
                    </div>
                </div>



                <!-- Gallery Item 5 -->
                <div class="col-md-4">
                    <div class="gallery-item my-3">
                        <div class="gallery-img-container">
                            <img src="./img/g-img-5.jpg" alt="g-5" class=" gallery-img">
                        </div>
                        <div class="gallery-content text-center">
                            <h5>Morning Coffee</h5>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, dolore?
                            </p>
                            <a href="./img/g-img-5.jpg" class="test-popup-link">
                                read more
                            </a>
                        </div>
                    </div>
                </div>



                <!-- Gallery Item 6 -->
                <div class="col-md-4">
                    <div class="gallery-item my-3">
                        <div class="gallery-img-container">
                            <img src="./img/g-img-6.jpg" alt="g-6" class=" gallery-img">
                        </div>
                        <div class="gallery-content text-center">
                            <h5>Morning Coffee</h5>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, dolore?
                            </p>
                            <a href="./img/g-img-6.jpg" class="test-popup-link">
                                read more
                            </a>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- End Gallery -->




    <!-- Start Customer Reviews -->
    <section id="customer-section" class="py-5 ">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Customer Reviews</h2>
                </div>
            </div>





            <div id="customer-second" class="owl-carousel owl-theme py-5">
                <!-- Customer Item 1 -->
                <div class="">
                    <div class="customer-item text-center item">
                        <div class="customer-img-container">
                            <img src="./img/pic-1.png" alt="pic-1" class=" customer-img">
                        </div>
                        <h4>John Deo</h4>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ipsum eos?
                            Perspiciatis expedita laudantium blanditiis cupiditate at natus, quam alias?
                        </p>

                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>



                <!-- Customer Item 2 -->
                <div class="">
                    <div class="customer-item text-center item">
                        <div class="customer-img-container">
                            <img src="./img/pic-2.png" alt="pic-2" class=" customer-img">
                        </div>
                        <h4>John Deo</h4>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ipsum eos?
                            Perspiciatis expedita laudantium blanditiis cupiditate at natus, quam alias?
                        </p>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>




                <!-- Customer Item 3 -->
                <div class="">
                    <div class="customer-item text-center item">
                        <div class="customer-img-container">
                            <img src="./img/pic-3.png" alt="pic-3" class=" customer-img">
                        </div>
                        <h4>John Deo</h4>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ipsum eos?
                            Perspiciatis expedita laudantium blanditiis cupiditate at natus, quam alias?
                        </p>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>


                <!-- Customer Item 4 -->
                <div class="">
                    <div class="customer-item text-center item">
                        <div class="customer-img-container">
                            <img src="./img/pic-4.jpg" alt="pic-4" class=" customer-img">
                        </div>
                        <h4>John Deo</h4>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ipsum eos?
                            Perspiciatis expedita laudantium blanditiis cupiditate at natus, quam alias?
                        </p>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>



                <!-- Customer Item 5 -->
                <div class="">
                    <div class="customer-item text-center item">
                        <div class="customer-img-container">
                            <img src="./img/pic-5.jpg" alt="pic-5" class=" customer-img">
                        </div>
                        <h4>John Deo</h4>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ipsum eos?
                            Perspiciatis expedita laudantium blanditiis cupiditate at natus, quam alias?
                        </p>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>



                <!-- Customer Item 6 -->
                <div class="">
                    <div class="customer-item text-center item">
                        <div class="customer-img-container">
                            <img src="./img/pic-6.jpg" alt="pic-6" class=" customer-img">
                        </div>
                        <h4>John Deo</h4>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ipsum eos?
                            Perspiciatis expedita laudantium blanditiis cupiditate at natus, quam alias?
                        </p>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>




            </div>





        </div>
    </section>
    <!-- End Customer Reviews -->



    <!-- Start Contact -->
    <section id="contact-section" class="py-5">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Contact Us</h2>
                </div>
            </div>


            <div class="row py-5">

                <div class="col-md-4">
                    <div class="contact-item text-center">
                        <div class="contact-icon">
                            <i class="fas fa-phone fa-1x"></i>
                        </div>

                        <h3>Phone</h3>

                        <p>+123-456-7890</p>
                        <p>+111-222-3333</p>

                    </div>
                </div>



                <div class="col-md-4">
                    <div class="contact-item text-center">
                        <div class="contact-icon">
                            <i class="fas fa-envelope fa-1x"></i>
                        </div>
                        <h3>Email</h3>
                        <p>thuta@gmail.com</p>
                        <p>thuta123@gmail.com</p>
                    </div>
                </div>




                <div class="col-md-4">
                    <div class="contact-item text-center">
                        <div class="contact-icon">
                            <i class="fas fa-map fa-1x"></i>
                        </div>
                        <h3>Address</h3>
                        <p>yangon, myanmar - 400104</p>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15275.133384862509!2d96.12007087873764!3d16.837100800000012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194c6eac960cf%3A0xe0da946a5fd50f46!2sUNiQUE%20IT%2C%20Mobile%20%26%20Electronic%20Center%20(YGN-4%20Hlaing%20Branch)!5e0!3m2!1sen!2smm!4v1641041771590!5m2!1sen!2smm"
                            width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="contact-info">
                        <h3>Get In Touch</h3>

                        <form class="form">
                            <div class="contact-input-item">
                                <input type="text" name="name" id="name" placeholder="your name"
                                    class="contact-input" />
                            </div>

                            <div class="contact-input-item">
                                <input type="email" name="email" id="email" placeholder="email" class="contact-input" />
                            </div>


                            <div class="contact-input-item">
                                <input type="number" name="number" id="number" placeholder="phone"
                                    class="contact-input" />
                            </div>


                            <div class="contact-input-item">
                                <textarea placeholder="message" class="contact-input"></textarea>
                            </div>

                            <div class="contact-input-item">
                                <button type="submit" class="contact-buttons">
                                    send message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Contact -->


    <section id="daily-section" class="py-5">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Our Daily Posts</h2>
                </div>
            </div>


            <div class="daily-post py-5">
                <div class="row">

                    <div class="col-lg-4 col-md-6 my-2">
                        <div class="content-section">

                            <div class="daily-content text-center">
                                <div class="daily-img-container">
                                    <img src="./img/g-img-1.jpg" alt="g-1" class="daily-img">
                                </div>

                                <h4>Blog Title Goes Here.</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, illum?</p>

                                <button type="submit" class="contact-buttons">
                                    read more
                                </button>
                            </div>

                            <!-- Second Section -->
                            <div class="content-admin">
                                <div class="row">

                                    <div class="col-md-6 col-sm-6 col-6">
                                        <div class="content-admin-left bottom-admin text-center">
                                            <i class="fas fa-calendar-week"></i>
                                            <p> 21st May, 2022</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-6">
                                        <div class="content-admin-right bottom-admin text-center">
                                            <i class="fas fa-user"></i>
                                            <p>By Admin</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>




                    <div class="col-lg-4 col-md-6 my-2">
                        <div class="content-section second-daily-post">

                            <div class="daily-content text-center">
                                <div class="daily-img-container ">
                                    <img src="./img/g-img-2.jpg" alt="g-1" class="daily-img">
                                </div>
                                <h4>Blog Title Goes Here.</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, illum?</p>
                                <button type="submit" class="contact-buttons">
                                    read more
                                </button>
                            </div>



                            <div class="content-admin">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-6">
                                        <div class="content-admin-left bottom-admin text-center">
                                            <i class="fas fa-calendar-week"></i>
                                            <p> 21st May, 2022</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-6">
                                        <div class="content-admin-right bottom-admin text-center">
                                            <i class="fas fa-user"></i>
                                            <p>By Admin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>






                    <div class="col-lg-4 col-md-6 my-2">
                        <div class="content-section">

                            <div class="daily-content text-center">
                                <div class="daily-img-container">
                                    <img src="./img/g-img-3.jpg" alt="g-1" class="daily-img">
                                </div>
                                <h4>Blog Title Goes Here.</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, illum?</p>
                                <button type="submit" class="contact-buttons">
                                    read more
                                </button>
                            </div>



                            <div class="content-admin">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-6">
                                        <div class="content-admin-left bottom-admin text-center">
                                            <i class="fas fa-calendar-week"></i>
                                            <p> 21st May, 2022</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-6">
                                        <div class="content-admin-right bottom-admin text-center">
                                            <i class="fas fa-user"></i>
                                            <p>By Admin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>






                        </div>
                    </div>










                </div>
            </div>

        </div>
    </section>




    <section id="subscribe-section" class="py-5">
        <div class="container">
            <div class="row">

                <div class="col--md-12">
                    <div class="subscribe-content text-center">
                        <h2>NEWSLETTER</h2>
                        <p>subscribe for latest upadates</p>

                        <div class="subscribe-form">
                            <input type="text" name="text" id="text" class="subscribe-input"
                                placeholder="enter your email" autocomplete="off" />
                            <button type="submit" class="subscribe-buttons">
                                subscribe
                            </button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <!-- Footer Section -->
    <footer id="footer" class="text-center py-5">
        <p><i class="fas fa-mug-hot "></i>coffee</p>
        <h4>Created By <span class="outline">Mr. Thuta</span>N<span class="outline">yan</span> | All Rights Reserved!
        </h4>

        <div class="footer-icons pt-5">
            <a href="#" class="footer-link"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="footer-link"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="footer-link"><i class="fab fa-twitter"></i></a>
            <a href="#" class="footer-link"><i class="fab fa-github"></i></a>
        </div>
    </footer>






    <!-- Bootstrap Css 1 JS 2 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>


    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>


    <!-- Owl Carousel -->
    <script src="./vendors/js/owl.carousel.min.js" type="text/javascript"></script>


    <!-- Magnificient Pop Up -->
    <script src="./vendors/js/jquery.magnific-popup.min.js" type="text/javascript"></script>

    <!-- Way Point  -->
    <script src="vendors/js/jquery.waypoints.min.js" type="text/javascript"></script>

    <!-- jquery.easing.1.3.js -->
    <script src="./vendors/js/jquery.easing.1.3.js" type="text/javascript"></script>

    <!-- Custom Js -->
    <script src="js/app.js" type="text/javascript"></script>


</body>

</html>