@extends('layouts.app')
@section('content')
       <div class="wrapper create-pizza">
       <h1>Create a new pizza</h1>
       <form action="/pizza" method="POST">
       @csrf
       <label for="name">Your Name:</label>
       <input type="text" id ="name" name="name">
       <label for="type"> Chose pizza type:</label>
       <select name="type" id="type">
       <option value="margarita">Margarita</option>
       <option value="hawaian">Hawaian</option>
       <option value="volcano">Volcano</option>
       </select>
       <label for="base"> Chose pizza base:</label>
       <select name="base" id="base">
       <option value="cheesy crust">Cheesy crust</option>
       <option value="garlic crust">Garlic crust</option>
       <option value="thin & crispy">Thin & Crispy</option>
       </select>
       <fieldset>
           <label>Extra Topping:</label>
           <input type="checkbox" name="topping[]" value="mushrooms">Mushrooms<br />
           <input type="checkbox" name="topping[]" value="peppers">Peppers<br />
           <input type="checkbox" name="topping[]" value="garlic">Garlic<br />
           <input type="checkbox" name="topping[]" value="olives">Olives<br />
        </fieldset>
       <input type="submit" value="Order Pizza">
       </form>
       </div>
@endsection
