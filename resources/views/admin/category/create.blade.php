@extends('layouts.app')


@section('title','Create')

@push('css')
      

@endpush

@section('content')
  <div class="wrapper ">
  
    <div class="main-panel">
      <!-- Navbar -->
      
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
             @include('layouts.partial.msg')

              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Add Category</h4>
                  <p class="card-category"> Here is a added data for this field</p>
                </div>
                <div class="card-body">
                 <form method="POST"action="{{route('category.store')}}"enctype="multipart/form-data">
                  @csrf

                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Category</label>
                          <input type="text" class="form-control"name="name">
                        </div>
                      </div>
                    </div>
                   
                    <a href="{{route('category.index')}}"class="btn btn-danger">Back</a>
                    <button type="submit"class="btn btn-primary">Save</button>

                 </form>
                    
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
     
    </div>
  </div>
  
 

@endsection


@push('scripts')


@endpush