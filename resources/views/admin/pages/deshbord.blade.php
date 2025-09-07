


@extends('admin.layouts.app')

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
              <h3 class="page-title">Welcome Admin!</h3>
              <ul class="breadcrumb">
                <li class="breadcrumb-item active">Dashboard</li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /Page Header -->

        
        <div class="row">
          <div class="col-md-12 col-lg-6">

            <!-- Sales Chart -->
            <div class="card card-chart">
              <div class="card-header">
                <h4 class="card-title">Revenue</h4>
              </div>
              <div class="card-body">
                <div id="morrisArea"></div>
              </div>
            </div>
            <!-- /Sales Chart -->

          </div>
          <div class="col-md-12 col-lg-6">

            <!-- Invoice Chart -->
            <div class="card card-chart">
              <div class="card-header">
                <h4 class="card-title">Status</h4>
              </div>
              <div class="card-body">
                <div id="morrisLine"></div>
              </div>
            </div>
            <!-- /Invoice Chart -->

          </div>
        </div>

      </div>
    </div>
    <!-- /Page Wrapper -->

  </div>
  <!-- /Main Wrapper -->


@endsection


