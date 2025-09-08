@extends('admin.layouts.app') {{-- master layout extend করা হয়েছে --}}


@section('main')
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="row">
            <div class="col-sm-12">
              <h3 class="page-title">product Create!</h3>

            </div>
          </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
          <div class="col-lg-5">
            <div class="card-body">
              <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf



                <div class="form-group">
                  <label class="d-block">product image</label>
                  <input type="file" name="image" placeholder="product name" class="form-control">
                </div>

                <div class="form-group">
                  <label class="d-block">product Name</label>
                  <input type="text" name="name" placeholder="product name" class="form-control">
                </div>
                <div class="form-group">
                  <label class="d-block">product description</label>
                  <textarea name="description" placeholder="product description" class="form-control" cols="10" rows="4"></textarea>
                </div>
                <div class="form-group">
                  <label class="d-block">product description</label>
                  <input type="text" name="price" placeholder="product price" class="form-control">
                </div>
                <div class="form-group">
                  <label class="d-block">product quantity</label>
                  <input type="text" name="stock_quantity" placeholder="product price" class="form-control">
                </div>

                <div class="form-group">
                  <label class="d-block">product category</label>
                  <select name="category" id="" class="form-control from-select">
                    <option value="book">book</option>
                    <option value="tv">tv</option>
                    <option value="phone">phone</option>
                    <option value="computer">computer</option>
                  </select>
                </div>



                <div class="d-flex justify-content-between">
                  <a href="{{ route('product.index') }}" class="btn btn-info">cancel</a>

                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

              </form>
            </div>
          </div>
        </div>




      </div>
    </div>
    <!-- /Page Wrapper -->
  </div>
  <!-- /Main Wrapper -->
@endsection
