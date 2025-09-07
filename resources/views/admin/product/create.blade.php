



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

          <div class="card-body">
            <form action="#">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control">
              </div>
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control">
              </div>
              <div class="form-group">
                <label>Repeat Password</label>
                <input type="password" class="form-control">
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>





        </div>
      </div>
      <!-- /Page Wrapper -->
    </div>
  <!-- /Main Wrapper -->
@endsection
