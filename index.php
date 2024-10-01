<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    

    <title>MTC Hotel</title>

    <!-- Bootstrap Styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Local Styling -->
    <link rel="stylesheet" href="css/common.css">
    <style>
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

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg nav-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">

        <div class="container-fluid">

            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="/index.php">MTC Hotel</a>

            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>

                <div class="d-flex" role="search">
                    <button type="button" class="btn btn-outline-dark me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                        Login
                    </button>
                    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#registerModal">
                        Register
                    </button>
                </div>

            </div>

        </div>

    </nav>
    <!-- End of Navbar -->
    
    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="modal-dialog">
            
            <div class="modal-content">
                <form action="">

                    <div class="modal-header">
                        <h1 class="modal-title fs-5 d-flex align-items-center" id="staticBackdropLabel">
                            <i class="bi bi-person-circle fs-3 me-2"></i> User Login
                        </h1>
                        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                            <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                        </div>
                    </div>
                
                </form>
            </div>

        </div>

    </div>
    <!-- End of Login Modal -->

    <!-- Registration Modal -->
    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="modal-dialog modal-lg">
            
            <div class="modal-content">
                <form action="">

                    <div class="modal-header">
                        <h1 class="modal-title fs-5 d-flex align-items-center" id="staticBackdropLabel">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i> New User Registration 
                        </h1>
                        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            Note: Your Details Must Match Your ID (NIN, National ID Card, Passport or Driving License). As it will be required during check-in. 
                        </span>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Picture</label>
                                    <input type="file" class="form-control shadow-none">
                                </div>
                                <div class="col-md-12 ps-0 mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control shadow-none" rows="2"></textarea>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Postal Code</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                            </div>
                        </div>

                        <div class="text-center my-1">
                            <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
                        </div>

                    </div>
                
                </form>
            </div>

        </div>

    </div>
    <!-- End of Registration Modal -->

    <!-- Header Carousel -->
    <div class="container-fluid px-lg-4 mt-3">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper header-img">
                <div class="swiper-slide">
                    <img src="images/carousels/jagz-1.jpg" class="d-block w-100" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousels/jagz-2.jpg" class="d-block w-100" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousels/jagz-3.jpg" class="d-block w-100" />
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

                    <img src="images/rooms/room-img-2.jpeg" class="card-img-top" alt="...">

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

                    <img src="images/rooms/room-img-3.jpg" class="card-img-top" alt="...">

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
                <a href="#" class="btn btn-sm btn-outline-dark rounded-2 fw-bold shadow-none">SEE MORE >>></a>
            </div>
        
        </div>
    </div>
    <!-- End of Rooms Section -->

    <!-- Facilities Section -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
    <!-- End of Facilities Section -->

    <br><br><br>
    <br><br><br>

    <!-- Bootstrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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
    </script>

</body>
</html>