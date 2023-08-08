@extends('master')
@section('content')
    <div class="grid grid-cols-3 px-44 gap-10 my-10">
        <div>
            <img src="{{ asset('images/products/' . $product->photopath) }}" alt=""
                class="w-full h-96 object-cover rounded-lg">
        </div>
        

            <form action="{{route('carts.store')}}" method="post">
                @csrf
                <p class="mt-4 flex items-center">
                    
                    <input min="1" max="{{ $product->stock }}" class="h-11 w-12 px-0 text-center border-0 bg-gray-100" type="number" name="quantity" value="1">
                    <input type="hidden" name="product_id" value="{{$product -> id}}">
                    
                </p>
                <div class="mt-14">
                    <button class="bg-indigo-600 text-white px-6 py-2 rounded-lg shadow">Add to Cart</button>
                </div>
            </form>
        </div>
    </div>

    <div>
        <div class="px-44 my-10">
        <h3 class="text-lg font-bold">{{ $product->name }}</h3>
                    <h3 class="text-lg font-thin">{{ $product->brand->name }}</h3>
                    <p class="text-gray-600">
                        @if ($product->oldprice != '')
                            <span class="line-through">{{ $product->oldprice }}/-</span>
                        @endif
                        Rs. {{ $product->price }}/-
                    </p>
    </div>










    <div class="px-44 my-10">
        <h2 class="font-bold text-2xl">About this product</h2>
        <p>{{ $product->description }}</p>
    </div>
@endsection
