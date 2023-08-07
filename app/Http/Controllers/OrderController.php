<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Mail\Mailer;
>>>>>>> 55d43e69aab00fe0d6f8bca32191066f5fe15706
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();

        return view('order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order = Order::all();

        return view('order.create', collect('order'));
    }

    public function myorders()
    {
        $orders = Order::where('user_id', '=', auth()->user()->id)->get();

        return view('userorders', compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        // Create a new order
        $order = new Order;
        $order->user_id = auth()->user()->id;
        $order->product_id = $request->product_id;
        $order->quantity = $request->quantity;
        $order->save();
    
        // Remove the item from the cart
        $cartItem = Cart::where('user_id', auth()->user()->id)
            ->where('product_id', $request->product_id)
            ->first();
        
        if ($cartItem) {
            $cartItem->delete();
        }
    
        return redirect()->back();
    }
    
    
    
=======
        $request->validate([
            'shipping_address' => 'required',
            'phone' => 'required', 'numeric',
        ]);

        $data = $request->toArray();

        $data['date'] = date('Y-m-d');
        $data['status'] = 'Pending';
        $data['payment_method'] = 'COD';
        $carts = Cart::where('user_id', auth()->user()->id)->where('is_ordered', false)->get();

        $ids = $carts->pluck('id')->toArray();
        $data['cart_id'] = implode(',', $ids);

        $data['user_id'] = auth()->user()->id;

        Order::create($data);
        Cart::whereIn('id', $ids)->update(['is_ordered' => true]);

        //mail when order is placed
        // $data = [
        //     'name' => auth()->user()->name,
        //     'mailmessage' => 'New Order has been placed',
        //         ];
        //  Mail::send('email.email',$data, function ($message){
        //      $message->to("neupanepuzza@gmail.com")
        //      ->subject('New Order Placed');
        //  });
        $mailData = [
            'title' => 'New Order Placed',
            'view' => 'email.order_success',
        ];

        // Mail::to(auth()->user()->email)->send(new Mailer($mailData));

        return redirect()->route('order.myorders');
    }

    public function status($id, $status)
    {
        $order = Order::find($id);
        $order->status = $status;
        $order->save();

        return redirect(route('order.index'))->with('success', 'Status changed to '.$status);
    }
>>>>>>> 55d43e69aab00fe0d6f8bca32191066f5fe15706

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    public function khaltiverify(Request $request)
    {
        $args = http_build_query([
            'token' => 'QUao9cqFzxPgvWJNi9aKac',
            'amount' => 1000,
        ]);

        $url = 'https://khalti.com/api/v2/payment/verify/';

        // Make the call using API.
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $args);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $headers = ['Authorization: Key test_secret_key_231c5ad323464132af2b824cf1a03efe'];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // Response
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($status_code == 200) {
            return response()->json($request);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
