@extends('layouts.app')
@section('content')
@include('layouts.message')
@php
    $totalStock = DB::table('products')->sum('stock');
    $pendingOrders = DB::table('orders')->where('status', 'Pending')->count();
    $totalCategories = DB::table('categories')->count();
    $totalProducts = DB::table('products')->count();
    $totalBrands = DB::table('brands')->count();
@endphp
<h2 class="font-bold text-4xl text-blue-700">Dashboard</h2>
<hr class="h-1 bg-blue-200">

<div class="mt-4 grid grid-cols-3 gap-10">
    <div class="px-4 py-8 rounded-lg bg-blue-600 text-white flex justify-between">
        <p class="font-bold text-lg">Total Items</p>
        <p class="font-bold text-5xl">{{$totalStock}}</p>
    </div>
    <div class="px-4 py-8 rounded-lg bg-red-600 text-white flex justify-between">
        <p class="font-bold text-lg">Pending Order</p>
        <p class="font-bold text-5xl">{{$pendingOrders}}</p>
    </div>
    <div class="px-4 py-8 rounded-lg bg-green-600 text-white flex justify-between">
        <p class="font-bold text-lg">Total Catogries</p>
        <p class="font-bold text-5xl">{{$totalCategories}}</p>
    </div>
    <div class="px-4 py-8 rounded-lg bg-orange-600 text-white flex justify-between">
        <p class="font-bold text-lg">Total Products</p>
        <p class="font-bold text-5xl">{{$totalProducts}}</p>
    </div>
    
        <div class="px-4 py-8 rounded-lg bg-blue-600 text-white flex justify-between">
            <p class="font-bold text-lg">Total Brand</p>
            <p class="font-bold text-5xl">{{$totalBrands}}</p>
        </div>
</div>

@endsection