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
              <h3 class="page-title">categori!</h3>
            </div>
          </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Categori all</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table mb-0">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($categories as $categori )
                      
                      <tr>
                        <td>{{ $loop -> iteration}}</td>
                        <td>{{ $categori -> name }}</td>
                        <td>{{ $categori -> description }}</td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
    <!-- /Page Wrapper -->

  </div>
  <!-- /Main Wrapper -->
@endsection
