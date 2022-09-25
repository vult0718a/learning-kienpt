@extends('index')

@section('title')
    Register
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
                <h2 class="tm-block-title mb-4">Welcome to Dashboard, Register</h2>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                <form action="{{route('register')}}" method="post" class="tm-login-form">
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
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input
                      name="username"
                      type="text"
                      class="form-control validate"
                      id="username"
                      value=""
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="username">Số điện thoại</label>
                    <input
                      name="sdt"
                      type="text"
                      class="form-control validate"
                      id="sdt"
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
                  <div class="form-group mt-3">
                    <label for="password">Confirm password</label>
                    <input
                      name="confirm-password"
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
                      class="btn btn-primary btn-block text-uppercase"
                    >
                      Submit
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@if(session('alert'))
<section class='alert alert-success'>{{session('alert')}}</section>
@endif

