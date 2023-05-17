<?php
    require("config/conexion.php");
    require("config/inicializar-datos.php");             
?>
<!doctype html>
<html lang="en">
<head>
        <?php
            require("config/header-web.php");
        ?>

        <!-- flatpickr css -->
        <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css">

        <!-- gridjs css -->
        <link rel="stylesheet" href="assets/libs/gridjs/theme/mermaid.min.css">


    </head>

    <body data-topbar="dark" data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php require("config/header.php"); ?>

        <?php require("config/menu.php"); ?>
        

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header justify-content-between d-flex align-items-center">
                                    <h4 class="card-title">Fixed Header</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div id="table-fixed-header">
                                        <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                            <div class="gridjs-wrapper" style="height: 400px;">
                                                <table role="grid" class="gridjs-table" style="height: 400px;">
                                                    <thead class="gridjs-thead">
                                                        <tr class="gridjs-tr">
                                                            <th data-column-id="name" class="gridjs-th gridjs-th-sort gridjs-th-fixed" tabindex="0" style="min-width: 83px; width: 120px; top: 0px;">
                                                                <div class="gridjs-th-content">Name</div>
                                                                <button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="email" class="gridjs-th gridjs-th-sort gridjs-th-fixed" tabindex="0" style="min-width: 180px; width: 258px; top: 0px;">
                                                                <div class="gridjs-th-content">Email</div>
                                                                <button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="position" class="gridjs-th gridjs-th-sort gridjs-th-fixed" tabindex="0" style="min-width: 226px; width: 326px; top: 0px;">
                                                                <div class="gridjs-th-content">Position</div>
                                                                <button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="company" class="gridjs-th gridjs-th-sort gridjs-th-fixed" tabindex="0" style="min-width: 242px; width: 349px; top: 0px;">
                                                                <div class="gridjs-th-content">Company</div>
                                                                <button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="country" class="gridjs-th gridjs-th-sort gridjs-th-fixed" tabindex="0" style="min-width: 117px; width: 168px; top: 0px;">
                                                                <div class="gridjs-th-content">Country</div>
                                                                <button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="gridjs-tbody">
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="name" class="gridjs-td">Jonathan</td>
                                                            <td data-column-id="email" class="gridjs-td">jonathan@example.com</td>
                                                            <td data-column-id="position" class="gridjs-td">Senior Implementation Architect</td>
                                                            <td data-column-id="company" class="gridjs-td">Hauck Inc</td>
                                                            <td data-column-id="country" class="gridjs-td">Holy See</td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="name" class="gridjs-td">Harold</td>
                                                            <td data-column-id="email" class="gridjs-td">harold@example.com</td>
                                                            <td data-column-id="position" class="gridjs-td">Forward Creative Coordinator</td>
                                                            <td data-column-id="company" class="gridjs-td">Metz Inc</td>
                                                            <td data-column-id="country" class="gridjs-td">Iran</td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="name" class="gridjs-td">Shannon</td>
                                                            <td data-column-id="email" class="gridjs-td">shannon@example.com</td>
                                                            <td data-column-id="position" class="gridjs-td">Legacy Functionality Associate</td>
                                                            <td data-column-id="company" class="gridjs-td">Zemlak Group</td>
                                                            <td data-column-id="country" class="gridjs-td">South Georgia</td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="name" class="gridjs-td">Robert</td>
                                                            <td data-column-id="email" class="gridjs-td">robert@example.com</td>
                                                            <td data-column-id="position" class="gridjs-td">Product Accounts Technician</td
                                                            ><td data-column-id="company" class="gridjs-td">Hoeger</td>
                                                            <td data-column-id="country" class="gridjs-td">San Marino</td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="name" class="gridjs-td">Noel</td>
                                                            <td data-column-id="email" class="gridjs-td">noel@example.com</td>
                                                            <td data-column-id="position" class="gridjs-td">Customer Data Director</td>
                                                            <td data-column-id="company" class="gridjs-td">Howell - Rippin</td>
                                                            <td data-column-id="country" class="gridjs-td">Germany</td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="name" class="gridjs-td">Traci</td>
                                                            <td data-column-id="email" class="gridjs-td">traci@example.com</td>
                                                            <td data-column-id="position" class="gridjs-td">Corporate Identity Director</td>
                                                            <td data-column-id="company" class="gridjs-td">Koelpin - Goldner</td>
                                                            <td data-column-id="country" class="gridjs-td">Vanuatu</td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="name" class="gridjs-td">Kerry</td>
                                                            <td data-column-id="email" class="gridjs-td">kerry@example.com</td>
                                                            <td data-column-id="position" class="gridjs-td">Lead Applications Associate</td>
                                                            <td data-column-id="company" class="gridjs-td">Feeney, Langworth and Tremblay</td>
                                                            <td data-column-id="country" class="gridjs-td">Niger</td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="name" class="gridjs-td">Patsy</td>
                                                            <td data-column-id="email" class="gridjs-td">patsy@example.com</td>
                                                            <td data-column-id="position" class="gridjs-td">Dynamic Assurance Director</td>
                                                            <td data-column-id="company" class="gridjs-td">Streich Group</td>
                                                            <td data-column-id="country" class="gridjs-td">Niue</td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="name" class="gridjs-td">Cathy</td>
                                                            <td data-column-id="email" class="gridjs-td">cathy@example.com</td>
                                                            <td data-column-id="position" class="gridjs-td">Customer Data Director</td>
                                                            <td data-column-id="company" class="gridjs-td">Ebert, Schamberger and Johnston</td>
                                                            <td data-column-id="country" class="gridjs-td">Mexico</td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="name" class="gridjs-td">Tyrone</td>
                                                            <td data-column-id="email" class="gridjs-td">tyrone@example.com</td>
                                                            <td data-column-id="position" class="gridjs-td">Senior Response Liaison</td>
                                                            <td data-column-id="company" class="gridjs-td">Raynor, Rolfson and Daugherty</td>
                                                            <td data-column-id="country" class="gridjs-td">Qatar</td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="name" class="gridjs-td">Jonathan</td>
                                                            <td data-column-id="email" class="gridjs-td">jonathan@example.com</td>
                                                            <td data-column-id="position" class="gridjs-td">Senior Implementation Architect</td>
                                                            <td data-column-id="company" class="gridjs-td">Hauck Inc</td>
                                                            <td data-column-id="country" class="gridjs-td">Holy See</td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="name" class="gridjs-td">Harold</td>
                                                            <td data-column-id="email" class="gridjs-td">harold@example.com</td>
                                                            <td data-column-id="position" class="gridjs-td">Forward Creative Coordinator</td>
                                                            <td data-column-id="company" class="gridjs-td">Metz Inc</td>
                                                            <td data-column-id="country" class="gridjs-td">Iran</td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="name" class="gridjs-td">Shannon</td>
                                                            <td data-column-id="email" class="gridjs-td">shannon@example.com</td>
                                                            <td data-column-id="position" class="gridjs-td">Legacy Functionality Associate</td>
                                                            <td data-column-id="company" class="gridjs-td">Zemlak Group</td>
                                                            <td data-column-id="country" class="gridjs-td">South Georgia</td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="name" class="gridjs-td">Robert</td>
                                                            <td data-column-id="email" class="gridjs-td">robert@example.com</td>
                                                            <td data-column-id="position" class="gridjs-td">Product Accounts Technician</td
                                                            ><td data-column-id="company" class="gridjs-td">Hoeger</td>
                                                            <td data-column-id="country" class="gridjs-td">San Marino</td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="name" class="gridjs-td">Noel</td>
                                                            <td data-column-id="email" class="gridjs-td">noel@example.com</td>
                                                            <td data-column-id="position" class="gridjs-td">Customer Data Director</td>
                                                            <td data-column-id="company" class="gridjs-td">Howell - Rippin</td>
                                                            <td data-column-id="country" class="gridjs-td">Germany</td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="name" class="gridjs-td">Traci</td>
                                                            <td data-column-id="email" class="gridjs-td">traci@example.com</td>
                                                            <td data-column-id="position" class="gridjs-td">Corporate Identity Director</td>
                                                            <td data-column-id="company" class="gridjs-td">Koelpin - Goldner</td>
                                                            <td data-column-id="country" class="gridjs-td">Vanuatu</td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="name" class="gridjs-td">Kerry</td>
                                                            <td data-column-id="email" class="gridjs-td">kerry@example.com</td>
                                                            <td data-column-id="position" class="gridjs-td">Lead Applications Associate</td>
                                                            <td data-column-id="company" class="gridjs-td">Feeney, Langworth and Tremblay</td>
                                                            <td data-column-id="country" class="gridjs-td">Niger</td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="name" class="gridjs-td">Patsy</td>
                                                            <td data-column-id="email" class="gridjs-td">patsy@example.com</td>
                                                            <td data-column-id="position" class="gridjs-td">Dynamic Assurance Director</td>
                                                            <td data-column-id="company" class="gridjs-td">Streich Group</td>
                                                            <td data-column-id="country" class="gridjs-td">Niue</td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="name" class="gridjs-td">Cathy</td>
                                                            <td data-column-id="email" class="gridjs-td">cathy@example.com</td>
                                                            <td data-column-id="position" class="gridjs-td">Customer Data Director</td>
                                                            <td data-column-id="company" class="gridjs-td">Ebert, Schamberger and Johnston</td>
                                                            <td data-column-id="country" class="gridjs-td">Mexico</td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="name" class="gridjs-td">Tyrone</td>
                                                            <td data-column-id="email" class="gridjs-td">tyrone@example.com</td>
                                                            <td data-column-id="position" class="gridjs-td">Senior Response Liaison</td>
                                                            <td data-column-id="company" class="gridjs-td">Raynor, Rolfson and Daugherty</td>
                                                            <td data-column-id="country" class="gridjs-td">Qatar</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="gridjs-footer">
                                                <div class="gridjs-pagination">
                                                    <div role="status" aria-live="polite" class="gridjs-summary" title="Page 1 of 1">Showing 
                                                        <b>1</b> to 
                                                        <b>10</b> of 
                                                        <b>10</b> results
                                                    </div>
                                                    <div class="gridjs-pages">
                                                        <button tabindex="0" role="button" disabled="" title="Previous" aria-label="Previous" class="">Previous</button>
                                                        <button tabindex="0" role="button" class="gridjs-currentPage" title="Page 1" aria-label="Page 1">1</button>
                                                        <button tabindex="0" role="button" disabled="" title="Next" aria-label="Next" class="">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="gridjs-temp" class="gridjs-temp"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    
                </div>
            </div>
            <!-- End Page-content -->
            <?php require("config/footer.php"); ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center p-3">

                <h5 class="m-0 me-2">Theme Customizer</h5>

                <a href="javascript:void(0);" class="right-bar-toggle-close ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="m-0" />

            <div class="p-4">
                <h6 class="mb-3">Layout</h6>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout"
                        id="layout-vertical" value="vertical">
                    <label class="form-check-label" for="layout-vertical">Vertical</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout"
                        id="layout-horizontal" value="horizontal">
                    <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                </div>

                <h6 class="mt-4 mb-3">Layout Mode</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode"
                        id="layout-mode-light" value="light">
                    <label class="form-check-label" for="layout-mode-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode"
                        id="layout-mode-dark" value="dark">
                    <label class="form-check-label" for="layout-mode-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3">Layout Width</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width"
                        id="layout-width-fluid" value="fluid" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                    <label class="form-check-label" for="layout-width-fluid">Fluid</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width"
                        id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                    <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                </div>

                <h6 class="mt-4 mb-3">Topbar Color</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color"
                        id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                    <label class="form-check-label" for="topbar-color-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color"
                        id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                </div>

                <div id="sidebar-setting">
                <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Size</h6>

                <div class="form-check sidebar-setting mt-1">
                    <input class="form-check-input" type="radio" name="sidebar-size"
                        id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                    <label class="form-check-label" for="sidebar-size-default">Default</label>
                </div>
                <div class="form-check sidebar-setting mt-1">
                    <input class="form-check-input" type="radio" name="sidebar-size"
                        id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                    <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                </div>
                <div class="form-check sidebar-setting mt-1">
                    <input class="form-check-input" type="radio" name="sidebar-size"
                        id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                    <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                </div>

                <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Color</h6>

                <div class="form-check sidebar-setting mt-1">
                    <input class="form-check-input" type="radio" name="sidebar-color"
                        id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                    <label class="form-check-label" for="sidebar-color-light">Light</label>
                </div>
                <div class="form-check sidebar-setting mt-1">
                    <input class="form-check-input" type="radio" name="sidebar-color"
                        id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                    <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                </div>
                <div class="form-check sidebar-setting mt-1">
                    <input class="form-check-input" type="radio" name="sidebar-color"
                        id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                    <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                </div>
            </div>

                <h6 class="mt-4 mb-3">Direction</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction"
                        id="layout-direction-ltr" value="ltr">
                    <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction"
                        id="layout-direction-rtl" value="rtl">
                    <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                </div>

            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>

    <!-- gridjs js -->
    <script src="assets/libs/gridjs/gridjs.umd.js"></script>

    <script src="assets/js/pages/gridjs.init.js"></script>

    <!-- flatpickr js -->
    <script src="assets/libs/flatpickr/flatpickr.min.js"></script>
    <!-- invoice-list init -->
    <script src="assets/js/pages/invoice-list.init.js"></script>

    <script src="assets/js/app.js"></script>

    </body>
</html>