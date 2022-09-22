@extends('index')

@section('title')
    Accounts
@endsection

@section('content')
@if(session('alert'))
<section class='alert alert-success'>{{session('alert')}}</section>
@endif
      <div class="container mt-5">
        <div class="row tm-content-row">
          <div class="col-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
              <h2 class="tm-block-title">List account Admin</h2>
              <p><a href="{{route('create-account')}}" class="chu-table"><button type="button" style="margin-bottom: 10px" class="btn btn-primary ">Thêm account Admin mới</button> </a></p>             
              <table class="table table-striped table-bordered bang-account">
                  <tr class="can-giua">
                      <td>STT</td>
                      <td>ID</td>
                      <td>Username</td>
                      <td>Email</td>
                      <td>Thao tác</td>
                  </tr>
                  <?php $i=1?>
                  @foreach($users as $key => $value)
                  <tr class="can-giua">
                      <td>{{$i++}}</td>
                      <td>{{$value['id']}}</td>
                      <td>{{$value['username']}}</td>
                      <td>{{$value['email']}}</td>
                      <td>
                          <a href="{{route('edit-account')}}"><button type="button" class="btn btn-warning btn-thaotac">Sửa</button></a>
                          <a href="{{route('delete-account',['id'=>$value->id])}}" onclick="confirm('Bạn có chắc muốn xóa sản phẩm ?') || event.stopImmediatePropagation()">
                          <button type="button" class="btn btn-danger btn-thaotac">Xóa</button></a>
                      </td>
                  </tr>
                  @endforeach
              </table>
              </div>
          </div>
        </div>
      </div>
@endsection

