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

    <title>MotaAdmin - Bootstrap Admin Dashboard</title>
    <?php include('head.php')?>
</head>

<body>
<?php include('header.php')?>
    


        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, sandeep welcome back!</h4>
                            <p class="mndeep nath b-0">Your business trading dashboard </p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo"></div>
                                </div>
                                <div class="profile-info">
                                    <div class="profile-photo">
                                        <img src="<?php echo base_url()?>/assets/images/profile/profile.png" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <div class="profile-details">
                                        <div class="profile-name px-3 pt-2">
                                            <h4 class="text-primary mb-0">Mr. sandeep Nath</h4>
                                            <p>Trading Analysis</p>
                                        </div>
                                        <div class="profile-email px-2 pt-2">
                                            <h4 class="text-muted mb-0"><a
                                                    href="https://motaadmin.dexignlab.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="f69e939a9a99b6939b979f9ad895999b">sandeepnath41@gmail.com</a>
                                            </h4>
                                            <p>Email</p>
                                        </div>
                                        <div class="dropdown ml-auto">
                                            <a href="#" class="btn btn-primary light sharp" data-toggle="dropdown"
                                                aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                                                    height="18px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                        <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                        <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                    </g>
                                                </svg></a>
                                            <ul class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"
                                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-169px, 30px, 0px);">
                                                <li class="dropdown-item"><i
                                                        class="fa fa-user-circle text-primary mr-2"></i> View profile
                                                </li>
                                                <li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i>
                                                    Add to close friends</li>
                                                <li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i>
                                                    Add to group</li>
                                                <li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i>
                                                    Block</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-statistics mb-5">
                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="m-b-0">150k</h3><span>Gross</span>
                                            </div>
                                            <div class="col">
                                                <h3 class="m-b-0">14K</h3><span>Profit</span>
                                            </div>
                                            <div class="col">
                                                <h3 class="m-b-0">4K</h3><span>Loss</span>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                           
                                            <a href="<?php echo base_url()?>admin/single-user" class="btn btn-success mb-1 w-100">Upgrade</a>
                                        </div>
                                    </div>
                                </div>
                         
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#my-posts" data-toggle="tab"
                                                    class="nav-link active show">Posts</a>
                                            </li>
                                            <li class="nav-item"><a href="#about-me" data-toggle="tab"
                                                    class="nav-link">About Me</a>
                                            </li>
                                            <li class="nav-item"><a href="#profile-settings" data-toggle="tab"
                                                    class="nav-link">Setting</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="my-posts" class="tab-pane fade active show">
                                                <div class="my-post-content pt-3">
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
                                             <div class="text-center"> <button class="btn btn-success btn-xs">View More</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                </div>
                                            </div>
                                            <div id="about-me" class="tab-pane fade">
                                                <div class="profile-about-me">
                                                    <div class="pt-4 border-bottom-1 pb-3">
                                                        <h4 class="text-primary">About Me</h4>
                                                        <p class="mb-2">A wonderful serenity has taken possession of my
                                                            entire soul, like these sweet mornings of spring which I
                                                            enjoy with my whole heart. I am alone, and feel the charm of
                                                            existence was created for the bliss of souls like mine.I am
                                                            so happy, my dear friend, so absorbed in the exquisite sense
                                                            of mere tranquil existence, that I neglect my talents.</p>
                                                       
                                                    </div>
                                                </div>
                                               
                                                <div class="profile-personal-info">
                                                    <h4 class="text-primary mb-4">Personal Information</h4>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Name <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>Sandeep Nath</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span><a
                                                                    href="#"
                                                                    class="__cf_email__"
                                                                    data-cfemail="3c59445d514c50597c59445d514c505950125f5351">sandeepnath41@gmail.com</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Availability <span
                                                                    class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span>active</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Number<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>7049018027</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Location <span
                                                                    class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span>Bhopal, MP 462044</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Year Experience <span
                                                                    class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span>07 Year Experiences</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="profile-settings" class="tab-pane fade">
                                                <div class="pt-3">
                                                    <div class="settings-form">
                                                        <h4 class="text-primary">Account Setting</h4>
                                                        <form>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Email</label>
                                                                    <input type="email" placeholder="Email"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>Password</label>
                                                                    <input type="password" placeholder="Password"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Address</label>
                                                                <input type="text" placeholder="1234 Main St"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Address 2</label>
                                                                <input type="text"
                                                                    placeholder="Apartment, studio, or floor"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>City</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>State</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-2">
                                                                    <label>Zip</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="gridCheck">
                                                                    <label class="custom-control-label" for="gridCheck">
                                                                        Check me out</label>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-success" type="submit">save</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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