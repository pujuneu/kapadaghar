@extends('master')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-4">Contact Us</h1>
    
    <div class="flex">
        <div class="w-1/2">
            <h2 class="text-xl font-semibold mb-2">Our Location</h2>
            <p>123 Main Street</p>
            <p>City, State, Zip Code</p>
        </div>
        
        <div class="w-1/2">
            <h2 class="text-xl font-semibold mb-2">Contact Information</h2>
            <p>Email: kapdaaghar@gmail.com</p>
            <p>Phone: 123-456-7890</p>
        </div>
    </div>
    
    <h2 class="text-xl font-semibold mt-8">Send us a message</h2>
    
    <form class="mt-4">
        <div class="mb-4">
            <label for="name" class="block font-semibold">Name</label>
            <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded">
        </div>
        
        <div class="mb-4">
            <label for="email" class="block font-semibold">Email</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded">
        </div>
        
        <div class="mb-4">
            <label for="message" class="block font-semibold">Message</label>
            <textarea id="message" name="message" class="w-full px-4 py-2 border border-gray-300 rounded" rows="4"></textarea>
        </div>
        
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Send Message</button>
    </form>
</div>
@endsection
