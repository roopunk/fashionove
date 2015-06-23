<?php

namespace App\Http\Controllers;

use App\Brand;
use App\BrandType;
use App\City;
use App\Day;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Validator;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $cities = City::lists('city_name','id')->all();
        $brand_types = BrandType::lists('type_name','id')->all();

        return view('admin.brands.create',compact('cities','brand_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\BrandRequest $request)
    {

        $brand = new \App\Brand;
        $brand->city_id = $request->city_id;
        $brand->brand_type_id = $request->brand_type_id;
        $brand->brand_name = $request->brand_name;
        $brand->description = $request->description;
        $brand->logo = $request->logo;
        $brand->video = $request->video;
        $brand->save();
        return redirect('admin/brands');
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
        $brand = Brand::find($id);
        $cities = City::lists('city_name','id')->all();
        $brand_types = BrandType::lists('type_name','id')->all();
        return view('admin.brands.edit',compact('brand','cities','brand_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Requests\BrandRequest $request)
    {
        $brand = Brand::find($id);
        $brand->city_id = $request->city_id;
        $brand->brand_type_id = $request->brand_type_id;
        $brand->brand_name = $request->brand_name;
        $brand->description = $request->description;
        $brand->logo = $request->logo;
        $brand->video = $request->video;
        $brand->update();
        return redirect('admin/brands');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Brand::destroy($id);
    }
}
