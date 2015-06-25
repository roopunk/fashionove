<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use App\ProductToStoreMap;
use App\Store;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\ProductRequest $request)
    {

        Product::create($request->all());
        return redirect('admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $brands = Brand::lists('brand_name','id')->all();
        $obj = DB::table('product_to_store_maps')->where('product_id', '=', $id)->first();

        if($obj){
            $temp = ProductToStoreMap::find($obj->id);
            $temp->product_id = $id;
            $temp->update();
        }else{
            $product_to_store_map = new ProductToStoreMap();
            $product_to_store_map->product_id = $id;
            $product_to_store_map->save();
        }
        return view('admin.products.edit',compact('product','brands'));

    }

    /**
     * Update the product
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Requests\ProductRequest $request)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return redirect('admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
    }

    public function get_stores($id, Request $request){
        return $stores =  Brand::find($request->brand_id)->brands()->get()->lists('store_name','id');
    }
}
