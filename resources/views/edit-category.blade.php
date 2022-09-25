@extends('index')

@section('title')
    Update Category
@endsection

@section('content')
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12 can-giua">
                <h2 class="tm-block-title d-inline-block">Update Category</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-12 col-lg-12 col-md-12">
                <form action="{{route('edit-category', $category->id)}}" method="post" class="tm-edit-product-form">
                    @csrf
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Category Name
                    </label>
                    <input
                      id="name"
                      name="name_category"
                      type="text"
                      class="form-control validate"
                      value="{{$category['name_category']}}"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Description</label
                    >
                    <input
                    id="detail"
                      name="detail"
                      type="text"
                      class="form-control validate"
                      value="{{$category->detail}}"
                      require
                    />
                  </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Update Category Now</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
