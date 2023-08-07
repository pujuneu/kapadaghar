<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kapada ghar</title>
    <link rel="stylesheet" href="{{ asset('mycss/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <link rel="stylesheet" href="{{ asset('datatable/datatables.css') }}">
    <script src="{{ asset('datatable/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('datatable/datatables.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .red {
            background-color: red;
        }
    </style>
</head>

<body>
<<<<<<< HEAD
<<<<<<< HEAD
    @php
    $categories = App\Models\Category::all();
@endphp
    <div class="flex px-24 justify-between bg-gray-300 p-2 text-lg">
=======
=======
>>>>>>> test
    <div class="min-h-screen flex flex-col justify-between">
        <x-navbar />

        @yield('content')


        <x-footer />
<<<<<<< HEAD
>>>>>>> 55d43e69aab00fe0d6f8bca32191066f5fe15706

    </div>
<<<<<<< HEAD
    <nav class="navbar">
        <ul class="menu">
            <li><a href="/">Home</a></li>
            <li><a href="/products">Products</a></li>
            <li><a href="/brands">Brands</a></li>
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

    <div class="flex">
        <div class="flex-grow">
            @yield('content')
        </div>
        <div class="px-2 py-5 bg-slate-100">
            <h1 class="border-b-2 w-fit">Available Categories</h1>
            <ul class="text-slate-800 text-sm">
                @foreach ($categories as $category)
                    <li>
                        <a href="{{ route('category', $category->id) }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>


    <footer class="footer">
        <p>This is footer</p>
    </footer>


=======
>>>>>>> 55d43e69aab00fe0d6f8bca32191066f5fe15706
=======

    </div>
>>>>>>> test
</body>

</html>
