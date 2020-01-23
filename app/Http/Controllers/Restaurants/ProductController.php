<?php

namespace App\Http\Controllers\Restaurants;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Product;

use App\Restaurant;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('verify.login');
        $this->middleware('verify.level.two');
    }

    public function index()
    {
        $user=session()->get('user');

        $products = Product::where('restaurant_id', $user['restaurant_id'])->get();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data=$request->all();

        $request=Request();
        $restaurant_id=$request->session()->get('user');
        $restaurant_id=$restaurant_id['restaurant_id'];

        $restaurant=Restaurant::find($restaurant_id);
        $restaurant= $restaurant->products()->create($data);
        return redirect('product/index');
    }

    public function edit($product_id)
    {
        
        $product=Product::find($product_id);

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $product_id)
    {
        $data=$request->all();
        $product= Product::find($product_id);
        $product->update($data);
        return redirect('product/index');
    }

    public function destroy($product_id)
    {
        $product=Product::find($product_id);
        $product->delete();
        return redirect('product/index');
    }

    public function teste()
    {
        $request=Request();
        $request->session()->put('user', '5454');
    }
}
