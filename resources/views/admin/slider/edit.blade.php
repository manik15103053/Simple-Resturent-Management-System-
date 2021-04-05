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
                  <h4 class="card-title ">Edit Data</h4>
                  <p class="card-category"> Here is a added data for this field</p>
                </div>
                <div class="card-body">
                 <form method="POST"action="{{route('slider.update',$slider->id)}}"enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  


                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">title</label>
                          <input type="text" class="form-control"name="title"value="{{$slider->title}}">
                        </div>
                      </div>
                    </div>
                   <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Sub-Title</label>
                          <input type="text" class="form-control"name="sub_title"value="{{$slider->sub_title}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        
                          <label class="bmd-label-floating">Image</label>
                          <input type="file" name="image">
                      
                      </div>
                    </div>
                    <a href="{{route('slider.index')}}"class="btn btn-danger">Back</a>
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