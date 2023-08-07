<?php

namespace App\View\Components;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $cartcount,$categories,$product;
    public function __construct()
    {
        //
        $this->cartcount = 0;
        if(auth() -> user())
        $this->cartcount = Cart::where('user_id', '=', auth()->user()->id)->where('is_ordered',false)->count();
        $this->categories = Category::all();


    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navbar');
    }
}
