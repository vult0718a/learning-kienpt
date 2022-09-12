@extends('index')

@section('title')
    Login
@endsection

@section('content')
@if(session('alert'))
<section class='alert alert-success'>{{session('alert')}}</section>
@endif
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-12 mx-auto tm-login-col">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12 text-center">
                <h2 class="tm-block-title mb-4">Welcome to Dashboard, Login</h2>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                <form action="{{route('login')}}" method="post" class="tm-login-form">
                  @csrf
                  <div class="form-group">
                    <label for="username">Email</label>
                    <input
                      name="email"
                      type="text"
                      class="form-control validate"
                      id="email"
                      value=""
                      required
                    />
                  </div>
                  <div class="form-group mt-3">
                    <label for="password">Password</label>
                    <input
                      name="password"
                      type="password"
                      class="form-control validate"
                      id="password"
                      value=""
                      required
                    />
                  </div>
                  <div class="form-group-login mt-4">
                    <button
                      type="submit"
                      class="btn btn-primary btn-block text-uppercase btn-login"
                    >
                      Login
                    </button>
                    
                    <a href="{{route('show-form-register')}}"
                      class="btn btn-primary btn-block text-uppercase btn-register">
                    Register
                  </a> 
                    
                  </div>
                  <button class="mt-4 btn btn-primary btn-block text-uppercase">
                    Forgot your password?
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection


