@extends('layouts.app')

@section('content')

<!-- portfolio -->
<div class="portfolio">
    <h1 class="text-center">DashBoard</h1>
<div class="container-admin">
 <div class="row">
    <div class="custom-product">

        <a href="{{ route('addproduct') }}">
        <div class=" trening-item-ad justify-center max-w-3xl bg-white border-2 border-gray-300 p-5 rounded-md tracking-wide shadow-lg">
         <div class="col-lg-4 col-md-4 col-sm-12">
        <h3>Add Products</h3>
        </div>
        </div>
        </a>


        <a href="{{ route('userlist') }}">
        <div class=" trening-item-ad justify-center max-w-3xl bg-white border-2 border-gray-300 p-5 rounded-md tracking-wide shadow-lg">
            <div class="col-lg-4 col-md-4 col-sm-12">
           <h3>View Users</h3>
          </div>
                </div>
        </a>



        <a href="{{ route('editproduct') }}">
        <div class=" trening-item-ad justify-center max-w-3xl bg-white border-2 border-gray-300 p-5 rounded-md tracking-wide shadow-lg">
        <div class="col-lg-4 col-md-4 col-sm-12">
        <h3>Edit Products</h3>
        </div>
        </div>
        </a>


        <a href="{{ route('orderstatus') }}">
            <div class=" trening-item-ad justify-center max-w-3xl bg-white border-2 border-gray-300 p-5 rounded-md tracking-wide shadow-lg">
            <div class="col-lg-4 col-md-4 col-sm-12">
            <h3>Order Status</h3>
            </div>
            </div>
            </a>


</div>
 </div>
</div>
</div>


@endsection
