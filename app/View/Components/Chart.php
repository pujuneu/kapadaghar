<?php

namespace App\View\Components;

use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class Chart extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $orderdates,$profits,$sales,$ordercount;
    public function __construct()
    {
        //
        
        $chartdata =DB::table('carts')
        ->selectRaw('DATE(carts.created_at) AS date')
        ->selectRaw('COUNT(DATE(carts.created_at)) as orders')
        ->selectRaw('SUM(derived_products.profit) as profit')
        ->selectRaw('SUM(derived_products.sales) as sales')
        ->joinSub(function ($query) {
            $query->selectRaw('id, (oldprice - price) as profit, price as sales')
                ->from('products');
        }, 'derived_products', function ($join) {
            $join->on('carts.product_id', '=', 'derived_products.id');
        })
        ->groupBy('date')
        ->get();

        // dd($chartdata);

        $month = date('Y-m');

        $chartdata = $chartdata->whereBetween('date', [$month . '-01', $month . '-31']);
        
 
        $this->orderdates=$chartdata->pluck('date');
        $this->profits=$chartdata->pluck('profit');
        $this->sales=$chartdata->pluck('sales');
          $this->ordercount=$chartdata->pluck('orders');
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.chart');
    }
}
