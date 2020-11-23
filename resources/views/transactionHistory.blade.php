{{-- USER --}}

@extends('header')

@section('content')
    
<div class="container">

    <h1 class="text-center my-5">Your Transaction History</h1>

    {{-- FOREACH --}}

    <div class="transactionContainer p-2 border border-white">
        <a class="alert-dark" href="/transactionHistoryDetail"><p class="font-weight-bold text-center" style="font-size: 1.2rem">Transaction at 2020-05-11 19:03:58</p></a>
    </div>

    {{-- ENDFOREACH --}}
    
    <div class="transactionContainer p-2 border border-white">
       <a class="alert-dark" href="/transactionHistoryDetail"><p class="font-weight-bold text-center" style="font-size: 1.2rem">Transaction at 2020-05-12 19:11:58</p></a>
    </div>

</div>

@endsection