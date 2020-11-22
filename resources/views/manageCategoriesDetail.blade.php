{{-- MANAGER --}}

@extends('headerManager')

@section('content')
    
<div class="container d-flex">

  <div>
    <img src="{{ asset('img/pink.jpg') }}" alt="">
  </div>
    
  <div>
    <form class="ml-5" style="width: 50rem">
      
        <div class="form-group row">
            <label for="inputCategoryName" class="col-sm-2 col-form-label">Category Name</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="inputCategoryName">
            </div>
        </div>        

        <div class="form-group row">
            <label for="inputCategoryImage" class="col-sm-2 col-form-label">Category Image</label>
            <div class="col-sm-6">
              <input type="file" id="inputCategoryImage">
            </div>
        </div>

        <div class="form-group">
            <a href="" class="btn btn-primary">Update</a>
        </div>
            
      </form>
  </div>

</div>

@endsection