@extends('layouts.log')

@section('content')
<!-- BEGIN LOGIN FORM -->
@if(Session::has('success'))
  <div class="alert alert-success">
    {{ Session::get('success') }}
  </div>
@endif
            <form class="login-form" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <h3 class="form-title">Login to your account</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter any username and password. </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label control-label visible-ie8 visible-ie9">E-Mail Address</label>
                        <div class="input-icon">
                          <i class="fa fa-user"></i>
                            <input id="email" type="email" class="form-control placeholder-no-fix" name="email" placeholder="your email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input id="password" class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" required />
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                       </div>
                </div>

                <div class="form-actions">
                    <label class="rememberme mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} value="1" /> Remember me
                        <span></span>
                    </label>
                    <button type="submit" class="btn green pull-right"> Login </button>
                </div>

                <div class="forget-password">
                    <h4>Forgot your password ?</h4>
                    <p> no worries, click
                        <a href="{{ route('password.request') }}"> here </a> to reset your password. </p>


                </div>
                <div class="create-account">
                    <p> Don't have an account yet ?&nbsp;
                        <a href="javascript:;" id="register-btn"> Contact us </a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN CONTACT FORM -->

            <form class="register-form" method="post" action="contact-us">
              {{ csrf_field() }}
                <h3>Contact us</h3>
                <p> Please feel free to contact us: </p>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="control-label visible-ie8 visible-ie9">Full Name</label>
                    <div class="input-icon">
                        <i class="fa fa-font"></i>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="Full Name" name="name" value="{{ old('name') }}" required autofocus /> </div>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <div class="input-icon">
                        <i class="fa fa-envelope"></i>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus/> </div>
                </div>
                <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                    <label class="control-label visible-ie8 visible-ie9">message</label>
                    <div class="input-icon">
                        <i class="fa fa-check"></i>
                        <textarea class="form-control placeholder-no-fix" type="text" rows="4" cols="50" name="message" placeholder="Enter message here..." value="{{ old('message') }}" required ></textarea>
                    </div>

                </div>
                <div class="form-actions">
                    <button id="register-back-btn" type="button" class="btn red btn-outline"> Back </button>
                    <button type="submit" id="register-submit-btn" class="btn green pull-right"> Send </button>
                </div>
            </form>
            <!-- END CONTACT FORM -->
        <!-- END LOGIN -->

        <!--[if lt IE 9]>
        <script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<script src="../assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
@endsection
{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
