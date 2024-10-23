<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    

    <title>Contact Us | MTC Hotel</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- External Links -->
    <?php include "common/links.php" ?>

</head>
<body class="bg-light">

    <?php include "common/header.php" ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum sit doloremque <br> rem voluptates nemo soluta laboriosam cum, voluptatem iure amet?
        </p>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6 px-4 mb-5">
                <div class="bg-white rounded shadow p-4">

                    <!-- <h5 class="mt-2 mb-3">You can find us here:</h5> -->

                    <iframe class="w-100 rounded mb-3" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63311.10594247615!2d3.772379719769918!3d7.360160914536143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10398c4696f9b91b%3A0xf1010bd27084c3b3!2sOluyole%2C%20Ibadan%2C%20Oyo!5e0!3m2!1sen!2sng!4v1728828574599!5m2!1sen!2sng" loading="lazy"></iframe>

                    <h5 class="mt-2">Locate Us</h5>
                    <a href="https://maps.app.goo.gl/j4gTtrT7QbxE2fHZ9" class="text-decoration-none d-inline-block text-dark mb-2" target="_blank">
                        <i class="bi bi-geo-alt-fill"></i> Oluyole Estate, Ibadan, Nigeria.
                    </a>

                    <h5 class="mt-3">Send Us a Mail</h5>
                    <a href="mailto: michtobbacaresinc@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> michtobbacaresinc@gmail.com
                    </a>
                    
                    <h5 class="mt-3">Call/WhatsApp Us</h5>
                    <a href="tel: +2349154680747" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-outbound-fill"></i> +234 915 468 0747
                    </a>
                    <br>
                    <a href="https://wa.me/+2348141993288" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-whatsapp"></i> +234 814 199 3288
                    </a>

                    <h5 class="mt-3">Follow Us</h5>
                    <a href="https://www.instagram.com/mtcinc2023" class="d-inline-block text-dark fs-5 me-2" target="_blank">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                    <a href="https://x.com/@mtcinc2023" class="d-inline-block text-dark fs-5 me-2" target="_blank">
                        <i class="bi bi-twitter-x me-1"></i>
                    </a>
                    <a href="https://linkedin.com/in/michaeltobba" class="d-inline-block text-dark fs-5" target="_blank">
                        <i class="bi bi-linkedin me-1"></i>
                    </a>

                </div>
            </div>

            <div class="col-lg-6 col-md-6 px-4 mb-5">
                <div class="bg-white shadow rounded p-4">
                    <h5>Send a Message</h5>
                    <form action="">
                        <div class="mt-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Message Body</label>
                            <textarea type="text" class="form-control shadow-none" rows="11" style="resize: none;"></textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-dark mt-4">SEND</button>
                        </div>
                    </form>
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