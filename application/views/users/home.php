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

    <title>Trade and Max</title>

    <link rel="shortcut icon" type="image/png" href="<?php echo base_url()?>/assets/images/favicon.png" />

    <?php include('head.php');?>
</head>

<body>
<?php include('header.php');?>


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
                                                <h5 class="mb-1">Rs. 23 Lakh</h5>
                                                <span class="text-success">Total Net P&L</span>
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
                                                <h5 class="text-white mb-1">Rs. 2 lakh</h5>
                                                <span class="text-white">Avgrage Winning Trade</span>
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
                                                <h5 class="text-white mb-1">Rs. 20K</h5>
                                                <span>Avgrage losing Trade</span>
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
                                        <h5 class="mb-3">9.6 / <small class="text-primary">Profit Factor</small></h5>
                                        <div class="chart-point">
                                            <div class="check-point-area">
                                                <canvas id="ShareProfit2"></canvas>
                                            </div>
                                            <ul class="chart-point-list">
                                                <li><i class="fa fa-circle text-primary mr-1"></i> 40% Gross</li>
                                                <li><i class="fa fa-circle text-success mr-1"></i> 35% Profit</li>
                                                <li><i class="fa fa-circle text-warning mr-1"></i> 25% loss</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-header border-0 pb-0">
                                        <h4 class="card-title">Daily Trading Analysis</h4>
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
                                                        <th><strong>Price</strong></th>
                                                        <th><strong>Stock</strong></th>
                                                        <th><strong>Date</strong></th>
                                                        <th><strong>Open/Close</strong></th>
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
                                                        <td><b>Rs. 542 </b> <br> <sub class="text-success"> 2 shares
                                                                buy</sub>

                                                        </td>
                                                        <td>HCL Technology ltd</td>
                                                        <td>01 August 2021, 11:00 AM</td>
                                                        <td> RS. 271.00 <br> <sub class="text-success"> open</sub></td>
                                                        <td class="recent-stats d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i>Buy</td>
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
                                                        <td><b>Rs. 544.46 </b> <br> <sub class="text-danger"> 2 shares
                                                                sell</sub>

                                                        </td>
                                                        <td>HCL Technology ltd</td>
                                                        <td>01 August 2021, 3:00 PM</td>
                                                        <td> RS. 272.23 <br> <sub class="text-danger"> close</sub></td>
                                                        <td class="recent-stats d-flex align-items-center"><i class="fa fa-circle text-danger mr-1"></i>Sell</td>
                                                        <td>

                                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                    class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-xxl-4 col-lg-12 col-md-12">
                        <div class="card bg-success text-white">
                            <div class="card-header pb-0 border-0">
                                <h4 class="card-title text-white">Daily Winning Factor</h4>
                            </div>
                            <div class="card-body">
                                <div class="widget-media">
                                    <h1 class="text-white">7.8/10</h1>
                                </div>
                            </div>
                            <canvas id="lineChart_3Kk"></canvas>
                        </div>

                    </div>

                    <div class="col-xl-8 col-xxl-8 col-lg-12 col-md-12">
                        <div id="user-activity" class="card">
                            <div class="card-header border-0 pb-0 d-sm-flex d-block">
                                <div>
                                    <h4 class="card-title">Daily Net Camutative P&L</h4>
                                    <p class="mb-1">Daily profit and loss analysis chart by time.</p>
                                </div>
                                <div class="card-action">
                                    <ul class="nav nav-tabs" role="tablist">

                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="user" role="tabpanel">
                                        <canvas id="activity" class="chartjs"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

       <?php include('footer.php')?>

       <!-- add extra script here -->
</body>

</html>