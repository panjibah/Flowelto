{{-- USER --}}

@extends('headerUser')

@section('content')
    
<div class="container">

    <h1 class="text-center my-5">Your Transaction at 2020-05-11 19:03:58</h1>

    <div class="row transactionContainer border-bottom border-white">
        <div class="col text-center font-weight-bold p-5"><img class="imgSize" src="{{ asset('img/pink.jpg') }}" alt=""></div>
        <div class="col text-center font-weight-bold p-5">Classic Wedding</div>
        <div class="col text-center font-weight-bold p-5">Rp. 64000</div>
        <div class="col font-weight-bold p-5">
            <p>Quantity</p>
            <input type="number" name="" id="" class="form-control col-sm-5 p-1">
            <a href="" class="btn btn-primary my-3">Update</a>
        </div>
    </div>

    <div class="row transactionContainer border-bottom border-white">
        <div class="col text-center font-weight-bold p-5"><img class="imgSize" src="{{ asset('img/pinkwhite.jpg') }}" alt=""></div>
        <div class="col text-center font-weight-bold p-5">Pink n White</div>
        <div class="col text-center font-weight-bold p-5">Rp. 64000</div>
        <div class="col font-weight-bold p-5">
            <p>Quantity</p>
            <input type="number" name="" id="" class="form-control col-sm-5 p-1">
            <a href="" class="btn btn-primary my-3">Update</a>
        </div>
    </div>

    <div class="text-center my-3">
        <a href="" class="btn btn-danger">Checkout</a>
    </div>
    
</div>

@endsection