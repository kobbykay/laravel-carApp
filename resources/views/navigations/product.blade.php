@extends('layouts.app')
@section("content")

<div class="custom-product">


      <div class="trending-wrapper">
        <h3>Car Products Available</h3>

        @foreach($products as $item)
                <div class=" trening-item justify-center max-w-3xl bg-white border-2 border-gray-300 p-5 rounded-md tracking-wide shadow-lg">
                <a href="detail/{{$item['id']}}">

                    <div id="header" class="flex">
                    <img alt="mountain" class=" trending-image w-45 rounded-md border-2 border-gray-300" src="{{$item['gallery']}}" />
                    <div id="body" class="flex flex-col ml-5">

                        <h4 id="name" class="font-semibold mb-2">{{$item['pname']}}</h4>
                        <h5 class="ml-3">$ {{$item['price']}}</h5>

                    </div>
                    </div>

                </a>
                </div>
                <p></p>
            @endforeach


      </div>
      </div>
</div>
@endsection
