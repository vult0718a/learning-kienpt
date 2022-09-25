@extends('index')

@section('title')
    Product
@endsection

@section('content')
@if(session('alert'))
<section class='alert alert-success'>{{session('alert')}}</section>
@endif
    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">PRODUCT NAME</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">IN STOCK</th>
                    <th scope="col">CATEGORY</th>
                    <th scope="col">DELETE</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($product as $value)
                  <tr>
                    <td> </td>
                    <td class="tm-product-name"><a href="{{route('edit-product',['id'=>$value->id])}}" class="tm-product-name">
                    <div style="height:300%;width:300%" class="nhay-dong">{{ $value->name_product }}</div></a></td>
                    <td>{{ $value->price }}</td>
                    <td>{{ $value->stock }}</td>
                    <td>{{ $value->category ? $value->category->name_category : 'Khong co category' }}</td>
                    <td>
                      <a href="{{route('delete-product', ['id'=>$value->id])}}" 
                      onclick="confirm('Bạn có chắc muốn xóa sản phẩm ?') || event.stopImmediatePropagation()" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a
              href="{{route('create-product')}}"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Product Categories</h2>
            <div class="tm-product-table-container">
              <table class="table tm-table-small tm-product-table">
                <tbody>
                  <?php $i=1?>
                  @foreach($categories as $key => $value)
                  <tr class="nhay-dong">                  
                  <td><a href="{{route('form-edit-category',['id'=>$value->id])}}" class="tm-product-name">
                    <div style="height:100%;width:100%" class="nhay-dong">{{$value['name_category']}}</div>
                  </a></td>
                  <td>
                      <a href="{{route('delete-category', ['id'=>$value->id])}}" 
                      onclick="confirm('Bạn có chắc muốn xóa loại sản phẩm ?') || event.stopImmediatePropagation()" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
              </table>
            </div>
            <!-- table container -->
            <a href="{{route('form-add-category')}}"
             class="btn btn-primary btn-block text-uppercase mb-3">
              Add new category
            </a>
          </div>
        </div>
      </div>
    </div>
@endsection