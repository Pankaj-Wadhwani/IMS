<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

        <!--        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
    </div>
    <hr>
    <div class="ml-3">
        <h4>Category</h4>
        <?php
        include_once("includes/charts/category-quantity-display.php");
        ?>
    </div>

    <div class="ml-3">
        <h4>Products</h4>
        <?php
        include_once("includes/charts/product-name-quantity-display.php");
        ?>
    </div>
    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <?php
        //        include_once ("includes/charts/top-customers-pending.php");
        ?>

        <!-- Pie Chart -->
        <?php
        //        include_once ("includes/charts/revenuesouces.php");
        ?>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <?php
        //        include_once ("includes/charts/earningoverview.php");
        ?>


    </div>

</div>
<!-- /.container-fluid -->