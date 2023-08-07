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
    <div class="min-h-screen flex flex-col justify-between">
        <x-navbar />

        @yield('content')


        <x-footer />

    </div>
</body>

</html>
