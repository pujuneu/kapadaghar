@extends('master')
@section('content')
    @include('layouts.message')

    <h1 class="text-center font-bold text-3xl">Items in Cart </h1>
    <div class="grid grid-cols-2 gap-5 px-24">
        @forelse ($carts as $cart)
            <div class="flex bg-gray-100 my-5 rounded shadow">
                <img src="{{ asset('images/products/' . $cart->product->photopath) }}"
                    class="h-32 w-44 object-cover shadow-lg my-2">
                <div class="px-4 py-1">
                    <h2 class="text-2xl font-bold">{{ $cart->product->name }}</h2>
                    <p>Quantity: {{ $cart->quantity }}</p>
                
                    
                    <form action="{{ route('order.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $cart -> product->id }}">
                        <input type="hidden" name="quantity" value="{{ $cart->quantity }}">
                        <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded-lg shadow">Order</button>
                    </form>
                    
                    
                
                </div>
                
                
            </div>

            

            
        @empty
            <p class="text-center">Your cart is empty.</p>
        @endforelse
    </div>
    

@endsection
