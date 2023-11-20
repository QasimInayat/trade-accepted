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
                    <div class="col-md-10 col-8">
                        <h2 class="section-heading mb-0">Results for "<span class="text-primary text-italic fw-normal">2006 Porsche 911</span>"</h2>
                    </div>
                    <div class="col-md-2 col-4">
                        <p class="view-all mb-0 text-end">View All</p>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-3 col-md-4 mb-3">
                        <a href="javascipt:;">
                            <div class="multi-card">
                                <div class="card-img position-relative">
                                    <img src="./assets/imgs/car-1.png" class="w-100" alt="">
                                    <div class="card-meta d-flex justify-content-between">
                                        <h5 class="mb-0 text-white">2006 Porsche 911</h5>
                                        <div>
                                            <span>
                                                <img src="./assets/imgs/fi_share-2.svg" alt="">
                                            </span>
                                            <span class="ms-1">
                                                <img src="./assets/imgs/fi_bookmark.svg" alt="">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <h4 class="mb-0">$48,995</h4>
                                    <p class="mb-0">68K miles . Craig</p>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-3">
                        <a href="javascipt:;">
                            <div class="multi-card">
                                <div class="card-img position-relative">
                                    <img src="./assets/imgs/car-2.png" class="w-100" alt="">
                                    <div class="card-meta d-flex justify-content-between">
                                        <h5 class="mb-0 text-white">2006 Porsche 911</h5>
                                        <div>
                                            <span>
                                                <img src="./assets/imgs/fi_share-2.svg" alt="">
                                            </span>
                                            <span class="ms-1">
                                                <img src="./assets/imgs/fi_bookmark.svg" alt="">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <h4 class="mb-0">$48,995</h4>
                                    <p class="mb-0">68K miles . Craig</p>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-3">
                        <a href="javascipt:;">
                            <div class="multi-card">
                                <div class="card-img position-relative">
                                    <img src="./assets/imgs/car-3.png" class="w-100" alt="">
                                    <div class="card-meta d-flex justify-content-between">
                                        <h5 class="mb-0 text-white">2006 Porsche 911</h5>
                                        <div>
                                            <span>
                                                <img src="./assets/imgs/fi_share-2.svg" alt="">
                                            </span>
                                            <span class="ms-1">
                                                <img src="./assets/imgs/fi_bookmark.svg" alt="">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <h4 class="mb-0">$48,995</h4>
                                    <p class="mb-0">68K miles . Craig</p>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-3">
                        <a href="javascipt:;">
                            <div class="multi-card">
                                <div class="card-img position-relative">
                                    <img src="./assets/imgs/car-4.png" class="w-100" alt="">
                                    <div class="card-meta d-flex justify-content-between">
                                        <h5 class="mb-0 text-white">2006 Porsche 911</h5>
                                        <div>
                                            <span>
                                                <img src="./assets/imgs/fi_share-2.svg" alt="">
                                            </span>
                                            <span class="ms-1">
                                                <img src="./assets/imgs/fi_bookmark.svg" alt="">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <h4 class="mb-0">$48,995</h4>
                                    <p class="mb-0">68K miles . Craig</p>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-3">
                        <a href="javascipt:;">
                            <div class="multi-card">
                                <div class="card-img position-relative">
                                    <img src="./assets/imgs/car-5.png" class="w-100" alt="">
                                    <div class="card-meta d-flex justify-content-between">
                                        <h5 class="mb-0 text-white">2006 Porsche 911</h5>
                                        <div>
                                            <span>
                                                <img src="./assets/imgs/fi_share-2.svg" alt="">
                                            </span>
                                            <span class="ms-1">
                                                <img src="./assets/imgs/fi_bookmark.svg" alt="">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <h4 class="mb-0">$48,995</h4>
                                    <p class="mb-0">68K miles . Craig</p>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-3">
                        <a href="javascipt:;">
                            <div class="multi-card">
                                <div class="card-img position-relative">
                                    <img src="./assets/imgs/car-6.png" class="w-100" alt="">
                                    <div class="card-meta d-flex justify-content-between">
                                        <h5 class="mb-0 text-white">2006 Porsche 911</h5>
                                        <div>
                                            <span>
                                                <img src="./assets/imgs/fi_share-2.svg" alt="">
                                            </span>
                                            <span class="ms-1">
                                                <img src="./assets/imgs/fi_bookmark.svg" alt="">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <h4 class="mb-0">$48,995</h4>
                                    <p class="mb-0">68K miles . Craig</p>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-3">
                        <a href="javascipt:;">
                            <div class="multi-card">
                                <div class="card-img position-relative">
                                    <img src="./assets/imgs/car-7.png" class="w-100" alt="">
                                    <div class="card-meta d-flex justify-content-between">
                                        <h5 class="mb-0 text-white">2006 Porsche 911</h5>
                                        <div>
                                            <span>
                                                <img src="./assets/imgs/fi_share-2.svg" alt="">
                                            </span>
                                            <span class="ms-1">
                                                <img src="./assets/imgs/fi_bookmark.svg" alt="">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <h4 class="mb-0">$48,995</h4>
                                    <p class="mb-0">68K miles . Craig</p>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-3">
                        <a href="javascipt:;">
                            <div class="multi-card">
                                <div class="card-img position-relative">
                                    <img src="./assets/imgs/car-8.png" class="w-100" alt="">
                                    <div class="card-meta d-flex justify-content-between">
                                        <h5 class="mb-0 text-white">2006 Porsche 911</h5>
                                        <div>
                                            <span>
                                                <img src="./assets/imgs/fi_share-2.svg" alt="">
                                            </span>
                                            <span class="ms-1">
                                                <img src="./assets/imgs/fi_bookmark.svg" alt="">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <h4 class="mb-0">$48,995</h4>
                                    <p class="mb-0">68K miles . Craig</p>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-3">
                        <a href="javascipt:;">
                            <div class="multi-card">
                                <div class="card-img position-relative">
                                    <img src="./assets/imgs/car-9.png" class="w-100" alt="">
                                    <div class="card-meta d-flex justify-content-between">
                                        <h5 class="mb-0 text-white">2006 Porsche 911</h5>
                                        <div>
                                            <span>
                                                <img src="./assets/imgs/fi_share-2.svg" alt="">
                                            </span>
                                            <span class="ms-1">
                                                <img src="./assets/imgs/fi_bookmark.svg" alt="">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <h4 class="mb-0">$48,995</h4>
                                    <p class="mb-0">68K miles . Craig</p>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-3">
                        <a href="javascipt:;">
                            <div class="multi-card">
                                <div class="card-img position-relative">
                                    <img src="./assets/imgs/car-10.png" class="w-100" alt="">
                                    <div class="card-meta d-flex justify-content-between">
                                        <h5 class="mb-0 text-white">2006 Porsche 911</h5>
                                        <div>
                                            <span>
                                                <img src="./assets/imgs/fi_share-2.svg" alt="">
                                            </span>
                                            <span class="ms-1">
                                                <img src="./assets/imgs/fi_bookmark.svg" alt="">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <h4 class="mb-0">$48,995</h4>
                                    <p class="mb-0">68K miles . Craig</p>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-3">
                        <a href="javascipt:;">
                            <div class="multi-card">
                                <div class="card-img position-relative">
                                    <img src="./assets/imgs/car-11.png" class="w-100" alt="">
                                    <div class="card-meta d-flex justify-content-between">
                                        <h5 class="mb-0 text-white">2006 Porsche 911</h5>
                                        <div>
                                            <span>
                                                <img src="./assets/imgs/fi_share-2.svg" alt="">
                                            </span>
                                            <span class="ms-1">
                                                <img src="./assets/imgs/fi_bookmark.svg" alt="">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <h4 class="mb-0">$48,995</h4>
                                    <p class="mb-0">68K miles . Craig</p>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-3">
                        <a href="javascipt:;">
                            <div class="multi-card">
                                <div class="card-img position-relative">
                                    <img src="./assets/imgs/car-12.png" class="w-100" alt="">
                                    <div class="card-meta d-flex justify-content-between">
                                        <h5 class="mb-0 text-white">2006 Porsche 911</h5>
                                        <div>
                                            <span>
                                                <img src="./assets/imgs/fi_share-2.svg" alt="">
                                            </span>
                                            <span class="ms-1">
                                                <img src="./assets/imgs/fi_bookmark.svg" alt="">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <h4 class="mb-0">$48,995</h4>
                                    <p class="mb-0">68K miles . Craig</p>
                                </div>

                            </div>
                        </a>
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
</body>

</html>
