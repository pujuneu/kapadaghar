<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <div class="grid grid-cols-2">
       <img src="https://pathwayport.com/saasland/images/login@4x.png" alt="" class="h-screen">
        <div class="flex justify-center items-center">
            <div class="w-full text-center">
                <h2 class="font-bold text-4xl"Welcome to Kapada Ghar</h2>
                    <img src="http://bitmapitsolution.com/images/logo/logo.png" alt="" 
                    class="mx-auto my-4 w-40">
                    
                        
                     <form action="{{route('login')}}"method="POST">
                            @csrf
                            <input type="email" name="email" placeholder="Enter Email" 
                            class="p-4 rounded-lg w-8/12 my-4">
                            <input type="password" name="password" placeholder="Enter Password" 
                            class="p-4 rounded-lg w-8/12 my-4">

                            <input type="submit" value="Login" 
                            class="bg-blue-600 text-white w-4/12 py-3 mt-4 rounded-lg block mx-auto cursor-pointer">

                            <a href="/register">
                                <input type=""button" value="Register"
                                class="bg-blue-600 text white w-4/12 py-3 mt-4 rounded-lg block mx-auto cursor-pointer">
                    </form>
                </div>

        </div>
    </div>






    
</body>
</html>