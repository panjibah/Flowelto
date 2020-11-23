{{-- GUEST AND USER --}}

@extends('header')

@section('content')

    <div class="container">

        <h1 class="text-center my-2 font-italic mb-5">Our "{{ $title->categories_name }}"</h1>

        <div class="container mb-2">
            <form>
                <div class="form-row">
                    <div class="col-2">
                        <select class="form-control">
                            <option id="">Name</option>
                            <option id="">Name</option>
                            <option id="">Name</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <div class="col-1">
                        <button class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>
        </div>


        <div class="album">
            <div class="container">

                <div class="row">

                    @foreach ($result as $item)

                        <div class="col-md-3 imageHover">
                            <div class="card mb-3 shadow-sm" style="background-color: #ff80bf">
                                <a href="flowerDetail/{{ $item->id }}"><img class="img-thumbnail p-2 mx-auto"
                                        style="background-color: #ff80bf; border: none;"
                                        src="{{ asset("img/$item->flower_image") }}" alt=""></a>
                                <div class="card-body cardColor" style="border: none; height: 7rem;">
                                    <p class="card-title font-weight-bold text-center">{{ $item->flower_name }}</p>
                                    <p class="card-title font-weight-bold text-center" style="color: chocolate">Rp. {{ $item->flower_price }}</p>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>

                {{ $result->links() }}

            </div>

        </div>

    </div>

@endsection
