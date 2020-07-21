<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    //controller function to fire when get request
    //index and show are naming convention
    public function index(){

        //retrieve lastest data from database 
        $orders = Order::latest() -> get();

        return view('orders.index', ['orders' => $orders]);
    }

    public function show($id){

        $order = Order::findOrFail($id);

        return view('orders.show', ['order' => $order] );
    }

    public function create(){
        return view('orders.create');
    }

    public function store(){
        //new instance
        $order = new Order();

        $order->name = request('name');
        $order->menu = request('menu');
        $order->drink = request('drink');

        //save 
        $order->save();

        return redirect('/')->with('mssg', 'Thanks for your order');
    }

    public function destroy($id){
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect('/orders');
    }
}
