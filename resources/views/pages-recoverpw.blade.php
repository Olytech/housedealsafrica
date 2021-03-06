@extends('layouts.master-without-nav')

@section('title') @lang('translation.Recover_Password_1') @endsection

@section('body')

    <body>
    @endsection

    @section('content')
        <div class="home-btn d-none d-sm-block">
            <a href="index" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary">
                                <div class="text-primary text-center p-4">
                                    <h5 class="text-white font-size-20 p-2">Reset Password</h5>
                                    <a href="index" class="logo logo-admin">
                                        <img src="{{ URL::asset('/assets/images/logo-sm.png') }}" height="24" alt="logo">
                                    </a>
                                </div>
                            </div>

                            <div class="card-body p-4">

                                <div class="p-3">

                                    <div class="alert alert-success mt-5" role="alert">
                                        Enter your Email and instructions will be sent to you!
                                    </div>


                                    <form class="form-horizontal mt-4" action="index">

                                        <div class="form-group">
                                            <label for="useremail">Email</label>
                                            <input type="email" class="form-control" id="useremail"
                                                placeholder="Enter email">
                                        </div>

                                        <div class="form-group row  mb-0">
                                            <div class="col-12 text-right">
                                                <button class="btn btn-primary w-md waves-effect waves-light"
                                                    type="button">Reset</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>

                        </div>

                        <div class="mt-5 text-center">
                            <p>Remember It ? <a href="pages-login" class="font-weight-medium text-primary"> Sign In here
                                </a> </p>
                            <p class="mb-0">?? <script>
                                    document.write(new Date().getFullYear())

                                </script> HouseDealsAfrica. Design by
                                        Olytech Design</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    @endsection
