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
                    <form action="{{route('upload-avatar')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="tm-avatar-container">
                            @if(Auth::user()->avatar)
                            <img
                            src="{{'/storage/image/'.auth()->user()->avatar}}"
                            alt="avatar"
                            class="tm-avatar img-fluid mb-4"
                            />
                            <a href="#" class="tm-avatar-delete-link">
                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                            </a>
                            @else
                            <img
                            src="img/avatar.png"
                            alt="avatar"
                            class="tm-avatar img-fluid mb-4"
                            />
                            <a href="#" class="tm-avatar-delete-link">
                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                            </a>
                            @endif
                        </div>
                        
                        <div class="image form-group mt-3 mb-3">
                            <input type="file" class="form-control" required name="image">
                        </div>
                        <button class="btn btn-primary btn-block text-uppercase" value="Upload">
                            Upload New Avatar
                        </button>
                        </form>
                </div>                    
            </div>
            <div class="tm-block-col tm-col-account-settings">
                <div class="tm-bg-primary-dark tm-block tm-block-settings">
                <h2 class="tm-block-title">Profile Settings</h2>
                <form action="{{route('edit-profile')}}"  method="post" class="tm-signup-form row">
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
                    <label class="tm-hide-sm">&nbsp;</label>
                    <button
                        type="submit"
                        class="btn btn-primary btn-block text-uppercase"
                    >
                        Update Your Profile
                    </button>
                    </div>
                    
                </form>
                    <div class="s col-lg-12">
                    <a href="{{route('delete-profile')}}" onclick="confirm('Bạn có chắc muốn hủy tài khoản ?') || event.stopImmediatePropagation()" ><button
                        type="submit"
                        class="btn btn-primary btn-block text-uppercase"
                    >
                        Delete Your Account
                    </button></a>
                    </div>
                </div>
            </div>
            </div>
        </div>
@endsection
