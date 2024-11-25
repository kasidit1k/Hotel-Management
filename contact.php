<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HavenHub - CONTACT US</title>
    <?php require('inc/link.php'); ?>
    <!-- link Use Swiper from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Link CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>

<body class="bg-light">
    <?php require('inc/header.php'); ?>
    <!-- หัวข้อ Contact us -->
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Ipsam aliquid illum laudantium <br> fugit officiis tenetur libero
            consequuntur necessitatibus ducimus soluta.</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">

                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="320px"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d496114.99735159066!2d100.63311079999998!3d13.724599549999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d6032280d61f3%3A0x10100b25de24820!2z4LiB4Lij4Li44LiH4LmA4LiX4Lie4Lih4Lir4Liy4LiZ4LiE4Lij!5e0!3m2!1sth!2sth!4v1732449854350!5m2!1sth!2sth"
                        loading="lazy">
                    </iframe>

                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/c4c4V22dNmqbtqih6" target="_blank" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-geo-alt-fill"></i> Bangkok
                    </a>
                    <!------------------------ Call us ---------------->
                    <h5 class="mt-4">Call us</h5>
                    <a href="tel :+66630281234" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +66630281234
                    </a>
                    <br>
                    <a href="tel :+66630281234" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +66630281234
                    </a>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: kasiditza@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> kasiditza@gmail.com
                    </a>

                    <!------------------ Follow us -------------------------->
                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
                        <i class="bi bi-twitter-x"></i>
                    </a>

                    <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a href="#" class="d-inline-block text-dark fs-5 ">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>
            <!-- .... -->
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500; ">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;" ;">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="tel" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php'); ?>
</body>

</html>