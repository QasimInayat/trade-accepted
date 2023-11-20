<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

    <main>
        <header class="py-3 px-2">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="logo-head d-flex align-items-center gap-3">
                        <img src="./assets/imgs/logo.png" alt="" class="d-block">
                        <h1 class="mb-0">Dashboard</h1>
                    </div>
                    <div class="vertical-nav d-flex align-items-center">
                        <ul class="list-unstyled text-end d-lg-block d-none mb-0">
                            <li class="d-inline-block">
                                <button class="btn btn-primary w-fit" data-bs-toggle="modal"
                                    data-bs-target="#addListing">Add Listing</button>
                            </li>
                            <li class="d-inline-block">
                                <a href="javascript:;" class="px-2">
                                    <img src="./assets/imgs/fi_search.svg" alt="">
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a href="javascript:;" class="px-2">
                                    <img src="./assets/imgs/fi_bell.svg" alt="">
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a href="javascript:;" class="px-2">
                                    <img src="./assets/imgs/fi_message-square.svg" alt="">
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a href="javascript:;" class="px-2">
                                    <img src="./assets/imgs/fi_help-circle.svg" alt="">
                                </a>
                            </li>
                        </ul>
                        <div class="d-flex align-items-center">

                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle auth-dropdown" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="user-image">
                                        <img src="./assets/imgs/user.png" alt="">
                                    </span>
                                    <span class="d-md-inline d-none">Welcome back, Steve!</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <aside>
            <div class="d-flex flex-column justify-content-between h-100">
                <ul class="list-unstyled side-nav">
                    <li>
                        <a href="javascript:;">
                            <img src="./assets/imgs/fi_layout.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <img src="./assets/imgs/fi_align-left.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <img src="./assets/imgs/fi_bell-1.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <img src="./assets/imgs/fi_message-square-1.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <img src="./assets/imgs/fi_settings.svg" alt="">
                        </a>
                    </li>
                </ul>
                <a href="javascript:;" class="d-block">
                    <img src="./assets/imgs/fi_log-out.svg" alt="">
                </a>
            </div>
        </aside>

        <div class="content pe-2">
            <div class="container-fluid">

                <div class="row mb-4">
                    <div class="col-12">
                        <a href="javascript:;" class="back"><i class="fa fa-chevron-left text-primary me-2"></i>
                            Back</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="car-slider">
                            <div>
                                <img src="./assets/imgs/car-2.png" class="w-100" alt="">
                            </div>
                            <div>
                                <img src="./assets/imgs/car-3.png" class="w-100" alt="">
                            </div>
                            <div>
                                <img src="./assets/imgs/car-4.png" class="w-100" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-lg-0 mt-4">
                        <div class="car-details">
                            <div class="d-flex align-items-center justify-content-between">
                                <h2>2006 Porsche 911</h2>
                                <div>
                                    <span>
                                        <img src="./assets/imgs/fi_share-2-red.svg" alt="">
                                    </span>
                                    <span class="ms-1">
                                        <img src="./assets/imgs/fi_bookmark-red.svg" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="price d-flex align-items-end gap-4 mt-3">
                                <h4 class="mb-0">$48,995</h4>
                                <p class="mb-0">Listed 5 hours ago . Aurora, CO</p>
                            </div>
                            <div class="desc mt-5">
                                <h5>Description</h5>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>
                            </div>

                            <div class="desc mt-5">
                                <h5>Seller Information</h5>
                                <div class="seller d-flex justify-content-between align-items-center mt-4">
                                    <div class="d-flex gap-3 align-items-center">
                                        <div class="seller-img">
                                            <img src="./assets/imgs/seller.png" alt="">
                                        </div>
                                        <div class="seller-info">
                                            <h5>Benjamin William</h5>
                                            <p class="mb-0 fw-bold">Manual</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary px-4">Contact</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="car-meta">
                            <h4 class="mb-3">Details</h4>
                            <div class="meta-desc">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                        <p class="head mb-1">Mileage</p>
                                        <p class="title text-primary">Driven 77,189 miles</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                        <p class="head mb-1">Transmission</p>
                                        <p class="title text-primary">Manual</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                        <p class="head mb-1">Exterior Color</p>
                                        <p class="title text-primary">Red</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                        <p class="head mb-1">Interior Color</p>
                                        <p class="title text-primary">Black</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                        <p class="head mb-1">Make</p>
                                        <p class="title text-primary">Volkswagen</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                        <p class="head mb-1">Model</p>
                                        <p class="title text-primary">911</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                        <p class="head mb-1">Trim</p>
                                        <p class="title text-primary">Information</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                        <p class="head mb-1">Year</p>
                                        <p class="title text-primary">2006</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d627.1937268859081!2d-114.08504708112466!3d51.03877794729636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1700433195619!5m2!1sen!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <h4>Aurora, CO</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="addListing" tabindex="-1" aria-labelledby="addListingLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4 position-relative">
                <div class="text-end border-0">
                    <!-- <h1 class="modal-title fs-5" id="addListingLabel">Modal title</h1> -->
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="add-listing-form">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="text-center mb-4">My</h4>
                                    <div class="border-end pe-md-4">
                                        <div class="mb-3">
                                            <input type="text" placeholder="Year" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" placeholder="Make" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" placeholder="Model" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" placeholder="Trim" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="text-center mb-4">For</h4>
                                    <div class="">
                                        <div class="mb-3">
                                            <input type="text" placeholder="Year" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" placeholder="Make" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" placeholder="Model" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" placeholder="Trim" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3 ">
                                    <button class="btn btn-primary w-100">Find Exchange</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.car-slider').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1
            });
        });
    </script>
</body>

</html>
