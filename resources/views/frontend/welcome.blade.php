@extends('layouts.main')

@section('title') Home @endsection

@section('content')

    <div class="login-form">
        <div class="container">
            <div class="row">
                <form class="form-signin mg-btm">
                    <h3 class="heading-desc">
                        Login
                    </h3>
                    <div class="social-box">
                        <div class="row mg-btm">
                            <div class="col-md-12">
                                <a href="/social/facebook" class="btn btn-primary btn-block">
                                    <i class="icon-facebook"></i>
                                    Login with Facebook
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="#" class="btn btn-info btn-block">
                                    <i class="icon-twitter"></i>
                                    Login with Twitter
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="main">

                        <input type="text" class="form-control" placeholder="Email" autofocus>
                        <input type="password" class="form-control" placeholder="Password">

                        Are you a business? <a href=""> Get started here</a>
                        <span class="clearfix"></span>
                    </div>
                    <div class="login-footer">
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                <div class="left-section">
                                    <a href="">Forgot your password?</a>
                                    <a href="">Sign up now</a>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6 pull-right">
                                <button type="submit" class="btn btn-large btn-danger pull-right">Login</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection