@extends('master')

@section('content')
    <div class="flex flex-col justify-center items-center ">
        <div class=" self-end pr-32">
            <a href="/profile/edit" class="red text-white px-4 py-3 my-1 rounded-lg block mx-auto cursor-pointer">Edit
                profile</a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-4 w-64">
            <div class="text-center">

                <h2 class="text-xl font-semibold">{{ $user->name }}</h2>
                <p class="text-gray-600">{{ $user->role }}</p>
            </div>
            <div class="mt-4">
                <p class="text-gray-700">

                    <span class="font-semibold">Email : </span> {{ $user->email }}

                </p>
                {{-- <p class="text-gray-700">

                    <span class="font-semibold">Phone:</span> {{ $user->phone }}

                </p>
                <p class="text-gray-700">

                    <span class="font-semibold">Address: </span> {{ $user->address }}
                </p> --}}
            </div>

        </div>


    </div>
@endsection
