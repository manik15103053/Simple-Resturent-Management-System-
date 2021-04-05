@extends('layouts.app')


@section('title','Item')

@push('css')
      
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">

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
              <a href="{{route('item.create')}}"class="btn btn-primary">Add New Item</a>
              @include('layouts.partial.msg')


              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Category Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body"style="width:"100%>
                  <div class="table-responsive">
                    <table id="table"class="table table-striped table-bordered"style="width:100%">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Created At</th>
                        <th>Update At</th>
                        <th>Action</th>

                      </thead>
                      <tbody>
                        
                     		@foreach($items as $key =>$item)
                        <tr>
                     		<td>{{$key + 1}}</td>
                     		<td>{{$item->name}}</td>
                     		<td>{{$item->image}}</td>
                     		<td>{{$item->category->name}}</td>
                     		<td>{{$item->description}}</td>
                     		<td>{{$item->price}}</td>
                     		<td>{{$item->created_at}}</td>
                     		<td>{{$item->updated_at}}</td>
                        <td>
                          <a href="{{route('item.edit',$item->id)}}"class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i><a>
                           <form id="delete-form-{{$item->id}}"action="{{route('item.destroy',$item->id)}}"style="display:none;"method="post">
                            @csrf
                            @method('DELETE')

                           </form>
                           <button type="button"class="btn btn-danger btn-sm"onclick="if(confirm('Are you sure?You want to delete this?')){

                           event.preventDefault();
                           document.getElementById('delete-form-{{$item->id}}').submit();



                         }else{


                         event.preventDefault();

                       }"><i class="material-icons">delete</i></button>

                        </td>
                        
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
     
    </div>
  </div>
  
 

@endsection


@push('scripts')
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


<script>
$(document).ready(function() {
    $('#table').DataTable();
} );
</script>

@endpush