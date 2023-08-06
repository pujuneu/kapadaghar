@extends('master')
@section('content')
    @include('layouts.message')

    <h1 class="text-center font-bold text-3xl">Items in Cart </h1>
    <div class="grid grid-cols-2 gap-5 px-24">
        @php
        $grandTotal=0;

      
    @endphp


        @if ($carts->count()>0)
        <table class="table table-fixed ">
<thead>
    <tr>
        <th scope="col">SN</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
      <th scope="col">Total</th>    <th scope="col">Action</th>
    </tr>
    </tr>
</thead>

<tbody>
    @forelse ($carts as $cart)
    <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td><img src="{{asset('Images/products/'.$cart->product->photopath)}}" </td>
        <td>{{$cart->product->name}}</td>
        <td>{{$cart->product->price}}</td>
        <td>

            <div class="flex w-full gap-2 justify-around">
                <button type="button" >+</button>
                <p class="px-2">{{$cart->quantity}}</p>
                <button type="button">-</button>
            </div>
        </td>
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
        <th  colspan="5">Grand Total : </th>
        <th>{{ $grandTotal}}</th>
        <th><button class="bg-blue-500 w-full text-white rounded px-2 py-2 text-xs m-2" onclick="showcheckout()">Checkout</button></th>
    </tr>
    <tr>
        
    </tr>
</tfoot>




        </table>

        @else
        <p class="text-center w-full">Your cart is empty.</p>
        @endif


            
       
    </div>
    
    <div id="checkout" class="hidden  backdrop-blur-md fixed top-0 left-0 h-screen w-screen  justify-center items-center ">

<div class="bg-white p-5 rounded shadow-xl relative ">
    <button class="absolute top-1 right-2 hover:rounded hover:bg-slate-200 p-2" onclick="showcheckout()"> <i class="fas fa-times "></i></button>
   
    
<form action="{{route('order.store')}}" method="POST">

    <div>
        <p>Checkout</p>
        <hr>
    </div>
    <div class="m-2">
    
        
    
        <p class="m-2">Enter Shipping Infromations</p>
        @csrf
        <input type="text" name="shipping_address" placeholder="Enter Shipping Addresss">
        <input type="text" name="phone"  placeholder="Enter Phone Number">
        
        <input type="hidden" name="grand_amount" value="{{ $grandTotal}}">
    </div>
    <div class="m-2 ">
        @if ($errors->all())
            
        @foreach($errors->all() as $error)
        <p class="bg-red-400 text-white my-2  px-4 py-1 rounded-lg shadow text-lg font-thin">{{$error}}</p>
    @endforeach

        @endif
       
    </div>
    <div>
        <button class="w-full bg-blue-500 text-white rounded m-2 text-sm py-2">Order Products</button>
        <button class="w-full bg-violet-500 text-white rounded m-2 text-sm py-2" id="payment-button" type="button">Pay with Khalti</button>
    </div>
    </div>
</form>


    </div>

   

    <script>
        const checkout = document.getElementById('checkout');

        
        @if ($errors->any())
        checkout.classList.remove('hidden');
        checkout.classList.add('flex');
        @endif
      

                         
        function showcheckout(){
                       if(checkout.classList.contains('hidden')){
                       checkout.classList.remove('hidden');
                       checkout.classList.add('flex');
                       }else{
                                              checkout.classList.remove('flex');
                                              checkout.classList.add('hidden');
                                              }

                    }
        
        </script> 
        
        
        <script>
            var config = {
                // replace the publicKey with yours
                "publicKey": "test_public_key_dcbabc4d1d7c47a584967ed3174e3425",
                "productIdentity": "1234567890",
                "productName": "Dragon",
                "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
                "paymentPreference": [
                    "KHALTI",
                    "EBANKING",
                    "MOBILE_BANKING",
                    "CONNECT_IPS",
                    "SCT",
                    ],
                "eventHandler": {
                    onSuccess (payload) {
                        // hit merchant api for initiating verfication
                        console.log(payload);

                        $.ajax({
          url: "{{ route('khaltiverify')}}",
          type: "POST",
          data: {
            data:payload,
            _token:"{{csrf_token()}}"
          },
          success: function(response) {
            // Code to execute when the request is successful
            // Update the result div with the received data

console.log(response);
           
          },
          error: function(jqXHR, textStatus, errorThrown) {
            // Code to execute when the request fails
            $("#result").html("Error: " + textStatus + ", " + errorThrown);
          }
        });


                    },
                    onError (error) {
                        console.log(error);
                    },
                    onClose () {
                        console.log('widget is closing');
                    }
                }
            };
    
            var popup = new KhaltiCheckout(config);
            var btn = document.getElementById("payment-button");
            btn.onclick = function () {
                // minimum transaction amount must be 10, i.e 1000 in paisa.
                popup.show({amount: 1000});
            }
        </script>

@endsection
