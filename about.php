<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    

    <title>About Us | MTC Hotel</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- External Links -->
    <?php include "common/links.php" ?>

</head>
<body class="bg-light">

    <?php include "common/header.php" ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum sit doloremque <br> rem voluptates nemo soluta laboriosam cum, voluptatem iure amet?
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">

            <div class="col-lg-6 col-md-5 mb-4 order-2 order-lg-1 order-md-2">
                <h3 class="mb-3">Lorem ipsum dolor sit amet.</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa nam ad facilis voluptate minus expedita est dicta magni doloremque iure officiis illum, et cum repellendus debitis cumque consectetur facere nobis, reiciendis accusamus!
                </p>
            </div>

            <div class="col-lg-5 col-md-5 mb-4 order-1 order-lg-2 order-md-2">
                <img src="images/rooms/room-img-1.jpg" alt="room-img-1" class="w-100">
            </div>

        </div>
    </div>

    <div class="container mt-5">
        <div class="row">

            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center aboutbox">
                    <img src="images/about/hotel-img.png" alt="hotel-icon" width="70px">
                    <h4 class="mt-3">200+ ROOMS</h4>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center aboutbox">
                    <img src="images/about/customers.png" alt="customers-icon" width="125px">
                    <h4 class="mt-3">1,000+ CUSTOMERS</h4>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center aboutbox">
                    <img src="images/about/reviews.png" alt="reviews-icon" width="94px">
                    <h4 class="mt-3">600+ REVIEWS</h4>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center aboutbox">
                    <img src="images/about/staffs.png" alt="staffs-icon" width="93px">
                    <h4 class="mt-3">300+ STAFFS</h4>
                </div>
            </div>

        </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">OUR MANAGEMENT TEAM</h3>
    <div class="container px-4">

        <div class="swiper teamSwiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide text-center overflow-hidden rounded">
                    <img src="images/management/team-1.jpg" alt="team-member-1" class="w-100 rounded-circle">
                    <h5 class="mt-2">John Doe</h5>
                </div>

                <div class="swiper-slide text-center overflow-hidden rounded">
                    <img src="images/management/team-1.jpg" alt="team-member-1" class="w-100 rounded-circle">
                    <h5 class="mt-2">John Doe</h5>
                </div>

                <div class="swiper-slide text-center overflow-hidden rounded">
                    <img src="images/management/team-1.jpg" alt="team-member-1" class="w-100 rounded-circle">
                    <h5 class="mt-2">John Doe</h5>
                </div>

                <div class="swiper-slide text-center overflow-hidden rounded">
                    <img src="images/management/team-1.jpg" alt="team-member-1" class="w-100 rounded-circle">
                    <h5 class="mt-2">John Doe</h5>
                </div>

                <div class="swiper-slide text-center overflow-hidden rounded">
                    <img src="images/management/team-1.jpg" alt="team-member-1" class="w-100 rounded-circle">
                    <h5 class="mt-2">John Doe</h5>
                </div>

                <div class="swiper-slide text-center overflow-hidden rounded">
                    <img src="images/management/team-1.jpg" alt="team-member-1" class="w-100 rounded-circle">
                    <h5 class="mt-2">John Doe</h5>
                </div>

            </div> <br>

            <div class="swiper-pagination"></div>

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