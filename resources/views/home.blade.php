{{-- GUEST, USER, AND MANAGER --}}

@extends('headerGuest')

@section('content')
    
<div class="container">

    <h1 class="text-center my-2 font-italic">Welcome to Flowelto Shop</h1>
    <h3 class="text-center my-3">The Best Flower Shop in Binus University</h3>


    <div class="album">
        <div class="container">

            <div class="row">

                @foreach ($category as $item)
                <div class="col-md-6 imageHover">
                    <div class="card mb-4 shadow-sm" style="background-color: #ff80bf">
                    <a href="/viewCategories/{{ $item->id }}"><img class="img-thumbnail p-3 mx-auto" style="background-color: #ff80bf; border: none;" src="{{ asset("img/$item->categories_image") }}" alt=""></a>
                        <div class="card-body cardColor" style="border: none">
                        <p class="card-title font-weight-bold text-center">{{ $item->categories_name }}</p>
                        </div>
                    </div>
                </div>
                @endforeach                

            </div>

                
        </div>
              

    </div>
    

</div>

@endsection