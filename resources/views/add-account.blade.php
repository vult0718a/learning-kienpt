@extends('index')

@section('title')
    Add Account
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
                <h2 class="tm-block-title mb-4">ADD ACCOUNT</h2>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                <form action="{{route('store-account')}}" method="post" class="tm-login-form">
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
                  <div class="form-group mt-3">
                    <label for="roles">Phân quyền</label>
                    <select name="is_admin" id="is_admin">
                        <option selected value="0">Quản trị viên</option>
                        <option value="1">ADMIN</option>
                    </select>
                  </div>
                  <!-- <div class="image form-group mt-3">
                    <label>Add images</label>
                    <input type="file" class="form-control" required name="image">
                  </div> -->
                  <div class="form-group-login mt-4">
                    <button
                      type="submit"
                      class="btn btn-primary btn-block text-uppercase"
                    >
                      Add Account
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


