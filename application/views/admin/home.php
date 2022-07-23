<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MotaAdmin - Bootstrap Admin Dashboard" />
    <meta property="og:title" content="MotaAdmin - Bootstrap Admin Dashboard" />
    <meta property="og:description" content="MotaAdmin - Bootstrap Admin Dashboard" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <title>Trade and Max - admin</title>

    <link rel="shortcut icon" type="image/png" href="<?php echo base_url()?>/assets/images/favicon.png" />

    <?php include('head.php');?>
<body>
<?php include('header.php');?>


        <!-- body start -->
        <div class="content-body">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-9 col-xxl-12">
                        <div class="row">
                            <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body pb-0 px-4 pt-4">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="mb-1">34 lakhs</h5>
                                                <span class="text-success">Total Earining </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="areaChart_2" class="chartjs-render-monitor" height="90"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                                <div class="card bg-success	overflow-hidden">
                                    <div class="card-body pb-0 px-4 pt-4">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="text-white mb-1">33 Paid</h5>
                                                <span class="text-white">All Premium users</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper" style="width:100%">
                                        <span class="peity-line" data-width="100%">6,2,8,4,3,8,4,3,9,10,9,12</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                                <div class="card bg-warning overflow-hidden">
                                    <div class="card-body pb-0 px-4 pt-4">
                                        <div class="row">
                                            <div class="col text-white">
                                                <h5 class="text-white mb-1">200 Free</h5>
                                                <span> All free users</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper px-2">
                                        <canvas id="chart_widget_2" height="100"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body px-4 py-4">
                                        <h5 class="mb-3">5 / <small class="text-primary"> Monthly</small></h5>
                                        <div class="chart-point">
                                            <div class="check-point-area">
                                                <canvas id="ShareProfit2"></canvas>
                                            </div>
                                            <ul class="chart-point-list">
                                                <li><i class="fa fa-circle text-primary mr-1"></i> 233 Gross</li>
                                                <li><i class="fa fa-circle text-success mr-1"></i> 33 paid</li>
                                                <li><i class="fa fa-circle text-warning mr-1"></i> 200 free</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-header border-0 pb-0">
                                        <h4 class="card-title">All Active Users</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-responsive-sm mb-0">
                                                <thead>
                                                    <tr>
                                                        <th style="width:20px;">
                                                            <div
                                                                class="custom-control custom-checkbox checkbox-primary check-lg mr-3">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="checkAll" required="">
                                                                <label class="custom-control-label"
                                                                    for="checkAll"></label>
                                                            </div>
                                                        </th>
                                                        <th><strong>Name</strong></th>
                                                        <th><strong>Email</strong></th>
                                                        <th><strong>Profit</strong></th>
                                                        <th><strong>Loss</strong></th>
                                                        <th><strong>Status</strong></th>
                                                        <th style="width:85px;"><strong>Action</strong></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox check-lg mr-3">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="customCheckBox2" required="">
                                                                <label class="custom-control-label"
                                                                    for="customCheckBox2"></label>
                                                            </div>
                                                        </td>
                                                        <td><b>Sandeep Nath </b> <br> <sub class="text-success"> Paid
                                                            </sub>

                                                        </td>
                                                        <td>sandeepnath41@gmail.com</td>

                                                        <td> RS. 23371.00 <br> <sub class="text-success"> gain</sub>
                                                        </td>
                                                        <td> RS. 271.00 <br> <sub class="text-danger"> loss</sub></td>
                                                        <td class="recent-stats d-flex align-items-center"><i class="fa fa-circle 
    text-success mr-1"></i>Active</td>
                                                        <td>

                                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                    class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox check-lg mr-3">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="customCheckBox2" required="">
                                                                <label class="custom-control-label"
                                                                    for="customCheckBox2"></label>
                                                            </div>
                                                        </td>
                                                        <td><b>Sohan Verma </b> <br> <sub class="text-success"> Free
                                                            </sub>

                                                        </td>
                                                        <td>sohanverma@gmail.com</td>

                                                        <td> RS. 4000.00 <br> <sub class="text-success"> gain</sub></td>
                                                        <td> RS. 800.00 <br> <sub class="text-danger"> loss</sub></td>
                                                        <td class="recent-stats d-flex align-items-center"><i class="fa fa-circle 
        text-success mr-1"></i>Active</td>
                                                        <td>

                                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                    class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                            <div class="text-center"> <button class="btn btn-success btn-xs">View More</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- body end -->

<?php include('footer.php')?>
</body>

</html>