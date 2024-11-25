<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HavenHub -HOME</title>
    <?php require ('inc/link.php');?>
    <!-- link Use Swiper from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Link CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="images/icontab.png" type="image/x-icon">

</head>

<body class="bg-light d-flex flex-column min-vh-100">
    <!-- Main -->
    <div class="main-content">
        <?php require('inc/header.php'); ?>
 
        <!-- Swiper Carourel -->
        <div class="container-fluid px-lg-4 mt-4">
            <!-- Swiper -->
            <div class="swiper swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/carousel/1.png" class="w-100 d-block">
                    </div>

                    <div class="swiper-slide">
                        <img src="images/carousel/2.png" class="w-100 d-block">
                    </div>

                    <div class="swiper-slide">
                        <img src="images/carousel/3.png" class="w-100 d-block">
                    </div>

                    <div class="swiper-slide">
                        <img src="images/carousel/4.png" class="w-100 d-block">
                    </div>

                    <div class="swiper-slide">
                        <img src="images/carousel/5.png" class="w-100 d-block">
                    </div>

                    <div class="swiper-slide">
                        <img src="images/carousel/6.png" class="w-100 b-block">
                    </div>
                </div>
            </div>
        </div>

        <!-- check availability form -->
        <div class="container availability-form">
            <div class="row">
                <div class="col-lg-12 bg-white shadow p-4 rounded">
                    <h5 class="mb-4">Check Booking Availability</h5> <!--ตรวจสอบห้องว่างของการจอง -->
                    <form>
                        <div class="row align-items-end">
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight: 500">Check-in</label>
                                <input type="date" class="form-control shadow-none">
                            </div>

                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight: 500">Check-out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>

                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight: 500">Adult</label> <!-- ผู้ใหญ่ -->
                                <select class="form-select shadow-none">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="col-lg-2 mb-3">
                                <label class="form-label" style="font-weight: 500">Children</label> <!-- เด็ก -->
                                <select class="form-select shadow-none">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
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

        <!-- Our Rooms -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
        <div class="container">
            <div class="row">

                <!---------------------Card room1----------------------->
                <!---------------------Card room1----------------------->
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="images/rooms/1.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Simple Room Name</h5>
                            <h6 class="mb-4">฿200 per night</h6>
                            <!--Features-->
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    3 Sofa
                                </span>
                            </div>

                            <!--Facilities-->
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Television
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Room headter <!--เครื่องทำความร้อนในห้อง-->
                                </span>
                            </div>

                            <!-- guests (แขก) -->
                            <div class="guests mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    4 Children
                                </span>
                            </div>

                            <!-- Rating -->
                            <div class="rating mb-4">
                                <h6 class="mb-1">Rating</h6>
                                <span class="badge rounded-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>
                            </div>

                            <!-- Bonk Now & More details -->
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Bonk Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!---------------------Card room2----------------------->
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="images/rooms/1.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Simple Room Name</h5>
                            <h6 class="mb-4">฿200 per night</h6>
                            <!--Features-->
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    3 Sofa
                                </span>
                            </div>

                            <!--Facilities-->
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Television
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Room headter <!--เครื่องทำความร้อนในห้อง-->
                                </span>
                            </div>

                            <!-- guests (แขก) -->
                            <div class="guests mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    4 Children
                                </span>
                            </div>

                            <!-- rating -->
                            <div class="rating mb-4">
                                <h6 class="mb-1">Rating</h6>
                                <span class="badge rounded-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>
                            </div>

                            <!-- Bonk Now & More details -->
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Bonk Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!---------------------Card room3----------------------->
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="images/rooms/1.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Simple Room Name</h5>
                            <h6 class="mb-4">฿200 per night</h6>
                            <!--Features-->
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    3 Sofa
                                </span>
                            </div>

                            <!--Facilities-->
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Television
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Room headter <!--เครื่องทำความร้อนในห้อง-->
                                </span>
                            </div>

                            <!--Guests-->
                            <div class="guests mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    4 Children
                                </span>
                            </div>

                            <!-- rating -->
                            <div class="rating mb-4">
                                <h6 class="mb-1">Rating</h6>
                                <span class="badge rounded-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>
                            </div>

                            <!-- Bonk Now & More details -->
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Bonk Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 text-center mt-5">
                    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
                </div>
            </div>
        </div>

        <!-- OUR FACILITIES -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2> <!--สิ่งอำนวยความสะดวกของเรา-->
        <div class="container">
            <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                <!-- WiFi -->
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/wifi.svg" width="80px">
                    <h5 class="mt-3">Wifi</h5>
                </div>
                <!-- Star -->
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/star.svg" width="80px">
                    <h5 class="mt-3">Star</h5>
                </div>
                <!-- Star -->
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/wifi.svg" width="80px">
                    <h5 class="mt-3">Wifi</h5>
                </div>
                <!-- Star -->
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/wifi.svg" width="80px">
                    <h5 class="mt-3">Wifi</h5>
                </div>
                <!-- Star -->
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/wifi.svg" width="80px">
                    <h5 class="mt-3">Wifi</h5>
                </div>
                <div class="col-lg-12 text-center mt-5">
                    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities
                        >>></a>
                </div>
            </div>

        </div>

        <!-- Testimonials (ข้อความรับรอง) comment เลือน -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2> <!--สิ่งอำนวยความสะดวกของเรา-->
        <div class="container mt-5">
            <div class="swiper swiper-testimonials">
                <div class="swiper-wrapper mb-5">
                    <!-- user1 -->
                    <div class="swiper-slide bg-white p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="images/facilities/star.svg" width="30px">
                            <h6 class="m-0 ms-2">Random user1</h6>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Maiores at sit alias omnis ex deserunt earum dicta sed
                            similique culpa.</p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    <!-- user2 -->
                    <div class="swiper-slide bg-white p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="images/facilities/star.svg" width="30px">
                            <h6 class="m-0 ms-2">Random user2</h6>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Maiores at sit alias omnis ex deserunt earum dicta sed
                            similique culpa.</p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    <!-- user3 -->
                    <div class="swiper-slide bg-white p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="images/facilities/star.svg" width="30px">
                            <h6 class="m-0 ms-2">Random user3</h6>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Maiores at sit alias omnis ex deserunt earum dicta sed
                            similique culpa.</p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More>>></a>
            </div>
        </div>

        <!-- REACH US (ติดต่อเรา) -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2> <!--สิ่งอำนวยความสะดวกของเรา-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                    <iframe class="w-100 rounded" height="320px"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d496114.99735159066!2d100.63311079999998!3d13.724599549999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d6032280d61f3%3A0x10100b25de24820!2z4LiB4Lij4Li44LiH4LmA4LiX4Lie4Lih4Lir4Liy4LiZ4LiE4Lij!5e0!3m2!1sth!2sth!4v1732449854350!5m2!1sth!2sth"
                        loading="lazy">
                    </iframe>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="bg-white p-4 rounded mb-4">
                        <h5>Call us</h5>
                        <a href="tel :+66630281234" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i> +66630281234
                        </a>
                        <br>
                        <a href="tel :+66630281234" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i> +66630281234
                        </a>
                    </div>
                    <!-- Follow us -->
                    <div class="bg-white p-4 rounded mb-4">
                        <h5>Follow us</h5>
                        <a href="#" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-twitter-x"></i> Twitter X
                            </span>
                        </a>
                        <br>
                        <a href="#" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-facebook"></i> Facebook
                            </span>
                        </a>
                        <br>
                        <a href="#" class="d-inline-block ">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-instagram"></i> Instagram
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php require('inc/footer.php');?>
    </div>




    <br><br><br>
    <br><br><br>
    <!---------------------------------------- Javascript ---------------------------------------->
    <!-- Bundle -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- Script Main -->
    <script>
        //ภาพเลื่อน Homepage
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
        });

        //comment เลื่อน
        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true, //Loop ให้มากกว่า 3 comment
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
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
                },
            }
        });

    </script>
</body>

</html>