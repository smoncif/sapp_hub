@extends('layouts.log')

@section('content')
  <!-- BEGIN FORGOT PASSWORD FORM -->
  @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  @endif
<form class="forget-form"  method="POST" action="{{ route('password.email') }}">
    {{ csrf_field() }}
      <h3>Forget Password ?</h3>
      <p> Enter your e-mail address below to reset your password. </p>
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <div class="input-icon">
              <i class="fa fa-envelope"></i>
              <input id="email" class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" value="{{ old('email') }}" required />
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
      </div>
      <div class="form-actions">
          <a type="button" class="btn red btn-outline" href="{{ route('login') }}"" >Back </a>
          <button type="submit" class="btn green pull-right"> Submit </button>
      </div>
  </form>
  <!-- END FORGOT PASSWORD FORM -->
@endsection
