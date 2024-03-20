<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Poles Store</title>
    <!-- .........bootstrap..... -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- ...................font-awesome................... -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="icon" type="image/x-icon" href="image/favicon.PNG">

    <link rel="stylesheet" href="css/header.css">
    <!-- <link rel="stylesheet" href="css/footer.css"> -->
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <nav>
        <div class="container-lg">
            <div class="mini-header d-flex justify-content-between">

                <div class="d-lg-flex gap-5 align-items-end">
                    <div class="d-none d-lg-block">
                        <ul class="Contact-details d-flex gap-5  m-0">
                            <li>
                                <span class="fw-semibold"><i class="fa-solid fa-phone"></i> Call us!</span>08-654 74 90
                            </li>
                            <li><span><i class="fa-solid fa-envelope"></i></span> thepolestore.co.uk</li>
                        </ul>
                    </div>
                    <div class="logo"><img src="Image/logo.png" alt="" class="w-100"></div>
                </div>


                <div class="d-flex user-details align-items-end">
                    <div class="d-lg-flex gap-5 align-items-end">
                        <div class="d-lg-none d--block">
                            <ul class="Contact-details d-flex gap-2  m-0">
                                <li style="font-size: 24px;">
                                    <span class="fw-semibold"><i class="fa-solid fa-phone"></i>
                                </li>
                                <li style="font-size: 24px;"><span><i class="fa-solid fa-envelope"></i></span></li>
                            </ul>
                        </div>

                    </div>
                    <div class="d-none d-lg-block ">
                        <ul class="d-flex gap-5 m-0 ">
                            <li><i class="fa-solid fa-heart"></i></li>
                            <li><i class="fa-solid fa-user"></i></li>
                            <li class="cart">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span class="Cart-span" style="font-size:10px;">0</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="main-header text-uppercase d-flex gap-lg-5 justify-content-center">
                <div class="d-none d-lg-block">
                    <ul class="Category-menu d-flex gap-5 m-0 ">
                        <li><a href="" class="active">Home</a></li>
                        <li><a href="">Curtain poles <span><i class="fa-solid fa-angle-down"></i></span></a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Curtain tracks</a></li>
                    </ul>
                </div>
                <div class="d-flex gap-lg-5 gap-2 aligns-items-center">
                    <div class="search-box">
                        <span><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" placeholder="Search For Curtain Poles" class="text-uppercase">
                    </div>
                    <div class="d-lg-none d-block">
                        <div class="d-flex user-details aligns-items-center">
                            <ul class="d-flex gap-2 m-0">
                                <li style="font-size: 24px;"><i class="fa-solid fa-heart"></i></li>
                                <li style="font-size: 24px;"><i class="fa-solid fa-user"></i></li>
                                <li class="cart" style="font-size: 24px;">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span class="Cart-span" style="font-size:10px;">0</span>
                                </li>
                                <li style="font-size: 24px;"><i class="fa-solid fa-bars" type="button"
                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                                        aria-controls="offcanvasExample"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <!-- ..............drawer model tablet and mobile response............... -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <img src="Image/logo.png" alt="" class="w-75">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="mobile-category m-0 ">
                <li><a href="" class="active">Home</a></li>
                <li><a href="">Curtain poles <span><i class="fa-solid fa-angle-down"></i></span></a></li>
                <li><a href="">Accessories</a></li>
                <li><a href="">Curtain tracks</a></li>
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
</body>

</html>