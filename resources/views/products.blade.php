@extends('master')

@section('content')
    <div class="container mx-auto py-12">
        <h2 class="text-3xl font-bold mb-6">Our Products</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach ($products as $product)
                <a href="{{ route('viewproduct', $product->id) }}"
                    class="flex flex-col items-center rounded-lg p-4 bg-white shadow-md transition duration-300 hover:shadow-lg">
                    <img src="{{ asset('images/products/' . $product->photopath) }}" alt="{{ $product->name }}"
                        class="w-48 h-48 object-cover mb-4 rounded-lg">
                    <h3 class="text-lg font-bold">{{ $product->name }}</h3>
                    <p class="text-gray-600">
                        @if ($product->oldprice != '')
                            <span class="line-through">{{ $product->oldprice }}/-</span>
                        @endif
                        Rs. {{ $product->price }}/-
                    </p>
                    @if ($product->oldprice != '')
                        @php
                            $discount = (($product->oldprice - $product->price) / $product->oldprice) * 100;
                            $discount = round($discount);
                        @endphp
                        <p class="bg-blue-600 text-white px-3 py-1 rounded-full mt-2">
                            {{ $discount }}% off
                        </p>
                    @endif
                </a>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $products->links() }}
        </div>
    </div>
@endsection
