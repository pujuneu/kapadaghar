@extends('master')
@section('content')
    @php
        $image = 'https://wallpapers.com/images/hd/clothing-store-pictures-lgzj7293zmxj7ctv.jpg';
    @endphp
    <style>
        .carousel-slide {
            display: none;
        }

        .carousel-slide.active {
            display: block;
        }
    </style>
    <div class="bg-gradient-to-b from-gray-100 to-gray-200">
        <div id="carousel" class="container mx-auto py-12">
            <div class="carousel-slide">
                <img src="https://previews.123rf.com/images/agcreativelab/agcreativelab1705/agcreativelab170500055/79261607-women-clothing-store-with-mannequins-in-showcase.jpg"
                    alt="Slide 1" class="w-full h-76 object-contain">
            </div>
            <div class="carousel-slide">
                <img src="https://media.istockphoto.com/id/1369252153/photo/exterior-of-clothing-store-with-womens-and-mens-clothing-on-mannequins-displaying-in-showcase.jpg?s=170667a&w=is&k=20&c=_nPcyYpsgTFawxi9kA9rUTP9TGm7rQ2Gd43mOcwTyNA="
                    alt="Slide 2" class="w-full h-76 object-contain">
            </div>
            <div class="carousel-slide">
                <img src="https://media.gettyimages.com/id/1308246727/photo/luxury-clothing-store-with-clothes-shoes-and-other-personal-accessories.jpg?s=612x612&w=gi&k=20&c=Z1C7eakoVybybMSswdSWqn43SovqzpUqxCQIPI5YUzo="
                    alt="Slide 3" class="w-full h-76 object-contain">
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var slides = document.querySelectorAll('.carousel-slide');
            var currentSlide = 0;
            var slideInterval = setInterval(nextSlide, 3000);

            function nextSlide() {
                slides[currentSlide].classList.remove('active');
                currentSlide = (currentSlide + 1) % slides.length;
                slides[currentSlide].classList.add('active');
            }
        });
    </script>
    <div class="bg-gradient-to-b from-gray-100 to-gray-200 px-12">
        <div class="container mx-auto py-12">
            <div class="flex flex-col items-center justify-center space-y-8">
                <h1 class="text-4xl font-bold text-center">Welcome to Kapada Ghar</h1>
                <p class="text-xl text-center">Discover the latest fashion trends and shop with confidence.</p>
                <a href="/search?query="
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg">Explore
                    Products</a>
            </div>
        </div>
    </div>

    <div class="container mx-auto py-12 px-12">
        <div class="grid grid-cols-2 gap-8">
            <div class="h-full flex flex-col justify-center items-center">
                <h2 class="text-3xl font-bold">New Arrivals</h2>
                <p class="text-lg mt-4 text-center leading-8">
                    <b>Discover our latest collection of clothes and accessories.</b> <br> From trendy tops to
                    stylish dresses, we have everything you need to stay fashionable this season. <br /> Our accessories
                    collection
                    includes bags, jewelry, and shoes that will complete your look. Shop now and get up to 50% off on
                    selected items.
                </p>
            </div>
            <div class="relative">
                <img src="{{ $image }}" alt="Random Photo" class="w-full h-full object-cover rounded-lg">
                <div class="absolute bottom-0 left-0 p-4 bg-gradient-to-t from-black to-transparent text-white">
                    <h3 class="text-lg font-bold">Sale</h3>
                    <p class="text-sm">Get up to 50% off on selected items.</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-gray-900 text-white py-8 px-12">
        <div class="container mx-auto flex flex-col md:flex-row justify-between">
            <div class="md:order-2">
                <h3 class="text-lg font-bold mb-2">Contact Us</h3>
                <p>123 Street, City</p>
                <p>kapadaaghar@gmail.com</p>
                <p>987578998</p>
            </div>
            <div class="md:order-1 mt-4 md:mt-0">
                <h3 class="text-lg font-bold mb-2">Quick Links</h3>
                <ul class="space-y-2">

                    <li><a href="/search?query=">Products</a></li>

                    <li><a href="/about">About Us</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                    <li><a href="/carts">Cart</a></li>
                </ul>
            </div>
        </div>
        <div class="container mx-auto">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d340.67109483868006!2d84.1266053880248!3d27.644145637641994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399451e91900ebc7%3A0x56c7915d47df8056!2sNawalpur%20hotel%20and%20lodge!5e0!3m2!1sen!2snp!4v1695569646832!5m2!1sen!2snp"
                height="450" style="border:0;" allowfullscreen="" loading="lazy" class="w-full"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        <div class="container mx-auto mt-8">
            <p class="text-center">© 2023 Kapada Ghar. All rights reserved.</p>
        </div>
    </footer>
@endsection
