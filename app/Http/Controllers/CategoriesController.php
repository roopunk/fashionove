<?php

namespace App\Http\Controllers;

use App\Category;
use App\Gender;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Validator;

class CategoriesController extends Controller
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
        $categories_men = Category::all()->where('gender_id','1');
        $categories_women = Category::all()->where('gender_id','2');
        return view('admin.categories.index',compact('categories_men','categories_women'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $genders = Gender::lists('gender_name','id')->all();
        return view('admin.categories.create',compact('genders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->gender_id = $request->gender_id;
        $category->save();
            return redirect('admin/categories');
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
        $genders = Gender::lists('gender_name','id')->all();
        $category = Category::find($id);
        return view('admin.categories.edit',compact('category','genders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {

        $category = Category::find($id);
        $category->category_name = $request->category_name;
        $category->gender_id = $request->gender_id;
        $category->update();
        return redirect('admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
    }
}
