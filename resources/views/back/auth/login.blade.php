@extends('back.layouts.login')

@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-login">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-12">
            <h2>Admin login</h2>
          </div>
        </div>
        <hr>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <form action="{{ url('admin/login') }}" id="login-form" method="POST" role="form">
            {!! csrf_field() !!}
              <div class="form-group">
                <input type="text" id="username" class="form-control" name="email" tabindex="1" placeholder="E-mail" value="{{ old('email') }}">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" tabindex="2" placeholder="Password">
              </div>
              <div class="form-group text-center">

                <input type="checkbox" tabindex="3" class="" id="remember" name="remember">
                <label for="remember">Remember me?</label>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6 col-sm-offset-3">
                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log in">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="text-center">
                      <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                    </div>
                  </div>
                </div>
              </div>
              </form>

            @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Login failed</strong>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
