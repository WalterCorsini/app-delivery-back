<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    /**
     * shows all the restaurateur's orders
     */
    public function index(Request $request)
    {
        $restaurantId = Auth::id();
        $dishesForRestaurant = Dish::where('restaurant_id', $restaurantId)->pluck('id');
        // Find orders that include those dishes
        $orders = Order::whereHas('dishes', function ($query) use ($dishesForRestaurant) {
            $query->whereIn('dish_id', $dishesForRestaurant);
        })->orderBy('created_at', 'desc')->paginate(10);
        foreach ($orders as $curOrder){
            $curOrder['date'] = Carbon::parse($curOrder['created_at'])->format('d-m-Y H:i');
            // dd($curOrder['date']);

        }

        return view("admin.orders.index", compact('orders'));
    }


    public function show(string $id)
    {
        $data = Auth::id();
        // find order details by id
        $orderDetails = Order::with('dishes')->findOrFail($id);
        // if the user_id does not match the restaurant id it takes you back to the index
        if($data != $orderDetails->dishes[0]->restaurant_id){

            $restaurantId = Auth::id();
            $dishesForRestaurant = Dish::where('restaurant_id', $restaurantId)->pluck('id');
            // Find orders that include those dishes
            $orders = Order::whereHas('dishes', function ($query) use ($dishesForRestaurant) {
                $query->whereIn('dish_id', $dishesForRestaurant);
            })->get();
            return view("admin.orders.index", compact('orders'))->with('error','Puoi accedere solo ai tuoi ordini!');
        } else {
            $orders = [
                'restaurant_id' => $orderDetails->dishes[0]->restaurant_id,
                'dishes' => $orderDetails->dishes
            ];
            return view('admin.orders.show', compact('orders','orderDetails'));
        }
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
