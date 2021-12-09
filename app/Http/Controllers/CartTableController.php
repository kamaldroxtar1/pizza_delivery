<?php

namespace App\Http\Controllers;

use App\Models\cart_table;
use Illuminate\Http\Request;

class CartTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated=$request->validate(['quantity'=>'required'],['quantity.required'=>'quantity is required']);
        if($validated){
            $name=$request->name;
            $image=$request->pi;
            $quantity=$request->quantity;
            $price=($request->price*$quantity);

            $cartmodel= new cart_table();
            $cartmodel->product_image=$image;
            $cartmodel->name=$name;
            $cartmodel->price=$price;
            $cartmodel->quantity=$quantity;
            if($cartmodel->save()){
                $carts=$cartmodel::all();
                $count=$carts->count();
                session()->put('count',$count);
               return redirect('/menu');
            }
            else{
                return back();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart_table  $cart_table
     * @return \Illuminate\Http\Response
     */
    public function show(cart_table $cart_table)
    {
        $carts=cart_table::all();
        $count=$carts->count();
        session()->put('count',$count);
        $sum=cart_table::sum('price');
        session()->put('sum',$sum);
        return view('pages.cart',['carts'=>$carts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cart_table  $cart_table
     * @return \Illuminate\Http\Response
     */
    public function edit(cart_table $cart_table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cart_table  $cart_table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cart_table $cart_table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cart_table  $cart_table
     * @return \Illuminate\Http\Response
     */
    public function destroy(cart_table $cart_table,$id)
    {
        $cart= cart_table::find($id);
        $cart->delete();
        return redirect('cart');

    }
    public function logout(cart_table $cart_table){
        session()->forget('sid');
        session()->forget('count');
        session()->forget('sum');
        cart_table::truncate();
        return redirect("login");
    }

    public function thanx(cart_table $cart_table){
        return view('pages.checkout');
    }
    public function thanxlast(){
        session()->forget('count');
        session()->forget('sum');
        cart_table::truncate();
        return view('pages.thanx');
    }
}
