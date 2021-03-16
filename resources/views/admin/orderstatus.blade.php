@extends('layouts.app')
@section("content")

<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>All Orders </h4>

            @foreach($orders as $item)

                <div class=" row searched-item cart-list-devider">

                    <div class="col-sm-3">
                            <img class="trending-image" src="{{$item->gallery}}">
                    </div>
                    <div class="col-sm-4">
                            <div class="">
                            <h3>Name : {{$item->name}}</h3>
                            <h5>Email Address : {{$item->email}}</h5>
                            <h5>Product Name : {{$item->pname}}</h5>
                            <h5>Delivery Status : {{$item->status}}</h5>
                            <h5>Address : {{$item->address}}</h5>
                            <h5>Payment Status : {{$item->payment_status}}</h5>
                            <h5>Payment Method : {{$item->payment_method}}</h5>

                            <a href="#" class="btn btn-danger"> Close Order</a>

                            </div>
                    </div>
                </div> 

            @endforeach
        </div>

     </div>
</div>
@endsection



