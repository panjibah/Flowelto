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
          <label for="inputCategory" class="col-sm-2 col-form-label" >Category</label>
          <div class="col-sm-6">
            <select class="form-control">
                <option id="">Flower 1</option>
                <option id="">Flower 2</option>
                <option id="">Flower 3</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
            <label for="inputFlowerName" class="col-sm-2 col-form-label">Flower Name</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="inputFlowerName">
            </div>
        </div>        

        <div class="form-group row">
            <label for="inputFlowerPrice" class="col-sm-2 col-form-label">Flower Price (Rupiah)</label>
            <div class="col-sm-6">
              <input type="number" class="form-control" id="inputFlowerPrice">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputFlowerDescription" class="col-sm-2 col-form-label" >Description</label>
            <div class="col-sm-6">
              <textarea class="form-control" name="" id="inputFlowerDescription" cols="46" rows="2" placeholder="Description"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputFlowerImage" class="col-sm-2 col-form-label">Flower Image</label>
            <div class="col-sm-6">
              <input type="file" id="inputFlowerImage">
            </div>
        </div>

        <div class="form-group">
            <a href="" class="btn btn-primary">Update</a>
        </div>
            
      </form>
  </div>

</div>

@endsection