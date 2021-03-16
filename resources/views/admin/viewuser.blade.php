@extends('layouts.app')

@section('content')

<div class="custom-product">
    <div class="col-sm-10">
       <div class="trending-wrapper">

        <h4>User List </h4>
           @foreach($users as $item)
           <div class=" row searched-item cart-list-devider">
            <div class="col-sm-6">

                     <h2>Name : {{$item->name}}</h2>
                     <h5>Email Address : {{$item->email}}</h5>
                     {{-- <a href="#" class="btn btn-warning" >Remove User</a> --}}

            </div>
        </div>
           @endforeach
         </div>

    </div>
</div>
{{-- /removecart/{{$item->cart_id}} --}}

@endsection
