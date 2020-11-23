{{-- GUEST --}}

@extends('header')

@section('content')
    
<div class="container">

    <h1 class="text-center my-5">Login</h1>

    <form method="post" action="/loginPost">
      {{ csrf_field() }}
        <div class="form-group row d-flex justify-content-center">
          <label for="inputEmail" class="col-sm-2 col-form-label">E-Mail Address</label>
          <div class="col-sm-4">
            <input type="email" class="form-control" name="email">
          </div>
        </div>

        <div class="form-group row d-flex justify-content-center">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" name="password">
            </div>
        </div>
        
        <div class="d-flex justify-content-center">
            <input type="checkbox" class="mt-1" aria-label="Checkbox for following text input">
            <label class="mx-2" for="">Remember Me</label>
        </div> 

        <div class="form-group d-flex justify-content-center">
          <button class="btn btn-primary" type="submit">Login</button>  
          <label class="my-2 ml-2" for=""> <a href="">Forgot Your Password?</a></label>
        </div>
            
      </form>

</div>

@endsection