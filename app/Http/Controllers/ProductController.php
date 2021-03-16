<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //index page link for the products
   public function index()
    {
        $data= Product::all();
       return view('navigations.product',['products'=>$data]);
    }

//details page when you click on an item
   public function detail($id)
    {
        $data =Product::find($id);
        return view('navigations.detail',['product'=>$data]);
    }


//search items here
    public function search(Request $req)
    {
        $data = Product::
        where('pname', 'like', '%'.$req->input('query').'%')
        ->get();
        return view('navigations.search',['products'=>$data]);

    }



     public function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
           $cart= new Cart;
           $cart->user_id=$req->session()->get('user')['id'];
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('/products');

        }
        else
        {
            return redirect('/login');
        }
    }



    static function cartItem()
    {
     $userId=Session::get('user')['id'];
     return Cart::where('user_id',$userId)->count();
    }



    public function cartList()
    {
        $userId=Session::get('user')['id'];
       $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();


        $count = $products->count();
         if($count <= 0){
            return dd($count);
         }else{
            return view('navigations.cartlist',['products'=>$products]);
         }


    }



    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }


    function orderNow()
    {
        $userId=Session::get('user')['id'];
        $total= $products= DB::table('cart')
         ->join('products','cart.product_id','=','products.id')
         ->where('cart.user_id',$userId)
         ->sum('products.price');

         return view('navigations.ordernow',['total'=>$total]);
    }


   public function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
         $allCart= Cart::where('user_id',$userId)->get();
         foreach($allCart as $cart)
         {
             $order= new Order;
             $order->product_id=$cart['product_id'];
             $order->user_id=$cart['user_id'];
             $order->status="pending";
             $order->payment_method=$req->payment;
             $order->payment_status="pending";
             $order->address=$req->address;
             $order->save();
             Cart::where('user_id',$userId)->delete();
         }
         $req->input();
         return redirect('/');
    }


   public function myOrders()
    {
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->get();

         return view('navigations.myorders',['orders'=>$orders]);
    }


    public function addProductForm()
    {
         return view('admin.addproduct');
    }



    public function addProduct(Request $req)
    {


        $this->validate($req,[
            'name'=> 'required',
            'price'=> 'required',
            'category'=> 'required',
            'description'=> 'required',
            'url'=> 'required'

        ]);

        Product::create([
            'pname' => $req->name,
            'price' => $req->price,
            'category' => $req->category,
            'description' => $req->description,
            'gallery' => $req->url,

        ]);

         return back();
    }

    public function editProduct()
    {
        $data= Product::all();
         return view('admin.editproduct',['products'=>$data]);
    }

    public function starteditProduct($id)
    {
        $data =Product::find($id);
        return view('admin.startedit',['product'=>$data]);
    }

    public function updateProduct(Request $req)
    {
        $this->validate($req,[
            'name'=> 'required',
            'price'=> 'required',
            'category'=> 'required',
            'description'=> 'required',
            'url'=> 'required'

        ]);

        DB::table('products')->where('id',$req->id)->update([

            'pname' => $req->name,
            'price' => $req->price,
            'category' => $req->category,
            'description' => $req->description,
            'gallery' => $req->url,
        ]);

        $data= Product::all();
        return view('admin.editproduct',['products'=>$data]);
    }

    public function deleteProduct($id)
    {
        //no fk mapping is here therfore deleting item is unchecked
        DB::table('products')->where('id',$id)->delete();
        $data= Product::all();
        return view('admin.editproduct',['products'=>$data]);
    }


    public function orderStatus()
    {

        $orders= DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->join('users','orders.user_id','=','users.id')
         ->get();


         $count = $orders->count();
         if($count <= 0){

            return dd($count);

         }else{
              return view('admin.orderstatus',['orders'=>$orders]);
         }

    }


}
