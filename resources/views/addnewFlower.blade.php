{{-- MANAGER --}}

@extends('headerGuest')

@section('content')
    
<div class="container">

    <h1 class="text-center my-5">Add New Flower</h1>

    <form>
        <div class="form-group row d-flex justify-content-center">
          <label for="inputCategory" class="col-sm-2 col-form-label">Category</label>
          <div class="col-sm-4">
            <select class="form-control">
                <option id="">Flower 1</option>
                <option id="">Flower 2</option>
                <option id="">Flower 3</option>
            </select>
          </div>
        </div>

        <div class="form-group row d-flex justify-content-center">
            <label for="inputFlowerName" class="col-sm-2 col-form-label">Flower Name</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputFlowerName">
            </div>
        </div>        

        <div class="form-group row d-flex justify-content-center">
            <label for="inputFlowerPrice" class="col-sm-2 col-form-label">Flower Price (Rupiah)</label>
            <div class="col-sm-4">
              <input type="number" class="form-control" id="inputFlowerPrice">
            </div>
        </div>

        <div class="form-group row d-flex justify-content-center">
            <label for="inputFlowerDescription" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-4">
              <textarea class="form-control" name="" id="inputFlowerDescription" cols="46" rows="2" placeholder="Description"></textarea>
            </div>
        </div>

        <div class="form-group row d-flex justify-content-center">
            <label for="inputFlowerImage" class="col-sm-2 col-form-label">Flower Image</label>
            <div class="col-sm-4">
              <input type="file" id="inputFlowerImage">
            </div>
        </div>

        <div class="form-group d-flex justify-content-center">
            <a href="" class="btn btn-primary">Add Flower</a>
        </div>
            
      </form>

</div>

@endsection