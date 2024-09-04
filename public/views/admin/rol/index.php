<?php include_once  'public/views/admin/layout/head.php' ?>

<body class="g-sidenav-show  bg-gray-100">

    <?php include_once 'public/views/admin/layout/aside.php' ?>

    <main class="main-content border-radius-lg ">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4  border-radius-xl position-sticky blur shadow-blur mt-4 left-auto top-1 z-index-sticky" id="navbarBlur" data-scroll="true" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;"><?php echo TITLE ?></a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Roles</li>
                    </ol>
                </nav>
                <?php include_once 'public/views/admin/layout/navbar.php' ?>
                <div class="container py-4">
                    <div class="row mt-6">
                        <div class="col-xl-4 mb-xl-10 mobile-hide">
                            <div class="card mt-4" data-animation="true">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <a class="d-block blur-shadow-image">
                                        <img width="100%" src="<?php echo BASE_URL ?>public/assets/img/sistema/rol.avif" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                    </a>
                                </div>
                                <div class="card-body text-center">
                                    <div class="text-center mt-n6 mx-auto">
                                        <button class="btn btn-icon btn-3 btn-primary" type="button" onclick="MRol(event)">
                                            <span class="btn-inner--icon"><i class="fas fa-plus "></i></span>
                                            <span class="btn-inner--text">Nuevo</span>
                                        </button>
                                    </div>
                                </div>
                                <hr class="dark horizontal my-0">
                                <div class="card-footer d-flex">
                                    <p class="mb-0 text-center">
                                        El registro de los roles es importante para el acceso de los usuarios al sistema.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-8 mb-xl-10 col-sm-12 mb-sm-5">
                            <div class="card my-4">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <div class="bg-gradient-secondary shadow-secondary border-radius-lg pt-4 pb-3">
                                        <h6 class="text-white text-capitalize ps-3">Listado de Roles</h6>
                                    </div>
                                    <div class="d-flex justify-content-end mt-md-2 mt-n6 mx-auto pe-4">
                                        <button id="mod" class="btn btn-icon btn-primary" type="button" onclick="MRol(event)">
                                            <span class="btn-inner--icon"><i class="fas fa-plus "></i></span>
                                            <span class="btn-inner--text">Nuevo</span>
                                        </button>
                                    </div>
                                    <?php include_once 'public/components/tableRol.php' ?>
                                </div>
                            </div>
                        </div>
                        <?php include_once 'public/views/admin/layout/footer.php' ?>
                    </div>
    </main>
    <?php include_once 'public/views/admin/layout/script.php' ?>
    <script src="<?php echo BASE_URL ?>public/views/admin/rol/rol.js"></script>
</body>

</html>
<?php include_once 'public/components/modalRol.php' ?>