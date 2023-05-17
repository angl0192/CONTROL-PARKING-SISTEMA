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
                                <div class="card-body">
                                    <div class="row align-items-start">
                                        <div class="col-sm">
                                            <div>
                                                <button type="button" class="btn btn-light mb-4"" data-bs-toggle="modal" data-bs-target="#addInvoiceModal"><i class="mdi mdi-plus me-1"></i> Add Invoice</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="d-flex gap-1">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="datepicker-range">
                                                    <span class="input-group-text"><i class="uil uil-calender"></i></span>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="btn btn-link text-body shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="uil uil-ellipsis-h"></i>
                                                    </a>
                                                  
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive mt-4 mt-sm-0">
                                        <table class="table align-middle table-nowrap table-check">
                                            <thead>
                                                <tr class="bg-transparent">
                                                    <th style="width: 30px;">
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" name="check" class="form-check-input" id="checkAll">
                                                            <label class="form-check-label" for="checkAll"></label>
                                                        </div>
                                                    </th>
                                                    <th>Invoice ID</th>
                                                    <th>Date</th>
                                                    <th>Billing Name</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th style="width: 120px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
    
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label"></label>
                                                        </div>
                                                    </td>
                                                    
                                                    <td><a href="invoices-detail.html" class="text-dark fw-medium">#DS0215</a> </td>
                                                    <td>
                                                        12 Oct, 2020
                                                    </td>
                                                    <td>Connie Franco</td>
                                                    
                                                    <td>
                                                        $26.30
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-soft-success font-size-12">Paid</div>
                                                    </td>
                                                    
                                                    
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="uil uil-ellipsis-h"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Print</a></li>
                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label"></label>
                                                        </div>
                                                    </td>
                                                    
                                                    <td><a href="invoices-detail.html" class="text-dark fw-medium">#DS0214</a> </td>
                                                    <td>
                                                        11 Oct, 2020
                                                    </td>
                                                    <td>Paul Reynolds</td>
                                                    
                                                    <td>
                                                        $24.20
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-soft-success font-size-12">Paid</div>
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="uil uil-ellipsis-h"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Print</a></li>
                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label"></label>
                                                        </div>
                                                    </td>
                                                    
                                                    <td><a href="invoices-detail.html" class="text-dark fw-medium">#DS0213</a> </td>
                                                    <td>
                                                        10 Oct, 2020
                                                    </td>
                                                    <td>Ronald Patterson</td>
                                                    
                                                    <td>
                                                        $20.20
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-soft-warning font-size-12">Pending</div>
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="uil uil-ellipsis-h"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Print</a></li>
                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label"></label>
                                                        </div>
                                                    </td>
                                                    
                                                    <td><a href="invoices-detail.html" class="text-dark fw-medium">#DS0212</a> </td>
                                                    <td>
                                                        09 Oct, 2020
                                                    </td>
                                                    <td>Adella Perez</td>
                                                    
                                                    <td>
                                                        $16.80
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-soft-success font-size-12">Paid</div>
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="uil uil-ellipsis-h"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Print</a></li>
                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label"></label>
                                                        </div>
                                                    </td>
                                                    
                                                    <td><a href="invoices-detail.html" class="text-dark fw-medium">#DS0211</a> </td>
                                                    <td>
                                                        08 Oct, 2020
                                                    </td>
                                                    <td>Theresa Mayers</td>
                                                    
                                                    <td>
                                                        $22.00
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-soft-success font-size-12">Paid</div>
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="uil uil-ellipsis-h"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Print</a></li>
                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label"></label>
                                                        </div>
                                                    </td>
                                                    
                                                    <td><a href="invoices-detail.html" class="text-dark fw-medium">#DS0210</a> </td>
                                                    <td>
                                                        07 Oct, 2020
                                                    </td>
                                                    <td>Michael Wallace</td>
                                                    
                                                    <td>
                                                        $15.60
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-soft-success font-size-12">Paid</div>
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="uil uil-ellipsis-h"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Print</a></li>
                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label"></label>
                                                        </div>
                                                    </td>
                                                    
                                                    <td><a href="invoices-detail.html" class="text-dark fw-medium">#DS0209</a> </td>
                                                    <td>
                                                        06 Oct, 2020
                                                    </td>
                                                    <td>Oliver Gonzales</td>
                                                    
                                                    <td>
                                                        $26.50
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-soft-warning font-size-12">Pending</div>
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="uil uil-ellipsis-h"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Print</a></li>
                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label"></label>
                                                        </div>
                                                    </td>
                                                    
                                                    <td><a href="invoices-detail.html" class="text-dark fw-medium">#DS0208</a> </td>
                                                    <td>
                                                        05 Oct, 2020
                                                    </td>
                                                    <td>David Burke</td>
                                                    
                                                    <td>
                                                        $24.20
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-soft-success font-size-12">Paid</div>
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="uil uil-ellipsis-h"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Print</a></li>
                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label"></label>
                                                        </div>
                                                    </td>
                                                    
                                                    <td><a href="invoices-detail.html" class="text-dark fw-medium">#DS0207</a> </td>
                                                    <td>
                                                        04 Oct, 2020
                                                    </td>
                                                    <td>Willie Verner</td>
                                                    
                                                    <td>
                                                        $21.30
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-soft-warning font-size-12">Pending</div>
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="uil uil-ellipsis-h"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Print</a></li>
                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-labe10"></label>
                                                        </div>
                                                    </td>
                                                    
                                                    <td><a href="invoices-detail.html" class="text-dark fw-medium">#DS0206</a> </td>
                                                    <td>
                                                        03 Oct, 2020
                                                    </td>
                                                    <td>Felix Perry</td>
                                                    
                                                    <td>
                                                        $22.60
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-soft-success font-size-12">Paid</div>
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="uil uil-ellipsis-h"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Print</a></li>
                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr><!-- end tr -->
                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                    </div>

                                    <div class="row g-0 text-center text-sm-start">
                                        <div class="col-sm-6">
                                            <div>
                                                <p class="mb-sm-0">Showing 1 to 10 of 57 entries</p>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-sm-6">
                                            <ul class="pagination pagination-rounded justify-content-center justify-content-sm-end mb-sm-0">
                                                <li class="page-item disabled">
                                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">1</a>
                                                </li>
                                                <li class="page-item active">
                                                    <a href="#" class="page-link">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">4</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">5</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <!-- Modal -->
                    <div class="modal fade" id="addInvoiceModal" tabindex="-1" aria-labelledby="addInvoiceModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addInvoiceModalLabel">Add Invoice</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-4">
                                    <form>
                                        <div>
                                            <ul class="wizard-nav mb-5">
                                                <li class="wizard-list-item">
                                                    <div class="list-item">
                                                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Customer Info">
                                                            <i class="uil uil-user-circle"></i>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="wizard-list-item">
                                                    <div class="list-item">
                                                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Invoice Details">
                                                            <i class="uil uil-invoice"></i>
                                                        </div>
                                                    </div>
                                                </li>
    
                                                <li class="wizard-list-item">
                                                    <div class="list-item">
                                                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Order Summery">
                                                            <i class="uil uil-clipboard-notes"></i>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- wizard-nav -->

                                            <div class="wizard-tab">
                                                <div class="text-center mb-4">
                                                    <h5>Customer Information</h5>
                                                    <p class="card-title-desc">Fill all information below</p>
                                                </div>
                                                <div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="customerinfo-name-input" class="form-label">Customer Name :</label>
                                                                <input type="text" class="form-control" id="customerinfo-name-input">
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="customerinfo-email-input" class="form-label">Email :</label>
                                                                <input type="email" class="form-control" id="customerinfo-email-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            
                                                            <div class="mb-3">
                                                                <label for="customerinfo-phone-input" class="form-label">Phone :</label>
                                                                <input type="text" class="form-control" id="customerinfo-phone-input">
                                                            </div>
                                                        </div>
                                                    </div>
            
                                                    <div class="mb-3">
                                                        <label for="customerinfo-address-input" class="form-label">Address :</label>
                                                        <textarea class="form-control" id="customerinfo-address-input" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- wizard-tab -->

                                            <div class="wizard-tab">
                                                
                                                <div class="text-center mb-4">
                                                    <h5>Invoice Details</h5>
                                                    <p class="card-title-desc">Fill Invoice Details.</p>
                                                </div>
                                                <div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
            
                                                            <div class="mb-3">
                                                                <label for="invoicenumberinput" class="form-label">Invoice #</label>
                                                                <input type="text" class="form-control" id="invoicenumberinput">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Invoice Date</label>
                                                                <input type="text" class="form-control" id="datepicker-invoice">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="invoicedescriptioninput" class="form-label">Description (Optional)</label>
                                                                <input type="text" class="form-control" id="invoicedescriptioninput">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Payment method :</label>
                                                                <select class="form-select">
                                                                    <option selected>Select Payment method</option>
                                                                    <option value="CR">Credit / Debit Card</option>
                                                                    <option value="PY">Paypal</option>
                                                                </select>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- wizard-tab -->

                                            <div class="wizard-tab">
                                                <div class="text-center mb-4">
                                                    <h5>Order Summery</h5>
                                                    <p class="card-title-desc">Fill Order Summery Details.</p>
                                                </div>
                                                <div>
                                                    <div class="table-responsive">
                                                        <table class="table table-nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Item name</th>
                                                                    <th scope="col">Description</th>
                                                                    <th scope="col" width="120px">Price</th>
                                                                    <th scope="col" width="120px">Quantity</th>
                                                                    <th scope="col" width="120px">Total</th>
                                                                    <th scope="col" class="text-center">Action</th>
                                                                </tr>
                                                                
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>
                                                                        <div>
                                                                            <input class="form-control" type="text">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <textarea class="form-control" rows="2"></textarea>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <input class="form-control" type="text">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <input class="form-control" type="text">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <input class="form-control" type="text"  value="0.00" readonly>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="text-center">
                                                                            <a href="#" class="text-danger p-2 d-inline-block" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
    
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>
                                                                        <div>
                                                                            <input class="form-control" type="text">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <textarea class="form-control" rows="2"></textarea>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <input class="form-control" type="text">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <input class="form-control" type="text">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <input class="form-control" type="text"  value="0.00" readonly>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="text-center">
                                                                            <a href="#" class="text-danger p-2 d-inline-block" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="row justify-content-end">
                                                        <div class="col-xl-3 col-md-4">
                                                            <div>
                                                                <div>
                                                                    <h5 class="font-size-14 py-2">Sub Total : <span class="float-end fw-normal text-body">0.00</span></h5>
                                                                </div>
                                                                <div>
                                                                    <h5 class="font-size-14 py-2">Discount  : <span class="float-end fw-normal text-body"> - 0.00</span></h5>
                                                                </div>
                                                                <div>
                                                                    <h5 class="font-size-14 py-2">Shipping Charge  : <span class="float-end fw-normal text-body"> 0.00</span></h5>
                                                                </div>
                                                                <div>
                                                                    <h5 class="font-size-14 py-2">Tax  : <span class="float-end fw-normal text-body"> 0.00</span></h5>
                                                                </div>
                                                                <div>
                                                                    <h5 class="font-size-14 py-2">Total  : <span class="float-end"> 0.00</span></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- wizard-tab -->

                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                <button type="button" class="btn btn-primary w-sm" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                                <button type="button" class="btn btn-primary w-sm ms-auto" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal -->

                </div> <!-- container-fluid -->
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

    <!-- flatpickr js -->
    <script src="assets/libs/flatpickr/flatpickr.min.js"></script>
    <!-- invoice-list init -->
    <script src="assets/js/pages/invoice-list.init.js"></script>

    <script src="assets/js/app.js"></script>

    </body>
</html>