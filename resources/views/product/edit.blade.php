@extends('layouts.app')
@section('content')
    <h2 class="font-bold text-4xl text-blue-700">Edit Product</h2> 
    <hr class="h-1 bg-blue-200">

    <form action="{{route('product.update',$product->id)}}" method="POST" class="mt-5" enctype="multipart/form-data">
        @csrf

        <select name="category_id" id="category_id" class="w-full rounded-lg border-gray-300 my-2">
            <option value="">Select Category</option>
            @foreach($categories as $category)
            <option @if ($category->id==$product->category->id)
                selected
            @endif value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>

        
        <select name="sub_category_id" id="sub_category_id" class="w-full rounded-lg border-gray-300 my-2">
            <option value="{{ $product->sub_category_id }}">{{ $product->sub_category->name }}</option>
            
        </select>


        <script>
        
            var category_id = document.getElementById("category_id");
            category_id.addEventListener("change", function(){
                console.log(this.value);
                
                var sub_category_id = document.getElementById("sub_category_id");
               
                sub_category_id.innerHTML = "";
                $.ajax({
                    url: "{{route('subcategory.fetch')}}",
                    method: "POST",
                    data: {category_id: this.value,
                    _token: "{{csrf_token()}}"},
                    success: function(response){
                    
                    var sub_categories = response;
                    var sub_category;
                    sub_categories.forEach(sub_category => {
      
    
      sub_category_id.innerHTML += `<option value="${sub_category.id}">${sub_category.name}</option>`;
         });
    
                    },
                    error: function(xhr, status, error) {
                // This function is executed if there's an error with the request
                console.error("Error: " + status + " - " + error);
              }
    
                });
    
            });
            </script>

       


        <input type="text" placeholder="Product Name" name="name" class="w-full rounded-lg border-gray-300 my-2" value="{{$product->name}}">
        @error('name')
            <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
        @enderror

        <input type="number" placeholder="Price" name="price" class="w-full rounded-lg border-gray-300 my-2" value="{{$product->price}}">
        @error('price')
            <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
        @enderror


        <input type="number" placeholder="Stock" name="stock" class="w-full rounded-lg border-gray-300 my-2" value="{{$product->stock}}">
        @error('stock')
            <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
        @enderror
        <textarea placeholder="Desription" rows="8" name="description" class="w-full rounded-lg border-gray-300 my-2" value="">{{$product->description}}</textarea>
        @error('description')
            <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
        @enderror

        <p>Current Image</p>
        <img src="{{asset('images/products/'.$product->photopath)}}" class="w-24" alt="">
        <input type="file" name="photopath" class="w-full rounded-lg border-gray-300 my-2">
        @error('photopath')
            <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
        @enderror

        <div class="flex">
            <input type="submit" class="bg-blue-600 text-white px-4 py-2 mx-2 rounded-lg" value="Update Product">

            <a href="{{route('product.index')}}" class="bg-red-600 text-white px-10 py-2 mx-2 rounded-lg">Exit</a>
        </div>
    </form>


    

@endsection
