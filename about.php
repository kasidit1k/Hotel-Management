<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HavenHub - ABOUT</title>
    <?php require('inc/link.php'); ?>
    <link rel="stylesheet" href="/css/style.css">
    <!-- Link swiper -->
    <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet">
    <style>
        .box {
            border-top-color: var(--teal) !important;
        }
    </style>
</head>

<body class="bg-light">
    <?php require('inc/header.php'); ?>


    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Ipsam aliquid illum laudantium <br> fugit officiis tenetur libero
            consequuntur necessitatibus ducimus soluta.
        </p>
    </div>

    <!-- container -->
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">KASIDIT NUNKONG</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Aperiam labore hic, fugiat dolores fugit deserunt quae.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Aperiam labore hic, fugiat dolores fugit deserunt quae.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/Profile001.png" class="w-100">
            </div>
        </div>
    </div>

    <!-- ข้อมูลเกี่ยวกับ -->
    <div class="container">
        <div class="row">
            <!-- ROOMS -->
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/hotel.svg" width="70px">
                    <h4>100+ ROOMS</h4>
                </div>
            </div>
            <!-- customers -->
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/customers.svg" width="70px">
                    <h4>200+ CUSTOMERS</h4>
                </div>
            </div>
            <!-- REVIEWS -->
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/rating.svg" width="70px">
                    <h4>90+ REVIEWS</h4>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/staff.svg" width="70px">
                    <h4>50+ STAFFS</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- MANAGEMENT TEAM -->
    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team.jpg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team.jpg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team.jpg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team.jpg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team.jpg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team.jpg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <?php require('inc/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 40,
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>

</html>