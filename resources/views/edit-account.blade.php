@extends('index')

@section('title')
    Profile
@endsection

@section('content')
@if(session('alert'))
<section class='alert alert-success'>{{session('alert')}}</section>
@endif
<div class="container mt-5">
    <div class="row tm-content-row">
            <div class="tm-block-col tm-col-avatar">
                <div class="tm-bg-primary-dark tm-block tm-block-avatar">
                <h2 class="tm-block-title">Change Avatar</h2>
                <div class="tm-avatar-container">
                    <img
                    src="img/avatar.png"
                    alt="Avatar"
                    class="tm-avatar img-fluid mb-4"
                    />
                    <a href="#" class="tm-avatar-delete-link">
                    <i class="far fa-trash-alt tm-product-delete-icon"></i>
                    </a>
                </div>
                <button class="btn btn-primary btn-block text-uppercase">
                    Upload New Photo
                </button>
                </div>
            </div>
            <div class="tm-block-col tm-col-account-settings">
                <div class="tm-bg-primary-dark tm-block tm-block-settings">
                <h2 class="tm-block-title">Update Account</h2>
                <form action="{{route('update-account')}}"  method="post" class="tm-signup-form row">
                    @csrf
                    
                    <div class="form-group col-lg-6">
                    <label for="username">UserName</label>
                    <input
                        id="name"
                        name="username"
                        type="text"
                        value="{{auth()->user()->username}}"
                        class="form-control validate"
                    />
                    </div>
                    <div class="form-group col-lg-6">
                    <label for="email">Email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        value="{{auth()->user()->email}}"
                        class="form-control validate"
                    />
                    </div>
                    <div class="form-group col-lg-12 checkbox1">
                    <input type="checkbox" name="change_password"><p class="ml-2">Bạn có muốn thay đổi password?</p> 
                    </div>
                    <div class="form-group col-lg-6 password">
                    <label for="password">Password</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        class="form-control validate"
                    />
                    </div>
                    <div class="form-group col-lg-6 password">
                    <label for="password2">Re-enter Password</label>
                    <input
                        id="password2"
                        name="password2"
                        type="password"
                        class="form-control validate"
                    />
                    </div>
                    <div class="form-group col-lg-6">
                    <label for="phone">Phone</label>
                    <input
                        id="phone"
                        name="sdt"
                        type="tel"
                        value="{{auth()->user()->sdt}}"
                        class="form-control validate"
                    />
                    </div>                    
                    <div class="form-group col-lg-6">
                    <label for="roles">Phân quyền</label><br>
                    <select name="is_admin" id="is_admin" style="height: 50px ; width: 295px;">
                        <option selected value="0">Quản trị viên</option>
                        <option value="1">ADMIN</option>
                    </select>
                  </div>
                    <div class="form-group col-lg-12">
                    <label class="tm-hide-sm">&nbsp;</label>
                    <button
                        type="submit"
                        class="btn btn-primary btn-block text-uppercase"
                    >
                        Update Account
                    </button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
@endsection
