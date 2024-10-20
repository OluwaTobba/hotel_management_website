<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    

    <title>MTC Hotel</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- External Links -->
    <?php include "common/links.php" ?>

    <!-- Local Styling -->
    <style>

        /* Mobile View */
        @media (max-width: 768px) {
            .carousel-height {
                height: 250px; /* Adjust the height specifically for mobile */
            }

            /* Ensure the images fit within the container */
            .swiper-image {
                height: 100%;
                object-fit: cover; /* Ensures images cover the height while maintaining aspect ratio */
            }
        }
        .booking-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }
        @media screen and (max-width: 578px){
            .booking-form {
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style>
</head>
<body class="bg-light">

    <?php include "common/header.php" ?>

    <!-- Header Carousel -->
    <div class="container-fluid px-lg-4 mt-3">
        <div class="swiper swiper-container carousel-height">
            <div class="swiper-wrapper header-img">
                <div class="swiper-slide">
                    <img src="images/carousels/jagz-1.jpg" class="d-block w-100 swiper-image" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousels/jagz-2.jpg" class="d-block w-100 swiper-image" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousels/jagz-3.jpg" class="d-block w-100 swiper-image" />
                </div>
            </div>
        </div>
    </div>
    <!-- End of Header Carousel -->

    <!-- Booking Availability Form -->
    <div class="container booking-form">
        <div class="row">

            <div class="col-lg-12 p-4 bg-white shadow rounded">
                
                <h4 class="text-center mb-4">Book Your Room Now</h4>

                <form>

                    <div class="row align-items-end">

                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-In</label>
                            <input type="date" id="checkin" name="checkin" class="form-control shadow-none" required>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-Out</label>
                            <input type="date" id="checkin" name="checkin" class="form-control shadow-none" required>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Rooms</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">Four</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">Four</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>

                    </div>

                </form>

            </div>

        </div>
    </div>
    <!-- End of Booking Availability Form -->

    <!-- Rooms Section -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 mb-3">

                <div class="card shadow" style="width: 350px; margin: auto;">

                    <img src="images/rooms/room-img-1.jpg" class="card-img-top" alt="...">

                    <div class="card-body">

                        <h5>Single Room</h5>

                        <h6 class="mb-4">₦200,000 per night</h6>

                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 beds 
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Sofa 
                            </span>
                        </div>

                        <div class="facilities mb-5">
                            <h6 class="mb-4">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                WiFi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                TV
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC 
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Heater 
                            </span>
                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-4">Rating</h6>
                            <span class="badge rounded-pill bg-light text-dark">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-md-6 mb-3">

                <div class="card shadow" style="width: 350px; margin: auto;">

                    <img src="images/rooms/room-img-3.jpg" class="card-img-top" alt="...">

                    <div class="card-body">

                        <h5>Single Room</h5>

                        <h6 class="mb-4">₦300,000 per night</h6>

                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 beds 
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Sofa 
                            </span>
                        </div>

                        <div class="facilities mb-5">
                            <h6 class="mb-4">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                WiFi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                TV
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC 
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Heater 
                            </span>
                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-4">Rating</h6>
                            <span class="badge rounded-pill bg-light text-dark">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </span>
                        </div>
                        
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-md-6">

                <div class="card shadow" style="width: 350px; margin: auto;">

                    <img src="images/rooms/room-img-2.jpeg" class="card-img-top" alt="...">

                    <div class="card-body">

                        <h5>Single Room</h5>

                        <h6 class="mb-4">₦500,000 per night</h6>

                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 beds 
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Sofa 
                            </span>
                        </div>

                        <div class="facilities mb-5">
                            <h6 class="mb-4">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                WiFi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                TV
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC 
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Heater 
                            </span>
                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-4">Rating</h6>
                            <span class="badge rounded-pill bg-light text-dark">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-2 fw-bold shadow-none">SEE MORE ROOMS >>></a>
            </div>
        
        </div>
    </div>
    <!-- End of Rooms Section -->

    <!-- Facilities Section -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

    <div class="container">

        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">

            <div class="col-lg-2 col-md-2 text-center bg-white py-4 my-3 rounded shadow">
                <img src="images/features/wifi.png" alt="wifi icon" width="80px">
                <h5 class="mt-3">Wi-Fi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white py-4 my-3 rounded shadow">
                <img src="images/features/wifi.png" alt="wifi icon" width="80px">
                <h5 class="mt-3">Gym</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white py-4 my-3 rounded shadow">
                <img src="images/features/wifi.png" alt="wifi icon" width="80px">
                <h5 class="mt-3">Cinema</h5>
            </div>
            <!-- <div class="col-lg-2 col-md-2 text-center bg-white py-4 my-3 rounded shadow">
                <img src="images/features/wifi.png" alt="wifi icon" width="80px">
                <h5 class="mt-3">Swimming Pool</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white py-4 my-3 rounded shadow">
                <img src="images/features/wifi.png" alt="wifi icon" width="80px">
                <h5 class="mt-3">Bar</h5>
            </div> -->

            <div class="col-lg-12 text-center mt-5">
                <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-2 fw-bold shadow-none">SEE MORE FACILITIES >>></a>
            </div>

        </div>

    </div>
    <!-- End of Facilities Section -->

    <!-- Testimonials -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

    <div class="container mt-5">

        <div class="swiper testimonialSwiper">
            <div class="swiper-wrapper mb-5">

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center p-4">
                        <img src="images/features/club.jpg" alt="" width="30px">
                        <h6 class="m-0 ms-2">John Doe</h6>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. In molestiae ut aspernatur accusantium sit, vero repudiandae obcaecati deleniti delectus excepturi.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center p-4">
                        <img src="images/features/club.jpg" alt="" width="30px">
                        <h6 class="m-0 ms-2">John Doe</h6>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. In molestiae ut aspernatur accusantium sit, vero repudiandae obcaecati deleniti delectus excepturi.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center p-4">
                        <img src="images/features/club.jpg" alt="" width="30px">
                        <h6 class="m-0 ms-2">John Doe</h6>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. In molestiae ut aspernatur accusantium sit, vero repudiandae obcaecati deleniti delectus excepturi.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center p-4">
                        <img src="images/features/club.jpg" alt="" width="30px">
                        <h6 class="m-0 ms-2">John Doe</h6>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. In molestiae ut aspernatur accusantium sit, vero repudiandae obcaecati deleniti delectus excepturi.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center p-4">
                        <img src="images/features/club.jpg" alt="" width="30px">
                        <h6 class="m-0 ms-2">John Doe</h6>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. In molestiae ut aspernatur accusantium sit, vero repudiandae obcaecati deleniti delectus excepturi.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-2 fw-bold shadow-none">KNOW MORE >>></a>
            </div>
        </div>

    </div>
    <!-- End of Testimonials -->

    <!-- Contact Us Section -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">CONTACT US</h2>

    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63311.10594247615!2d3.772379719769918!3d7.360160914536143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10398c4696f9b91b%3A0xf1010bd27084c3b3!2sOluyole%2C%20Ibadan%2C%20Oyo!5e0!3m2!1sen!2sng!4v1728828574599!5m2!1sen!2sng" loading="lazy"></iframe>
            </div>

            <div class="col-lg-4 col-md-4">

                <div class="bg-white p-4 rounded">
                    <h5>Call/Chat Us:</h5>
                    <a href="tel: +2349154680747" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-outbound-fill"></i> +2349154680747
                    </a>
                    <br>
                    <a href="https://wa.me/+2348141993288" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-whatsapp"></i> +2348141993288
                    </a>
                </div>
                
                <div class="bg-white p-4 rounded">
                    <h5>Follow Us:</h5>
                    <a href="https://www.instagram.com/mtcinc2023" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i> MTC Templates
                        </span>
                    </a>
                    <br>
                    <a href="https://x.com/@mtcinc2023" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter-x me-1"></i> MTC Templates
                        </span>
                    </a>
                    <br>
                    <a href="https://linkedin.com/in/michaeltobba" class="d-inline-block">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-linkedin me-1"></i> MTC Templates CEO
                        </span>
                    </a>
                </div>

            </div>

        </div>
    </div>
    <!-- End of Contact Us Section -->

    <?php include("common/footer.php"); ?>

    <!-- Swiper JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay:{
                delay: 2500,
                disableOnInteraction: false,
            }
        });

        var swiper = new Swiper(".testimonialSwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }
            }
        });
    </script>

</body>
</html>