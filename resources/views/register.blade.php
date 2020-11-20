{{-- GUEST --}}

@extends('headerGuest')

@section('content')
    
<div class="container">

    <h1 class="text-center my-5">Register</h1>

    <form>
        <div class="form-group row d-flex justify-content-center">
          <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputUsername">
          </div>
        </div>

        <div class="form-group row d-flex justify-content-center">
            <label for="inputEmail" class="col-sm-2 col-form-label">E-Mail Address</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="inputEmail">
            </div>
          </div>

        <div class="form-group row d-flex justify-content-center">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" id="inputPassword">
            </div>
        </div>

        <div class="form-group row d-flex justify-content-center">
            <label for="inputConfirmPassword" class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" id="inputConfirmPassword">
            </div>
        </div>

        <div class="form-group row d-flex justify-content-center">
            <label for="inputGender" class="col-sm-2 col-form-label">Gender</label>
            
            <div class="col-sm-4">
                <div class="mx-4">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">Male</label>
                </div>

                <div class="mx-4">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">Female</label>
                </div>

            </div>

            
        </div>
    

        <div class="form-group row d-flex justify-content-center">
            <label for="inputDOB" class="col-sm-2 col-form-label">Date Of Birth</label>
            <div class="col-sm-4">
              <input type="date" class="form-control" id="inputDOB">
            </div>
        </div>

        <div class="form-group row d-flex justify-content-center">
            <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-4">
              <textarea class="form-control" name="" id="inputAddress" cols="46" rows="5" placeholder="Address"></textarea>
            </div>
        </div>
        

        <div class="form-group d-flex justify-content-center">
            <a href="/login" class="btn btn-primary">Register</a>
        </div>
            
      </form>

</div>

@endsection