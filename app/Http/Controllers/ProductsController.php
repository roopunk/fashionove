<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use App\ProductToBrandMap;
use App\ProductToStoreMap;
use App\Store;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
    }


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
        $obj = DB::table('product_to_brand_maps')->where('product_id', '=', $id)->first();

        if($obj){
            $ptos = ProductToBrandMap::where('product_id','=',$id)->first();
            $selected_brand = Brand::find($ptos->brand_id);
            $stores = Store::all()->where('brand_id',$ptos->brand_id);
            $selected_stores = ProductToStoreMap::where('product_id','=',$id)->get();
            $selected_store = [];
            foreach($selected_stores as $s){
                array_push($selected_store,$s->store_id);
            }
            return view('admin.products.edit',compact('product','brands','selected_brand','stores','selected_store'));
        }else{
            $product_to_brand_map = new ProductToBrandMap();
            $product_to_brand_map->product_id = $id;
            $product_to_brand_map->brand_id = 1;
            $product_to_brand_map->save();
            $ptos = ProductToBrandMap::where('product_id','=',$id)->first();
            $selected_brand = Brand::find($ptos->brand_id);
            $stores = Store::all()->where('brand_id',$ptos->brand_id);
            $selected_stores = ProductToStoreMap::where('product_id','=',$id)->get();
            $selected_store = [];
            foreach($selected_stores as $s){
                array_push($selected_store,$s->store_id);
            }
            return view('admin.products.edit',compact('product','brands','selected_brand','stores','selected_store'));
        }


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
        ProductToBrandMap::where('product_id','=',$id)->update(['brand_id'=>$request->brand_id]);
        ProductToStoreMap::where('product_id','=',$id)->delete();
        $stores =  Brand::find($request->brand_id)->brands()->get();
        return json_encode($stores);
    }
    public function update_store_id($id, Request $request){
        $product = new ProductToStoreMap();
        $product->product_id = $id;
        $product->store_id = $request->store_id;
        $product->save();
    }
    public function delete_store_id($id, Request $request){
        ProductToStoreMap::where('store_id','=',$request->store_id)->delete();
    }
}
