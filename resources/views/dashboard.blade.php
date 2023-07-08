@extends('layouts.app')
@section('content')
@include('layouts.message')
<h2 class="font-bold text-4xl text-blue-700">Dashboard</h2>
<hr class="h-1 bg-blue-200">

<div class="mt-4 grid grid-cols-3 gap-10">
    <div class="px-4 py-8 rounded-lg bg-blue-600 text-white flex justify-between">
        <p class="font-bold text-lg">Total Items</p>
        <p class="font-bold text-5xl">600</p>
    </div>
    <div class="px-4 py-8 rounded-lg bg-red-600 text-white flex justify-between">
        <p class="font-bold text-lg">Pending Order</p>
        <p class="font-bold text-5xl">25</p>
    </div>
    <div class="px-4 py-8 rounded-lg bg-green-600 text-white flex justify-between">
        <p class="font-bold text-lg">Total Catogries</p>
        <p class="font-bold text-5xl">50</p>
    </div>
</div>

@endsection