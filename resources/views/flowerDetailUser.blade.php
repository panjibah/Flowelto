{{-- GUEST AND USER --}}
@extends('headerGuest') 

@section('content')
    
<div class="container row mx-auto">

    <div>
        <img src="{{ asset('img/pink.jpg') }}" alt="" class="img-thumbnail" style="width: 500px; height:500px;">
    </div>
    
    <div class="ml-5">
        
        <h1>Lovey Dovey</h1>

        <h3 class="my-5" style="color: chocolate">Rp. 60000</h3>

        <p style="width: 500px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis culpa aperiam dicta quis maxime fuga, iure maiores vitae ad neque nostrum? Libero non optio porro architecto nisi facere, ipsa vero?</p>

        <div>
            <label> <b> Quantity</b></label>
            <input type="number" name="" id="" class="form-control col-sm-3 p-1">
            <a href="" class="btn btn-primary col-sm-3 my-3">Add to Cart</a>
        </div>

    </div>

</div>

@endsection