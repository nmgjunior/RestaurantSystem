<?php

namespace App\Http\Controllers\Restaurants;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Order;

use App\Restaurant;


class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('verify.admin.rest');
    }
    
    
    public function index()
    {
        $orders=Order::all();
        return view('orders.index', compact('orders'));
    }

    
    public function create()
    {
        return view ('orders.create');
    }

    
    public function store(Request $request)
    {
        $data = $request->all();

        $restaurant=Restaurant::where('code',$data['restaurant_code'])->first();
        $order=$restaurant->orders()->create($data);
        return redirect('order/index');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $order=Order::find($id);

        return view('orders.edit', compact('order'));
    }

    
    public function update(Request $request, $id)
    {
        $data=$request->all();

        $order=Order::find($id);
        $order->update($data);
        return redirect('order/index');
    }

    
    public function destroy($id)
    {
        $order=Order::find($id);
        $order->delete();
        return redirect('order/index');
    }
}
