@extends('master')
@section('content')
    

<div class="container">
    <div class="m-3 p-3">
        <h2 class="text-2xl font-bold">My Orders</h2>
        <hr>
    </div>

<div>
    <table id="mytable">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Total</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$order}}</td>
                <td>{{$order->grand_amount}}</td>
                <td>{{$order->status}}</td>
                <td>
                    <a href="{{route('order.show',$order->id)}}" class="btn btn-primary">Show</a>
                    <a href="{{route('order.edit',$order->id)}}" class="btn btn-warning">Edit</a>
                    <form action="{{route('order.destroy',$order->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
f



</div>

<script>
    let table = new DataTable('#mytable');
</script>
   
@endsection
