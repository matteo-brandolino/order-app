@extends('layouts.app')

@section('content')
    <div class="wrapper create-order">
        <h1>Add new Order</h1>
        <form action="/orders" method="POST">
            @csrf
            <label for="name">Your name:</label>
            <input type="text" id="name" name="name">
            <label for="menu">Choose a menu</label>
            <select name="menu" id="menu">
                <option value="Trilogy Box Meal">Trilogy Box Meal</option>
                <option value="Fillet Box Meal">Fillet Box Meal</option>
                <option value="Hot Wings Box Meal">Hot Wings Box Meal</option>
            </select>
            <label for="extra">Choose an extra: </label>
            <select name="drink" id="drink">
                <option value="Pepsi Max">Pepsi Max</option>
                <option value="Diet Pespi">Diet Pespi</option>
                <option value="7up">7up</option>
            </select>
            <input type="submit" value="Send Order">
        </form>
    </div>
@endsection

