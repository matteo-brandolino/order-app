@extends('layouts.app')

@section('content')
    <div class="wrapper order-details">
        <h1>Order for {{ $order->name }}</h1> 
        <p class="menu"> Menu - {{ $order-> menu }}</p>
        <p class="drink"> Drink - {{ $order-> drink }}</p>
    <form action="/orders/{{ $order-> id }}" method="post">
        @csrf
        <!-- delete request  -->
        @method('DELETE') 
        <button>Order Completed</button>
    </form>
    <a href="/orders" class="back">Back to all orders</a>
    </div>

@endsection

