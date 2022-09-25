@extends('index')

@section('title')
    Add Product
@endsection

@section('content')
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12 can-giua">
                <h2 class="tm-block-title d-inline-block">Add Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-12 col-lg-12 col-md-12">
                <form action="{{route('store-product')}}" method="post" class="tm-edit-product-form">
                  @csrf
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Product Name
                    </label>
                    <input
                      id="name"
                      name="name_product"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Description</label
                    >
                    <textarea
                      name="detail"
                      class="form-control validate"
                      rows="3"
                      required
                    ></textarea>
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Price</label
                    >
                    <input
                      id="name"
                      name="price"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Category</label
                    >
                    <select
                      name="category_id"
                      class="custom-select tm-select-accounts"
                      id="category"
                    >
                    @foreach($category as $value)
                 <option value="{{ $value->id }}">{{ $value->name_category }}</option>
                  @endforeach
                    </select>
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="stock"
                      >Units In Stock
                    </label>
                    <input
                      id="stock"
                      name="stock"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>

                  
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
