<?php

namespace App\Http\Controllers;

use App\Models\products_table;
use Illuminate\Http\Request;

class ProductsTableController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products_table  $products_table
     * @return \Illuminate\Http\Response
     */
    public function show(products_table $products_table)
    {
        $products=products_table::all();
        return view('pages.menu',['products'=>$products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products_table  $products_table
     * @return \Illuminate\Http\Response
     */
    public function edit(products_table $products_table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products_table  $products_table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, products_table $products_table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products_table  $products_table
     * @return \Illuminate\Http\Response
     */
    public function destroy(products_table $products_table)
    {
        //
    }
}
