<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::All();
        return view('restaurants.index', compact('restaurants'));
    }

    public function create()
    {
        return view('restaurants.create');
    }

    public function store(Request $request)
    {
        $restaurant = new Restaurant();
        $restaurant->name = $request->input('name');
        $restaurant->code = $request->input('code');
        $restaurant->save();
        return redirect('restaurant/index');
    }

    public function edit($restaurant_id)
    {
        $restaurant = Restaurant::find($restaurant_id);

        return view('restaurants.edit', compact('restaurant'));
    }

    public function update(Request $request, $restaurant_id)
    {
        $restaurant = Restaurant::find($restaurant_id);

        $data=$request->all();

        $restaurant->update($data);

        return redirect('restaurant/index');
    }

    public function destroy($restaurant_id)
    {
        $restaurant=Restaurant::find($restaurant_id);

        $restaurant->delete();

        return redirect('restaurant/index');
    }
}
