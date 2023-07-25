<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kapada ghar</title>
    <link rel="stylesheet" href="{{ asset('mycss/style.css') }}">

    <link rel="stylesheet" href="{{asset('datatable/datatables.css')}}">
    <script src="{{asset('datatable/jquery-3.6.0.js')}}"></script>
    <script src="{{asset('datatable/datatables.js')}}"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex px-24 justify-between bg-gray-300 p-2 text-lg">

        @if (auth()->user())
            <div>
                <a href="">{{ auth()->user()->name }} /</a>
                <form class="inline" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"> Logout</button>
                </form>
            </div>
        @else
            <span><a href="{{ route('userlogin') }}">Login/Register</a></span>
        @endif
    </div>
    <nav class="navbar">
        <ul class="menu">
           
            <li><a href="/products">Products</a></li>
            
            <li><a href="/about">About Us</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/carts">Cart</a></li>


            <li><a href="/"></a></li>

            @if (auth()->user())
                <li><a href="">{{ auth()->user()->name }}</a></li>
                <li>
                    <form class="inline text-white" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">OUT</button>
                    </form>
                </li>
            @endif
        </ul>
    </nav>

    @yield('content')


         
      


    <footer class="footer">
        <p>fgf</p>
    </footer>


</body>

</html>
