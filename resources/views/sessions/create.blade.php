
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

        <title>TBC APPS - Login</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">
        <!-- App css -->
        <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
        <script src="{{ URL::asset('assets/js/modernizr.min.js') }}"></script>
    </head>
    <body>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wrapper-page">
                            <div class="m-t-40 card-box">
                                <div class="text-center">
                                    <h2 class="text-uppercase m-t-0 m-b-30">
                                        <span> <i class="mdi mdi-hospital-marker" style="color: #4542f4;"></i><p style="color: #4542f4;">TBC APPS</p></span>
                                        <h6>Login</h6>
                                        <hr>
                                    </h2>
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" method="post" action="/login" autocomplete="off">
                                        {{ csrf_field() }}
                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="email">E-Mail</label>
                                                <i class="fa fa-email"></i>
                                                <input class="form-control" 
                                                    type="email" name="email" id="email"
                                                    placeholder="email@email.com" required autocomplete="false">
                                            </div>
                                        </div>
                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="password">Kata Sandi</label>
                                                <input class="form-control" type="password" 
                                                    name="password" id="password  
                                                    placeholder="Masukan Password" required autocomplete="false">
                                            </div>
                                        </div>
                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- jQuery  -->
        <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/jquery.slimscroll.js') }}"></script>        
        <!-- App js -->
        <script src="{{ URL::asset('assets/js/jquery.core.js') }}"></script>
        <script src="{{ URL::asset('assets/js/jquery.app.js') }}"></script>                                
    </body>
</html>