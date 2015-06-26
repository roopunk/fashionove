<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Day;
use App\PaymentType;
use App\Store;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StoresController extends Controller
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
        $stores = Store::all();
        return view('admin.stores.index',compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $brands = Brand::lists('brand_name','id')->all();
        $payment_types = PaymentType::lists('type_name','id')->all();
        $days = Day::all();
        return view('admin.stores.create',compact('brands','payment_types','days'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $store = new Store();
        $store->brand_id = (int)$request->brand_id;
        $store->payment_type = (int)$request->payment_type;
//        $store->day = implode(',',$request->day);
        $store->store_name = $request->store_name;
        $store->address = $request->address;
        $store->latitude = $request->latitude;
        $store->longitude = $request->longitude;
        $store->opening_time = $request->opening_time;
        $store->closing_time = $request->closing_time;
        $store->highlights = $request->highlights;
        $store->price_range = $request->price_range;
        $store->save();
        return redirect('admin/stores');
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
        $store = Store::find($id);
        $days = Day::all();
        $brands = Brand::lists('brand_name','id')->all();
        $payment_types = PaymentType::lists('type_name','id')->all();
        return view('admin.stores.edit',compact('store','days','brands','payment_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {

        $store = Store::find($id);
        $store->brand_id = (int)$request->brand_id;
        $store->payment_type = (int)$request->payment_type;
//        $store->day = implode(',',$request->day);
        $store->store_name = $request->store_name;
        $store->address = $request->address;
        $store->latitude = $request->latitude;
        $store->longitude = $request->longitude;
        $store->opening_time = $request->opening_time;
        $store->closing_time = $request->closing_time;
        $store->highlights = $request->highlights;
        $store->price_range = $request->price_range;
        $store->update();
        return redirect('admin/stores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Store::destroy($id);
    }
}
