<?php

namespace App\Http\Controllers;

use App\cart;
use App\products;
use Illuminate\Http\Request;
use Psy\Tests\Input\CodeArgumentTest;
use Session;
use Auth;
use Stripe\Stripe;
use Stripe\Charge;
use App\Order;
class productController extends Controller
{
    public function getIndex()
    {
        $products = products::all();
        return view('shop.index', ['products' => $products]);
    }
    public function about(){
        return view('partials.about');
    }
    public function contactUs(){

        return view('partials.contact-us');
    }
    public function getAddToCart(Request $request, $id)
    {
        $product = products::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : Null;
        $cart = new cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        return redirect()->route('product.index');
    }
    public function getReduceByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : Null;
        $cart = new cart($oldCart);
        $cart->reduceByOne($id);
       if (count($cart->items)>0) {
         Session::put('cart',$cart);
           # code...
       }
       else{
        Session::forget('cart');
       }
        return redirect()->route('product.cart');


    }
    public function getAddByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : Null;
        $cart = new cart($oldCart);
        $cart->addByOne($id);
        Session::put('cart',$cart);
        return redirect()->route('product.cart'); 
    }


    public function getRemoveItem($id){
     $oldCart = Session::has('cart') ? Session::get('cart') : Null;
        $cart = new cart($oldCart);

       $cart->removeItem($id);
       if (count($cart->items)>0) {
         Session::put('cart',$cart);
           # code...
       }
       else{
        Session::forget('cart');
       }
       
        return redirect()->route('product.cart');     
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('shop.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
    public function getCheckout()
    {
        if (!Auth::check()) {
            return redirect()->to('/user/signin');
        }
        if (!Session::has('cart')) {
            return view('shop.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request)
    {
        if (!Session::has('cart')) {
            return redirect()->route('shop.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        Stripe::setApiKey('sk_test_A83BlSBxtJbC7i0RPWmI63m6');
        $token = \Stripe\Token::create(array(
           "card" => array(
           "number" => "4242424242424242",
           "exp_month" => 8,
           "exp_year" => 18,
           "cvc" => "123"
             )));
        try {
            $charge = Charge::create(array(
                "amount" => $cart->totalPrice,
                "currency" => "usd",
                "description" => "hell",
                "source" =>  $token->id,
                //"source" => $request->input("stripeToken"),

            ));
          //  dd($charge->id);
            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->payment_id = $charge->id;

            Auth::user()->orders()->save($order);

        } catch (Exception $e) {
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }
        Session::forget('cart');
        return redirect()->route('product.index')->with('success', 'Succesfully Purchased Products');

    }
    public function getCashOnDilevery(){
        return view('dilevery.dilevery');
    }
    public function postCashOnDilevery(Request $request){

            if (!Session::has('cart')) 
                {
            return redirect()->route('shop.cart');
            }
            
            try{
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->payment_id = "cash on dilvery";
            Auth::user()->orders()->save($order);
        }
            catch (Exception $e) {
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }
        Session::forget('cart');
        return redirect()->route('product.index')->with('success', 'Succesfully Purchased Products');

    }

}