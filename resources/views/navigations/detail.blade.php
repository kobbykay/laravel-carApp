@extends('layouts.app')
@section("content")

<div class="container">
   <div class="row">

       <div class="col-sm-6">
       <img class="detail-img rounded-md border-2 border-gray-300" src="{{$product['gallery']}}" alt="">
       </div>

       <div class="col-sm-6">
           <a href="/products">Go Back</a>
       <h2>{{$product['pname']}}</h2>
       <h3 class="font-semibold mb-2">Price : $ {{$product['price']}}</h3>
       <h4>Details: {{$product['description']}}</h4>
       <h4>Category: {{$product['category']}}</h4>
       <br><br>

       <form action="/add_to_cart" method="POST">
           @csrf
           <input type="hidden" name="product_id" value={{$product['id']}}>
       <button class="btn btn-primary">Add to Cart</button>
       </form>
       <br><br>

       <button class="btn btn-success">Buy Now</button>
       <br><br>
    </div>
   </div>
</div>
@endsection
