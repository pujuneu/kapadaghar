<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kapada ghar</title>
    <link rel="stylesheet" href="{{ asset('mycss/style.css') }}">

<<<<<<< HEAD
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

=======
    

    <link rel="stylesheet" href="{{ asset('datatable/datatables.css') }}">
    <script src="{{ asset('datatable/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('datatable/datatables.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

>>>>>>> test
    <style>
        .red {
            background-color: red;
        }
    </style>
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="flex flex-col min-h-screen justify-between">
        <x-navbar />

        <div class=" flex flex-col justify-between items-center  ">


            <div class="w-full  px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>

        <x-footer />
    </div>
</body>

</html>
