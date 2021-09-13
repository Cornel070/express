<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Go Express Alliance - Edit Parcel </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/images/favicon.png') }}">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ route('dashboard') }}" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('admin/images/logo.png') }}" alt="">
                <img class="logo-compact" src="{{ asset('admin/images/logo-text.png') }}" alt="">
                <img class="brand-title" src="{{ asset('admin/images/logo-text.png') }}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ route('logout') }}" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-form"></i><span class="nav-text">Parcel</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('create') }}">Create Parcel</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Parcel Details</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-layout-25"></i><span class="nav-text">Parcel Table</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('dashboard') }}">Parcel details</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Parcel addition</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit parcel</h4>
                            </div>
                            <div class="card-body">
                                <form action="" method="post" class="step-form-horizontal">
                                    @csrf
                                    <div>
                                        <h4>Parcel Info</h4>
                                        <section>
                                            <div class="row">
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">Parcel Tracking Code*</label>
                                                        <input type="text" name="code" class="form-control" value="{{ $parcel->code }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">Pickup Time*</label>
                                                        <input type="text" name="pickup_time" class="form-control" value="{{ $parcel->pickup_time }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">Sender Name*</label>
                                                        <input type="text" name="sender" class="form-control" value="{{ $parcel->sender }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">Parcel Origin*</label>
                                                        <input type="text" name="origin" class="form-control" value="{{ $parcel->origin }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">Receiver Name*</label>
                                                        <input type="text" name="reciever" class="form-control" value="{{ $parcel->reciever }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">Reciever Phone Number*</label>
                                                        <div class="input-group">
                                                            <input type="text" name="reciever_phone" class="form-control" value="{{ $parcel->reciever_phone }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">Parcel Destination*</label>
                                                        <input type="text" name="destination" value="{{ $parcel->destination }}" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">Parcel Status*</label>
                                                        <input type="text" name="status" value="{{ $parcel->status }}" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">Parcel Location*</label>
                                                        <input type="text" name="location" class="form-control" required
                                                        value="{{ $parcel->location }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">Tracking Event*</label>
                                                        <input type="text" name="event" value="{{ $parcel->event }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 mb-4">
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer"></div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('admin/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('admin/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('admin/js/custom.min.js') }}"></script>
    


    <script src="{{ asset('admin/vendor/jquery-steps/build/jquery.steps.min.js')}}"></script>
    <script src="{{ asset('admin/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <!-- Form validate init -->
    <script src="{{ asset('admin/js/plugins-init/jquery.validate-init.js')}}"></script>



    <!-- Form step init -->
    <script src="{{ asset('admin/js/plugins-init/jquery-steps-init.js')}}"></script>

</body>

</html>
