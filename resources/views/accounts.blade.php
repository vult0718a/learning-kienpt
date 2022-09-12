@extends('index')

@section('title')
    Accounts
@endsection

@section('content')
      <div class="container mt-5">
        <div class="row tm-content-row">
          <div class="col-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
              <h2 class="tm-block-title">List account Admin</h2>
              <p><a href="#" class="chu-table">Thêm account Admin mới</a></p>             
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
                          <a href="#"><button type="button" class="btn btn-warning btn-thaotac">Sửa</button></a>
                          <a href="#"><button type="button" class="btn btn-danger btn-thaotac">Xóa</button></a>
                      </td>
                  </tr>
                  @endforeach
              </table>
              </div>
          </div>
        </div>
      </div>
@endsection

