<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function changemonth(Request $request){



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
       
               $month = $request->month;
               
               $chartdata = $chartdata->whereBetween('date', [$month . '-01', $month . '-31']);
               
         
       
               $orderdates=$chartdata->pluck('date');
               $profits=$chartdata->pluck('profit');
               $sales=$chartdata->pluck('sales');
                 $ordercount=$chartdata->pluck('orders');
       
       $response=[
           'orderdates'=>$orderdates,
           'sales' =>  $sales ,
           'ordercounts'   => $ordercount
       
       
       ];
       
       
       
       
               return response()->json($response);
       
       
           }
}
