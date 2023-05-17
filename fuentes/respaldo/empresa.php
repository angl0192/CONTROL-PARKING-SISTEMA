<!doctype html>
<html lang="en">
    <head>

        <?php
            require("config/header-web.php");
        ?>

    </head>

    <body data-topbar="dark" data-sidebar="dark">
    <div id="layout-wrapper">

        <!-- ************************************************************** -->
        <!-- ****************       CABECERA APP          ***************** -->
        <!-- ************************************************************** -->
        <?php require("config/header.php"); ?>
        <!-- ************************************************************** -->
        <!-- ****************       MENU PRINCIPAL        ***************** -->
        <!-- ************************************************************** -->
        <?php require("config/menu.php"); ?>
        <!-- ************************************************************** -->
        <!-- *********************** CONTENIDO APP ************************ -->
        <!-- ************************************************************** -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">                                   
                                    <div class="row mb-2">
                                        <div class="col-sm-12">
                                            <div class="text-sm-end">
                                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2">
                                                    <i class="mdi mdi-plus me-1"></i>
                                                    Agregar Personal
                                                </button>
                                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2">
                                                    <i class="mdi mdi-plus me-1"></i>
                                                    Subir Personal
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Text</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                                </div>
                                            </div><!-- end row -->
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Search</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                                                </div>
                                            </div><!-- end row -->
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                                                </div>
                                            </div><!-- end row -->
                                            <div class="mb-3 row">
                                                <label for="example-url-input" class="col-md-2 col-form-label">URL</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                                                </div>
                                            </div><!-- end row -->
                                            <div class="mb-3 row">
                                                <label for="example-tel-input" class="col-md-2 col-form-label">Telephone</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                                                </div>
                                            </div><!-- end row -->
                                            <div class="mb-3 row">
                                                <label for="example-password-input" class="col-md-2 col-form-label">Password</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="password" value="hunter2" id="example-password-input">
                                                </div>
                                            </div><!-- end row -->
                                            <div class="mb-3 row">
                                                <label for="example-number-input" class="col-md-2 col-form-label">Number</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="number" value="42" id="example-number-input">
                                                </div>
                                            </div><!-- end row -->
                                            <div class="mb-3 mb-lg-0 row">
                                                <label for="example-datetime-local-input" class="col-md-2 col-form-label">Date and time</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="datetime-local" value="2019-08-19T13:45:00" id="example-datetime-local-input">
                                                </div>
                                            </div><!-- end row -->
                                            <div class="row mb-3 mt-3 mt-xl-0">
                                                <label for="example-date-input" class="col-md-2 col-form-label">Date</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                                </div>
                                            </div><!-- end row -->
                                            <div class="row mb-3">
                                                <label for="example-month-input" class="col-md-2 col-form-label">Month</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="month" value="2019-08" id="example-month-input">
                                                </div>
                                            </div><!-- end row -->
                                            <div class="row mb-3">
                                                <label for="example-week-input" class="col-md-2 col-form-label">Week</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="week" value="2019-W33" id="example-week-input">
                                                </div>
                                            </div><!-- end row -->
                                            <div class="row mb-3">
                                                <label for="example-time-input" class="col-md-2 col-form-label">Time</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                                                </div>
                                            </div><!-- end row -->
                                            <div class="row mb-3">
                                                <label for="example-color-input" class="col-md-2 col-form-label">Color picker</label>
                                                <div class="col-md-10">
                                                    <input type="color" class="form-control form-control-color w-100" id="example-color-input" value="#776acf" title="Choose your color">
                                                </div>
                                            </div><!-- end row -->
                                            <div class="row mb-3">
                                                <label class="col-md-2 col-form-label">Select</label>
                                                <div class="col-md-10">
                                                    <select class="form-select">
                                                        <option>Select</option>
                                                        <option>Large select</option>
                                                        <option>Small select</option>
                                                    </select>
                                                </div>
                                            </div><!-- end row -->
                                            <div class="row">
                                                <label for="exampleDataList" class="col-md-2 col-form-label">Datalists</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                                                    <datalist id="datalistOptions">
                                                        <option value="San Francisco">
                                                        <option value="New York">
                                                        <option value="Seattle">
                                                        <option value="Los Angeles">
                                                        <option value="Chicago">
                                                    </datalist>
                                                </div>
                                            </div><!-- end row -->
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ********************************************************** -->
            <!-- *****************      Pie de Pagina     ***************** -->
            <!-- ********************************************************** -->
            <?php require("config/footer.php"); ?>
        </div><!-- end main content-->
    </div><!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    
    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script>
    <!-- app.js -->
    <script src="assets/js/app.js"></script>

    </body>
</html>