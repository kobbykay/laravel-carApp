@extends('layouts.app')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <table class="table">

            <tbody>
              <tr>
                <td>Amount</td>
              <td>$ {{$total}}</td>
              </tr>
              <tr>
              @php
                    $taxval = $total*0.3
              @endphp

                <td>Tax</td>
                <td>$ {{$taxval}}</td>
              </tr>
              <tr>

                @php
                    $del = $total*0.1
              @endphp

                <td>Delivery </td>
                <td>$ {{$del}}</td>
              </tr>
              <tr>
                <td>Total Amount</td>
              <td class="font-semibold">$ {{$total+ $taxval+$del}}</td>
              </tr>
            </tbody>
          </table>
          <div>

            <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="enter your address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>online payment</span> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>EMI payment</span> <br><br>
                  <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br> <br>

                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
              </form>

          </div>
     </div>
</div>
@endsection
