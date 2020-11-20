{{-- USER --}}

@extends('headerUser')

@section('content')
    
<div class="container">

    <h1 class="text-center my-5">Your Transaction at 2020-05-11 19:03:58</h1>

    <div class="row transactionContainer">
        <div class="col text-center font-weight-bold border border-white">Flower Image</div>
        <div class="col text-center font-weight-bold border border-white">Flower Name</div>
        <div class="col text-center font-weight-bold border border-white">Subtotal</div>
        <div class="col text-center font-weight-bold border border-white">Quantity</div>
      </div>

    <div class="row transactionContainer">
        <div class="col text-center font-weight-bold border border-white p-5"><img class="imgSize" src="{{ asset('img/pink.jpg') }}" alt=""></div>
        <div class="col text-center font-weight-bold border border-white p-5">Classic Wedding</div>
        <div class="col text-center font-weight-bold border border-white p-5">Rp. 64000</div>
        <div class="col text-center font-weight-bold border border-white p-5">2</div>
    </div>

    <div class="row transactionContainer">
        <div class="col text-center font-weight-bold border border-white p-5"><img class="imgSize" src="{{ asset('img/pinkwhite.jpg') }}" alt=""></div>
        <div class="col text-center font-weight-bold border border-white p-5">Pink n White</div>
        <div class="col text-center font-weight-bold border border-white p-5">Rp. 64000</div>
        <div class="col text-center font-weight-bold border border-white p-5">5</div>
    </div>

    <div>
        <p class="float-right font-weight-bold my-3">Total Price: Rp. 128000</p>
    </div>
    
</div>

@endsection