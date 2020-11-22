{{-- GUEST --}}

@extends('headerGuest')

@section('content')

<script src="{{ asset('js/validationRegister.js') }}"></script>

<div class="container">

    <h1 class="text-center my-5">Register</h1>

  <form name="RegistrationForm" method="post" action="{{ asset('js/validation.js') }}" onsubmit="return validateRegister()">
        <div class="form-group row d-flex justify-content-center">
          <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputUsername" required>
          </div>
        </div>

        <div class="form-group row d-flex justify-content-center">
            <label for="inputEmail" class="col-sm-2 col-form-label">E-Mail Address</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="inputEmail" required>
            </div>
          </div>

        <div class="form-group row d-flex justify-content-center">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" id="inputPassword" required>
            </div>
        </div>

        <div class="form-group row d-flex justify-content-center">
            <label for="inputConfirmPassword" class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" id="inputConfirmPassword" required>
            </div>
        </div>

        <div class="form-group row d-flex justify-content-center">
            <label for="inputGender" class="col-sm-2 col-form-label">Gender</label>
            
            <div class="col-sm-4">
                <div class="mx-4">
                    <input class="form-check-input" type="radio" name="gender" id="Male" value="" checked>
                    <label class="form-check-label" for="exampleRadios1">Male</label>
                </div>

                <div class="mx-4">
                    <input class="form-check-input" type="radio" name="gender" id="Female" value="Female">
                    <label class="form-check-label" for="exampleRadios2">Female</label>
                </div>

            </div>

            
        </div>
    

        <div class="form-group row d-flex justify-content-center">
            <label for="inputDOB" class="col-sm-2 col-form-label">Date Of Birth</label>
            <div class="col-sm-4">
              <input type="date" class="form-control" id="inputDOB" required>
            </div>
        </div>

        <div class="form-group row d-flex justify-content-center">
            <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-4">
              <textarea class="form-control" name="" id="inputAddress" cols="46" rows="5" placeholder="Address" required></textarea>
            </div>
        </div>
        

        <div class="form-group d-flex justify-content-center">
            <button type="button" class="btn btn-primary" value="Register" name="Submit" onclick="validateRegister()">Register</button>
        </div>
            
      </form>

</div>

@endsection