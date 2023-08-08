<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->

    <nav class="navbar ">
        <div class="flex"></div>
        <ul class="menu flex justify-end">
            <li><a href="/">Home</a></li>



            <li><a href="/about">About Us</a></li>
            <li><a href="/contact">Contact</a></li>
            <li class="relative">

                <button class="text-white text-lg" onclick="showproducts()">Product</button>


            </li>
            @if (auth()->user())
                <li><a href="/carts">Cart <sup>{{ $cartcount }}</sup></a></li>
            @endif


            @auth
                <li><x-user-dropdown /></li>

            @endauth

            @guest

                <li><a href="/login">Login</a></li>

            @endguest

            {{-- @if (auth()->user())
                <li><a href="">{{ auth()->user()->name }}</a></li>
                <li>
                    <form class="inline text-white" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">OUT</button>
                    </form>
                </li>
            @endif --}}


        </ul>
    </nav>


    <div id="productdialog" class="fixed top-0 left-0 h-screen w-screen backdrop-blur-sm  justify-center items-center"
        style="display: none;">
        <div class="bg-white p-4 shadow rounded">
            <div class="flex justify-end">
                <button onclick="showproducts()"><i class="fa fa-times"></i></button>
            </div>
            <div>
                <h1 class="font-semibold text-xl m-1">Choose Category and Sub Category</h1>
                <hr>
            </div>
            <div>
                <form action="{{ route('showproducts') }}" method="POST">
                    @csrf
                    <select name="category_id" id="category_id" required class="w-full rounded-lg border-gray-300 my-2">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>


                    <select name="sub_category_id" id="sub_category_id" required
                        class="w-full rounded-lg border-gray-300 my-2">
                        <option value="">--Select Category First--</option>

                    </select>

                    <div>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Show
                            Products </button>
                    </div>


                    <script>
                        var category_id = document.getElementById("category_id");
                        category_id.addEventListener("change", function() {
                            console.log(this.value);

                            var sub_category_id = document.getElementById("sub_category_id");

                            sub_category_id.innerHTML = "";
                            $.ajax({
                                url: "{{ route('subcategory.fetch') }}",
                                method: "POST",
                                data: {
                                    category_id: this.value,
                                    _token: "{{ csrf_token() }}"
                                },
                                success: function(response) {

                                    var sub_categories = response;
                                    var sub_category;
                                    sub_categories.forEach(sub_category => {


                                        sub_category_id.innerHTML +=
                                            `<option value="${sub_category.id}">${sub_category.name}</option>`;
                                    });

                                },
                                error: function(xhr, status, error) {
                                    // This function is executed if there's an error with the request
                                    console.error("Error: " + status + " - " + error);
                                }

                            });

                        });


                        var productdialog = document.getElementById('productdialog');

                        function showproducts() {
                            console.log('hello');
                            if (productdialog.style.display == "none") {
                                productdialog.style.display = "flex";
                            } else {
                                productdialog.style.display = "none";
                            }


                        }
                    </script>


                </form>

            </div>
        </div>
    </div>

</div>
