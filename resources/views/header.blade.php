<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/validation.js') }}"></script>

    <title>Flowelto</title>
</head>

<body>

{{----------------------------------------------------------- GUEST -----------------------------------------------------}}

    {{-- @if ($role == 'Guest') --}}

        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #ee0c83">
            <a class="navbar-brand ml-5 px-2 hoverTextHeader" href="/">Flowelto Shop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-2 hoverTextHeader" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            {{-- @foreach ($category as $item)
                                <a class="dropdown-item"
                                    href="/viewCategories/{{ $item->id }}">{{ $item->categories_name }}</a>
                            @endforeach --}}

                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link px-2 hoverTextHeader" href="/login">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link px-2 hoverTextHeader" href="/register">Register</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled font-weight-bold px-2">{{ date('d-m-Y') }}</a>
                    </li>

                </ul>
            </div>
        </nav>

    {{-- @endif --}}

{{----------------------------------------------------------- USER -----------------------------------------------------}}

    {{-- @if ($role == 'User') --}}

        {{-- <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #ee0c83">
            <a class="navbar-brand ml-5 px-2 hoverTextHeader" href="/">Flowelto Shop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-2 hoverTextHeader" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-2 hoverTextHeader" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>USER</b>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/cart">My Cart</a>
                            <a class="dropdown-item" href="transactionHistory">Transaction History</a>
                            <a class="dropdown-item" href="changePassword">Change Password</a>
                            <a class="dropdown-item" href="/login">Logout</a>
                        </div>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link disabled font-weight-bold">Sat, 16 May 2020</a>
                    </li>

                </ul>
            </div>
        </nav>

    @endif --}}

{{----------------------------------------------------------- MANAGER -----------------------------------------------------}}

    {{-- @if ($role == 'Manager')
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #ee0c83">
            <a class="navbar-brand ml-5 px-2 hoverTextHeader" href="/">Flowelto Shop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-2 hoverTextHeader" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-2 hoverTextHeader" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>MANAGER</b>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/addNewFlower">Add Flower</a>
                            <a class="dropdown-item" href="/manageCategories">Manage Categories</a>
                            <a class="dropdown-item" href="changePassword">Change Password</a>
                            <a class="dropdown-item" href="/login">Logout</a>
                        </div>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link disabled font-weight-bold">Sat, 16 May 2020</a>
                    </li>

                </ul>
            </div>
        </nav>
    @endif --}}


    <div style="margin-top: 5rem">
        @yield('content')
    </div>

</body>

</html>
