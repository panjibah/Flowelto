{{-- MANAGER --}}

@extends('header')

@section('content')
    
<div class="container">

    <h1 class="text-center my-2 font-italic mb-5">Manage Categories</h1>

    <div class="album">
        <div class="container">

            <div class="row">

                {{-- FOREACH DISINI --}}

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm" style="background-color: #ff80bf">
                        <img class="img-thumbnail p-3 mx-auto" style="background-color: #ff80bf; border: none;" src="{{ asset('img/pink.jpg') }}" alt="">
                        <div class="card-body cardColor" style="border: none; height: 7rem;">
                            <p class="card-title font-weight-bold text-center">Category 1</p>
                        </div>

                        <div class="btn-group m-2">
                            <button type="button" class="btn btn-sm btn-danger">Delete Category</button>
                            <a href="/manageCategoriesDetail" type="button" class="btn btn-sm btn-primary">Update Category</a>
                        </div>

                    </div>
                </div>

                {{-- ENDFOREACH DISINI --}}

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm" style="background-color: #ff80bf">
                        <img class="img-thumbnail p-3 mx-auto" style="background-color: #ff80bf; border: none;" src="{{ asset('img/pink.jpg') }}" alt="">
                        <div class="card-body cardColor" style="border: none; height: 7rem;">
                            <p class="card-title font-weight-bold text-center">Category 1</p>
                        </div>

                        <div class="btn-group m-2">
                            <button type="button" class="btn btn-sm btn-danger">Delete Category</button>
                            <a href="/manageCategoriesDetail" type="button" class="btn btn-sm btn-primary">Update Category</a>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm" style="background-color: #ff80bf">
                        <img class="img-thumbnail p-3 mx-auto" style="background-color: #ff80bf; border: none;" src="{{ asset('img/pink.jpg') }}" alt="">
                        <div class="card-body cardColor" style="border: none; height: 7rem;">
                            <p class="card-title font-weight-bold text-center">Category 1</p>
                        </div>

                        <div class="btn-group m-2">
                            <button type="button" class="btn btn-sm btn-danger">Delete Category</button>
                            <a href="/manageCategoriesDetail" type="button" class="btn btn-sm btn-primary">Update Category</a>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm" style="background-color: #ff80bf">
                        <img class="img-thumbnail p-3 mx-auto" style="background-color: #ff80bf; border: none;" src="{{ asset('img/pink.jpg') }}" alt="">
                        <div class="card-body cardColor" style="border: none; height: 7rem;">
                            <p class="card-title font-weight-bold text-center">Category 1</p>
                        </div>

                        <div class="btn-group m-2">
                            <button type="button" class="btn btn-sm btn-danger">Delete Category</button>
                            <a href="/manageCategoriesDetail" type="button" class="btn btn-sm btn-primary">Update Category</a>
                        </div>

                    </div>
                </div>
               

             

            </div>
                
        </div>
              
        

    </div>
    
    

</div>

@endsection