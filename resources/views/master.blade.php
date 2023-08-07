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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
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
            <span><a href="{{ route('login') }}">Login/Register</a></span>
        @endif
    </div>
   <x-navbar />

    @yield('content')


         
      


    <footer class="footer">
       
    </footer>


</body>

</html>
