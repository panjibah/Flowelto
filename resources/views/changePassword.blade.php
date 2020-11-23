{{-- USER AND MANAGER --}}

@extends('header')

@section('content')
    
<div class="container">

    <h1 class="text-center my-5">Change Password</h1>

    <form>

        <div class="form-group row d-flex justify-content-center">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputPassword">
            </div>
        </div>        

        <div class="form-group row d-flex justify-content-center">
            <label for="inputNewPassword" class="col-sm-2 col-form-label">New Password</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" id="inputNewPassword">
            </div>
        </div>

        <div class="form-group row d-flex justify-content-center">
            <label for="inputConfirmNewPassword" class="col-sm-2 col-form-label">Confirm New Password</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" id="inputConfirmNewPassword">  
            </div>
        </div>

        <div class="form-group d-flex justify-content-center">
            <a href="" class="btn btn-primary">Change Password</a>
        </div>
            
      </form>

</div>

@endsection