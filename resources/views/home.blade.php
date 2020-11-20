{{-- GUEST, USER, AND MANAGER --}}

@extends('headerGuest')

@section('content')
    
<div class="container">

    <h1 class="text-center my-2 font-italic">Welcome to Flowelto Shop</h1>
    <h3 class="text-center my-3">The Best Flower Shop in Binus University</h3>


    <div class="album">
        <div class="container">

            <div class="row">

                {{-- FOREACH DISINI --}}

                <div class="col-md-4 imageHover">
                    <div class="card mb-4 shadow-sm" style="background-color: #ff80bf">
                        <a href=""><img class="img-thumbnail p-3 mx-auto" style="background-color: #ff80bf; border: none;" src="{{ asset('img/pink.jpg') }}" alt=""></a>
                        <div class="card-body cardColor" style="border: none">
                            <p class="card-title font-weight-bold text-center">Classic Wedding</p>
                        </div>
                    </div>
                </div>

                {{-- ENDFOREACH DISINI --}}

                <div class="col-md-4 imageHover">
                    <div class="card mb-4 shadow-sm" style="background-color: #ff80bf">
                        <a href=""><img class="img-thumbnail p-3 mx-auto" style="background-color: #ff80bf; border: none;" src="{{ asset('img/pink.jpg') }}" alt=""></a>
                        <div class="card-body cardColor" style="border: none">
                            <p class="card-title font-weight-bold text-center">Classic Wedding</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 imageHover">
                    <div class="card mb-4 shadow-sm" style="background-color: #ff80bf">
                        <a href=""><img class="img-thumbnail p-3 mx-auto" style="background-color: #ff80bf; border: none;" src="{{ asset('img/pink.jpg') }}" alt=""></a>
                        <div class="card-body cardColor" style="border: none">
                            <p class="card-title font-weight-bold text-center">Classic Wedding</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 imageHover">
                    <div class="card mb-4 shadow-sm" style="background-color: #ff80bf">
                        <a href=""><img class="img-thumbnail p-3 mx-auto" style="background-color: #ff80bf; border: none;" src="{{ asset('img/pink.jpg') }}" alt=""></a>
                        <div class="card-body cardColor" style="border: none">
                            <p class="card-title font-weight-bold text-center">Classic Wedding</p>
                        </div>
                    </div>
                </div>
                

            </div>

                
        </div>
              

    </div>
    

</div>

@endsection