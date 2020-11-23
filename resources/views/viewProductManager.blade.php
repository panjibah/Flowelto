{{-- MANAGER --}}

@extends('header')

@section('content')
    
<div class="container">

    <h1 class="text-center my-2 font-italic mb-5">Our Hand bouquet (gift)</h1>

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

                {{-- FOREACH DISINI --}}

                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm imageHover" style="background-color: #ff80bf">
                        <a href=""><img class="img-thumbnail p-2 mx-auto" style="background-color: #ff80bf; border: none;" src="{{ asset('img/pink.jpg') }}" alt=""></a>
                        <div class="card-body cardColor" style="border: none; height: 7rem;">
                            <p class="card-title font-weight-bold text-center">Classic Wedding</p>
                            <p class="card-title font-weight-bold text-center" style="color: chocolate">Rp. 60.000</p>
                        </div>

                        <div class="btn-group m-2">
                            <button type="button" class="btn btn-sm btn-danger">Delete Flower</button>
                            <button type="button" class="btn btn-sm btn-primary">Update Flower</button>
                        </div>

                    </div>
                </div>

                {{-- ENDFOREACH DISINI --}}

                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm imageHover" style="background-color: #ff80bf">
                        <a href=""><img class="img-thumbnail p-2 mx-auto" style="background-color: #ff80bf; border: none;" src="{{ asset('img/pink.jpg') }}" alt=""></a>
                        <div class="card-body cardColor" style="border: none; height: 7rem;">
                            <p class="card-title font-weight-bold text-center">Classic Wedding</p>
                            <p class="card-title font-weight-bold text-center" style="color: chocolate">Rp. 60.000</p>
                        </div>

                        <div class="btn-group m-2">
                            <button type="button" class="btn btn-sm btn-danger">Delete Flower</button>
                            <button type="button" class="btn btn-sm btn-primary">Update Flower</button>
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm imageHover" style="background-color: #ff80bf">
                        <a href=""><img class="img-thumbnail p-2 mx-auto" style="background-color: #ff80bf; border: none;" src="{{ asset('img/pink.jpg') }}" alt=""></a>
                        <div class="card-body cardColor" style="border: none; height: 7rem;">
                            <p class="card-title font-weight-bold text-center">Classic Wedding</p>
                            <p class="card-title font-weight-bold text-center" style="color: chocolate">Rp. 60.000</p>
                        </div>

                        <div class="btn-group m-2">
                            <button type="button" class="btn btn-sm btn-danger">Delete Flower</button>
                            <button type="button" class="btn btn-sm btn-primary">Update Flower</button>
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm imageHover" style="background-color: #ff80bf">
                        <a href=""><img class="img-thumbnail p-2 mx-auto" style="background-color: #ff80bf; border: none;" src="{{ asset('img/pink.jpg') }}" alt=""></a>
                        <div class="card-body cardColor" style="border: none; height: 7rem;">
                            <p class="card-title font-weight-bold text-center">Classic Wedding</p>
                            <p class="card-title font-weight-bold text-center" style="color: chocolate">Rp. 60.000</p>
                        </div>

                        <div class="btn-group m-2">
                            <button type="button" class="btn btn-sm btn-danger">Delete Flower</button>
                            <button type="button" class="btn btn-sm btn-primary">Update Flower</button>
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm imageHover" style="background-color: #ff80bf">
                        <a href=""><img class="img-thumbnail p-2 mx-auto" style="background-color: #ff80bf; border: none;" src="{{ asset('img/pink.jpg') }}" alt=""></a>
                        <div class="card-body cardColor" style="border: none; height: 7rem;">
                            <p class="card-title font-weight-bold text-center">Classic Wedding</p>
                            <p class="card-title font-weight-bold text-center" style="color: chocolate">Rp. 60.000</p>
                        </div>

                        <div class="btn-group m-2">
                            <button type="button" class="btn btn-sm btn-danger">Delete Flower</button>
                            <button type="button" class="btn btn-sm btn-primary">Update Flower</button>
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm imageHover" style="background-color: #ff80bf">
                        <a href=""><img class="img-thumbnail p-2 mx-auto" style="background-color: #ff80bf; border: none;" src="{{ asset('img/pink.jpg') }}" alt=""></a>
                        <div class="card-body cardColor" style="border: none; height: 7rem;">
                            <p class="card-title font-weight-bold text-center">Classic Wedding</p>
                            <p class="card-title font-weight-bold text-center" style="color: chocolate">Rp. 60.000</p>
                        </div>

                        <div class="btn-group m-2">
                            <button type="button" class="btn btn-sm btn-danger">Delete Flower</button>
                            <button type="button" class="btn btn-sm btn-primary">Update Flower</button>
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm imageHover" style="background-color: #ff80bf">
                        <a href=""><img class="img-thumbnail p-2 mx-auto" style="background-color: #ff80bf; border: none;" src="{{ asset('img/pink.jpg') }}" alt=""></a>
                        <div class="card-body cardColor" style="border: none; height: 7rem;">
                            <p class="card-title font-weight-bold text-center">Classic Wedding</p>
                            <p class="card-title font-weight-bold text-center" style="color: chocolate">Rp. 60.000</p>
                        </div>

                        <div class="btn-group m-2">
                            <button type="button" class="btn btn-sm btn-danger">Delete Flower</button>
                            <button type="button" class="btn btn-sm btn-primary">Update Flower</button>
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm imageHover" style="background-color: #ff80bf">
                        <a href=""><img class="img-thumbnail p-2 mx-auto" style="background-color: #ff80bf; border: none;" src="{{ asset('img/pink.jpg') }}" alt=""></a>
                        <div class="card-body cardColor" style="border: none; height: 7rem;">
                            <p class="card-title font-weight-bold text-center">Classic Wedding</p>
                            <p class="card-title font-weight-bold text-center" style="color: chocolate">Rp. 60.000</p>
                        </div>

                        <div class="btn-group m-2">
                            <button type="button" class="btn btn-sm btn-danger">Delete Flower</button>
                            <button type="button" class="btn btn-sm btn-primary">Update Flower</button>
                        </div>

                    </div>
                </div>
             

            </div>

            <nav aria-label="...">
                <ul class="pagination pagination-sm">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">1</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
              </nav>

                
        </div>
              
        

    </div>
    
    

</div>

@endsection