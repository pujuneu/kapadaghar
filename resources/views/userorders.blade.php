@extends('master')
@section('content')
    

<div class=" flex flex-col items-center ">
    <div class="m-3 p-3">
        <h2 class="text-2xl font-bold">My Orders</h2>
        <hr>
    </div>

<div>
    <table id="mytable">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Ordered Date</th>
                <th>Total Amount</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$order->date}}</td>
                <td>{{$order->grand_amount}}</td>
                <td>{{$order->status}}</td>
                <td>
                    <div class="flex gap-6">
                        <a href="" class="bg-blue-500 text-sm text-white w-full py-2 px-2 rounded">Show Items</a>
                   
              
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>




</div>

<script>
    let table = new DataTable('#mytable');
</script>
   
@endsection
