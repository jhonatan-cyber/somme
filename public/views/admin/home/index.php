<?php include_once  'public/views/admin/layout/head.php' ?>

<body class="g-sidenav-show  bg-gray-100">

    <?php include_once 'public/views/admin/layout/aside.php' ?>

    <main class="main-content border-radius-lg ">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4  border-radius-xl position-sticky blur shadow-blur mt-4 left-auto top-1 z-index-sticky" id="navbarBlur" data-scroll="true" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;"><?php echo TITLE ?></a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Home</li>
                    </ol>
                </nav>
                <?php include_once 'public/views/admin/layout/navbar.php' ?>
                <div class="container-fluid py-4">
                    <div class="row">
                        <div class="col-lg-12 position-relative z-index-2">
                            <div class="card card-plain mb-4">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="d-flex flex-column h-100">
                                                <h2 class="font-weight-bolder mb-0">Estadisticas Generales</h2>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-sm-12 mt-sm-4 mt-4">
                                    <div class="card mb-4">
                                        <div class="card-header p-3 pt-2">
                                            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                                <i class="material-icons opacity-10">weekend</i>
                                            </div>
                                            <div class="text-end pt-1">
                                                <p class="text-sm mb-0 text-capitalize">Bookings</p>
                                                <h4 class="mb-0">281</h4>
                                            </div>
                                        </div>

                                        <hr class="dark horizontal my-0">
                                        <div class="card-footer p-3">
                                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
                                        </div>
                                    </div>

                                    <div class="card  mb-2">
                                        <div class="card-header p-3 pt-2">
                                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                                <i class="material-icons opacity-10">leaderboard</i>
                                            </div>
                                            <div class="text-end pt-1">
                                                <p class="text-sm mb-0 text-capitalize">Today's Users</p>
                                                <h4 class="mb-0">2,300</h4>
                                            </div>
                                        </div>

                                        <hr class="dark horizontal my-0">
                                        <div class="card-footer p-3">
                                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-6 col-sm-12 mt-sm-4 mt-4">
                                    <div class="card  mb-4">
                                        <div class="card-header p-3 pt-2 bg-transparent">
                                            <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                                <i class="material-icons opacity-10">store</i>
                                            </div>
                                            <div class="text-end pt-1">
                                                <p class="text-sm mb-0 text-capitalize ">Revenue</p>
                                                <h4 class="mb-0 ">34k</h4>
                                            </div>
                                        </div>

                                        <hr class="horizontal my-0 dark">
                                        <div class="card-footer p-3">
                                            <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+1% </span>than yesterday</p>
                                        </div>
                                    </div>

                                    <div class="card ">
                                        <div class="card-header p-3 pt-2 bg-transparent">
                                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                                <i class="material-icons opacity-10">person_add</i>
                                            </div>
                                            <div class="text-end pt-1">
                                                <p class="text-sm mb-0 text-capitalize ">Followers</p>
                                                <h4 class="mb-0 ">+91</h4>
                                            </div>
                                        </div>

                                        <hr class="horizontal my-0 dark">
                                        <div class="card-footer p-3">
                                            <p class="mb-0 ">Just updated</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include_once 'public/views/admin/layout/footer.php' ?>
                </div>
    </main>
    <?php include_once 'public/views/admin/layout/script.php' ?>
</body>

</html>



































































<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>