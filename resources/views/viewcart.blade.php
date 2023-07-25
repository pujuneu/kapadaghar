@extends('master')
@section('content')
    @include('layouts.message')

    <h1 class="text-center font-bold text-3xl">Items in Cart </h1>
    <div class="grid grid-cols-2 gap-5 px-24">
    
            
        <table class="table table-fixed ">
<thead>
    <tr>
        <th scope="col">SN</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
n       <th scope="col">Total</th>    <th scope="col">Action</th>
    </tr>
    </tr>
</thead>
@php
    $grandTotal=0;
@endphp
<tbody>
    @forelse ($carts as $cart)
    <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td><img src="{{asset('Images/products/'.$cart->product->image)}}" alt="{{asset('Images/products/'.$cart->product->image)}}"></td>
        <td>{{$cart->product->name}}</td>
        <td>{{$cart->product->price}}</td>
        <td>{{$cart->quantity}}</td>
        <td>{{$cart->quantity*$cart->product->price}}</td>
        <td><button class="bg-red-500 text-white rounded px-2 py-1 text-xs m-2">Remove From Cart</button></td>

        @php
            $grandTotal = ($cart->quantity*$cart->product->price)+$grandTotal;
        @endphp
    </tr>
    @empty
    <p class="text-center">Your cart is empty.</p>
@endforelse
</tbody>

<tfoot>
    <tr scope="row">
        <th  colspan="4">Grand Total : </th>
        <th>{{ $grandTotal}}</th>
        <th><button class="bg-blue-500 w-full text-white rounded px-2 py-2 text-xs m-2">Checkout</button></th>
    </tr>
    <tr>
        
    </tr>
</tfoot>


        </table>

            

            
       
    </div>
    
    <div class="hidden backdrop-blur-md fixed top-0 left-0 h-screen w-screen  justify-center items-center ">

<div class="bg-white p-5 rounded shadow-xl ">
<div>
    <p>Checkout</p>
    <hr>
</div>
<div class="m-2">


    <p class="m-2">Enter Shipping Infromations</p>
    <input type="text" placeholder="Enter Shipping Addresss">
    <input type="text" placeholder="Enter Phone Number">
</div>
<div>
    <button class="w-full bg-blue-500 text-white rounded m-2 text-sm py-2">Order Products</button>
</div>
</div>


    </div>

@endsection
