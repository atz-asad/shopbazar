



@extends('admin.layouts.app') {{-- master layout extend করা হয়েছে --}}


@section('main')


  <!-- Main Wrapper -->
    <div class="main-wrapper">

      <!-- Page Wrapper -->
      <div class="page-wrapper">

        <div class="content container-fluid">

          <div class="categori-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="col-lg-6">
                  <!-- Page Header -->
                  <div class="page-header">
                    <div class="row">
                      <div class="col-sm-12">
                        <h3 class="page-title">categori create!</h3>
                      </div>
                    </div>
                  </div>
                  <!-- /Page Header -->
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-5">
                <div class="card-body">
                  <form action="{{ route('categori.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                      <label class="d-block">categori Name</label>
                      <input type="text" name="name" placeholder="categori name" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="d-block">categori description</label>
                      <textarea  name="description"  placeholder="categori description" class="form-control" cols="10" rows="4">

                      </textarea>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                      <a href="{{ route('categori.index') }}"  class="btn btn-info" >cancel</a>
										
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>

                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--- categori-wrapper -->

        </div>
        <!--- container-fluid -->
      </div>
      <!-- /Page Wrapper -->

    </div>
  <!-- /Main Wrapper -->

@endsection
