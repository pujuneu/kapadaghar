<x-guest-layout>

    <div class="grid grid-cols-2 items-center justify-items-center">

        <div class="min-h-[100%] p-24">
            <img src="https://pathwayport.com/saasland/images/login@4x.png" alt="" class="h-[50%] object-contain">
        </div>

        <div class=" w-full px-10">

            <form action="{{ route('login') }}"method="POST">
                <legend class="text-center pb-2 text-2xl font-bold ">Login</legend>
                @csrf

                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <input type="email" name="email" placeholder="Enter Email" class="p-4 rounded-lg w-full my-4">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" placeholder="Enter password" class="p-4 rounded-lg w-full my-4"
                        type="password" name="password" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>


                {{-- <input type="password" name="password" placeholder="Enter Password" class="p-4 rounded-lg w-full my-4"> --}}

                <input type="submit" value="Login"
                    class="red text-white w-full py-3 my-1 rounded-lg block mx-auto cursor-pointer">

                <span class=" w-full text-center text-sm  rounded-lg block mx-auto">Not have an Account ? </span>
                <a href="/register">
                    <input type="button" value="Register"
                        class="red text-white w-full py-3 my-1 rounded-lg block mx-auto cursor-pointer">
            </form>
        </div>
    </div>




</x-guest-layout>
