@extends('layouts.app')

@section('content')
<div class="wrapper order-index">
    <h1>Orders List</h1>
    <div class="order-container">
    @foreach ($orders as $order)    
        <div class="order-item card">
            <a href="/orders/{{ $order->id }}"><img src="/img/burger.png" alt="icon"> </a>
            <h4>{{ $order->name }}</h4>
        </div>
    @endforeach
    </div>

</div>


@endsection

