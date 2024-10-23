<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    

    <title>Our Rooms | MTC Hotel</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- External Links -->
    <?php include "common/links.php" ?>

</head>
<body class="bg-light">

    <?php include "common/header.php" ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">

                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">

                    <div class="container-fluid flex-lg-column align-items-stretch">

                        <h5 class="mt-2">FILTERS</h5>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">

                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 16px;">CHECK AVAILABILITY</h5>
                                
                                <label class="form-label">Check-In</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                
                                <label class="form-label">Check-Out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>

                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 16px;">CHECK AVAILABILITY</h5>
                                
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1" checked>
                                    <label class="form-check-label" for="f1">Wi-Fi</label>
                                </div>

                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1" checked>
                                    <label class="form-check-label" for="f2">Spa</label>
                                </div>

                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Gym</label>
                                </div>

                                <div class="mb-2">
                                    <input type="checkbox" id="f4" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f4">Swimming Pool</label>
                                </div>
                            </div>

                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 16px;">GUESTS</h5>
                                
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Adults</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label">Children</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </nav>

            </div>

            <div class="col-lg-9 col-md-12 px-4">

                <div class="card mb-4 border-0 shadow">

                    <div class="row g-0 p-3 align-items-center">

                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/room-img-1.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <div class="card-body">

                                <h5 class="card-title mb-3">Standard Room</h5>

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

                                <div class="facilities mb-4">
                                    <h6 class="mb-1">Facilities</h6>
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

                                <div class="rating mb-3">
                                    <h6 class="mb-1">Ratings</h6>
                                    <span class="badge rounded-pill bg-light text-dark">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </span>
                                </div>

                            </div>
                        </div>
                        
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">₦130K per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>

                    </div>

                </div>

                <div class="card mb-4 border-0 shadow">

                    <div class="row g-0 p-3 align-items-center">

                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/room-img-3.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <div class="card-body">

                                <h5 class="card-title mb-3">Terrace Room</h5>

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

                                <div class="facilities mb-4">
                                    <h6 class="mb-1">Facilities</h6>
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

                                <div class="rating mb-3">
                                    <h6 class="mb-1">Ratings</h6>
                                    <span class="badge rounded-pill bg-light text-dark">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-half text-warning"></i>
                                    </span>
                                </div>

                            </div>
                        </div>
                        
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">₦250K per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>

                    </div>

                </div>

                <div class="card mb-4 border-0 shadow">

                    <div class="row g-0 p-3 align-items-center">

                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/room-img-2.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <div class="card-body">

                                <h5 class="card-title mb-3">Superior Room</h5>

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

                                <div class="facilities mb-4">
                                    <h6 class="mb-1">Facilities</h6>
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

                                <div class="rating mb-3">
                                    <h6 class="mb-1">Ratings</h6>
                                    <span class="badge rounded-pill bg-light text-dark">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </span>
                                </div>

                            </div>
                        </div>
                        
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">₦350K per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

    <?php include "common/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".teamSwiper", {
            slidesPerView: 4,
            spaceBetween: 40,
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
            breakpoints: {
                320: {
                    slidesPerView: 2,
                },
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 4,
                }
            }
        });
    </script>

</body>
</html>