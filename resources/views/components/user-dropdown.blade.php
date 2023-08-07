<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
    <!-- Settings Dropdown -->
    <div class="hidden sm:flex sm:items-center sm:ml-6">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button
                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-red-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                    {{-- <div>{{ auth()->user()->name }}</div> --}} <i class="fas fa-user"></i> User

                    <div class="ml-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <ul class="flex flex-col text-sm justify-start">
                    <li class=" ">
                        <a href="/profile" style="color: red "> Profile</a>
                    </li>
                    <li class=" ">
                        <a href="/myorders" style="color: red "> My Orders</a>
                    </li>
                    <li> <a style="color: red" onclick="logout()" class="cursor-pointer">Logout</a></li>
                </ul>
                <script>
                    function logout() {
                        if (confirm("Are you sure to logout ?")) {
                            window.location.href = "/userlogout";
                        }
                    }
                </script>
                {{-- <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form> --}}
            </x-slot>
        </x-dropdown>
    </div>
</div>
