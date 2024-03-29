<?php include 'serv/lib.php';?>
<!doctype html>
<html class="no-js" lang="">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Purple Softwares</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="css/datepicker.min.css">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
      <?php include 'header.php';?>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <?php include 'sidebar.php';?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Transport</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Transport</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <div class="row">
                    <!-- Add Transport Area Start Here -->
                    <div class="col-4-xxxl col-12">
                    <?php 
                                    include "serv/conn.php";
                                     if(isset($_POST['submit'])) {
                                      $rnname = $_POST['rt_name'];
                                      $vnname = $_POST['vn_name'];
                                      $dnname = $_POST['dn_name'];
                                      $lnname = $_POST['ln_name'];
                                      $pnname = $_POST['pn_name'];
                                        if (empty( $rnname)) {
                                            echo "Please enter value";
                                        }elseif (empty($vnname)) {
                                            echo "Please enter value";
                                        }elseif (empty($dnname)) {
                                            echo "Please enter value";
                                        }elseif (empty($lnname)) {
                                            echo "Please enter value";
                                        }elseif (empty($pnname)) {
                                            echo "Please enter value";
                                        }elseif (strlen($pnname) < 10 ) {
                                            echo "Incorrect number";
                                        }
                                        else {
                                            $sql = " SELECT * FROM transport ";
                                            $log = mysqli_query($conn, $sql);
                                            if (mysqli_num_rows($log) > 0) {
                                                echo "data already exist";
                                            }else {
                                                $sql = "INSERT INTO transport ( rn_name, vn_name, dn_name, ln_name, pn_name) VALUES ( '$rnname', '$vnname', '$dnname', '$lnname', '$pnname')";
                                                $log = mysqli_query($conn, $sql);
                                                echo "success";
                                            }

                                        }
                                    }
                                    ?>
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Add New Transport</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                              
                                <form class="new-added-form" method="POST">
                                    <div class="row">
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label>Route Name</label>
                                            <input type="text" placeholder="" name="rt_name" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label>Vehicle Number</label>
                                            <input type="text" placeholder="" name="vn_name" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label>Driver Name</label>
                                            <input type="text" placeholder="" name="dn_name" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label>License Number</label>
                                            <input type="text" placeholder="" name="ln_name" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label>Phone Number</label>
                                            <input type="varchar" placeholder="" name="pn_name" class="form-control">
                                        </div>
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                        </div>
                                    </div>
                                   
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Add Transport Area End Here -->
                    <!-- All Transport List Area Start Here -->
                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>All Transport Lists</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <form class="mg-b-20">
                                    <div class="row gutters-8">
                                        <div class="col-lg-4 col-12 form-group">
                                            <input type="text" placeholder="Search by Route ..." class="form-control">
                                        </div>
                                        <div class="col-lg-3 col-12 form-group">
                                            <input type="text" placeholder="Search by Car Number ..."
                                                class="form-control">
                                        </div>
                                        <div class="col-lg-3 col-12 form-group">
                                            <input type="text" placeholder="Search by Phone ..." class="form-control">
                                        </div>
                                        <div class="col-lg-2 col-12 form-group">
                                            <button type="submit"
                                                class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="table-responsive">
                                    <table class="table display data-table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input checkAll">
                                                        <label class="form-check-label">ID</label>
                                                    </div>
                                                </th>
                                                <th>Route Name</th>
                                                <th>Vehicle No</th>
                                                <th>Driver Name</th>
                                                <th>Driver License</th>
                                                <th>Contact Number</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                           contentTable('transport');
                                           ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- All Transport List Area End Here -->
                </div>
                <!-- All Subjects Area End Here -->
                <?php include 'footer.php';?>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Select 2 Js -->
    <script src="js/select2.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Date Picker Js -->
    <script src="js/datepicker.min.js"></script>
    <!-- Data Table Js -->
    <script src="js/jquery.dataTables.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>

</html>