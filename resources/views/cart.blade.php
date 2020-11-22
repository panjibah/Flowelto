{{-- USER --}}

@extends('headerUser')

@section('content')
    
<div class="container">

    <h1 class="text-center my-5">Your Transaction at 2020-05-11 19:03:58</h1>


<table class="table transactionContainer">
    <thead>
        <tr>
          <th scope="col" class="text-center font-weight-bold border border-white">Flower Image</th>
          <th scope="col" class="text-center font-weight-bold border border-white">Flower Name</th>
          <th scope="col" class="text-center font-weight-bold border border-white">Subtotal</th>
          <th scope="col" class="text-center font-weight-bold border border-white">Quantity</th>
        </tr>
    </thead>

      <tbody>

        <tr>
          <th scope="row" class="text-center font-weight-bold border border-white p-5"><img class="imgSize" src="{{ asset('img/pink.jpg') }}" alt=""></th>
          <td class="text-center font-weight-bold border border-white p-5">Classic Wedding</td>
          <td class="text-center font-weight-bold border border-white p-5">Rp. 64000</td>
          <td class="text-center font-weight-bold border border-white p-5">
            <p>Quantity</p>
            <input type="number" name="" id="" class="form-control col-sm-8 p-1 mx-auto">
            <a href="" class="btn btn-primary my-3">Update</a>
          </td>
        </tr>

        <tr>
          <th scope="row" class="text-center font-weight-bold border border-white p-5"><img class="imgSize" src="{{ asset('img/pink.jpg') }}" alt=""></th>
          <td class="text-center font-weight-bold border border-white p-5">Classic Wedding</td>
          <td class="text-center font-weight-bold border border-white p-5">Rp. 64000</td>
          <td class="text-center font-weight-bold border border-white p-5">
            <p>Quantity</p>
            <input type="number" name="" id="" class="form-control col-sm-8 p-1 mx-auto">
            <a href="" class="btn btn-primary my-3">Update</a>
          </td>
        </tr>

      </tbody>

</table>

    <div class="text-center my-3">
        <a href="" class="btn btn-danger">Checkout</a>
    </div>
    
</div>

@endsection