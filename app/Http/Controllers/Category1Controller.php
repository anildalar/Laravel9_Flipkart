<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

use Session;

class Category1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //echo 'category index';
        //dd(Category);
        $categories = Category::getCategory(); // latest() method is a elequent method
        
        //dd(gettype($categories));
        //dd($categories);
        //$data = $categories;
        return view('category.index',['dt'=>$categories]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       //echo 'create methods';
        return view('category.create');//foldername.filename
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
        //dd($request->all());
        //Validation checking

        // Valiation 1.

        //1. Category Name should be in alphabets
        //2. Category Name should min 3 characters
        //3. Category Name should be mendatory
        $validated = $request->validate([
            'cat_name' => 'required|regex:/^[a-z A-Z]+$/u|min:3',
            'cat_desc' => 'required',
        ]);

        //Validation Pass
        

        Category::storeCategory($request->all()); //Actual arguemtn
        Session::flash('message', 'Category Stored successfully'); 
        return redirect('category/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category1  $category1
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //echo 'Hello from show method';
        return view('category.show', [
            'category' => Category::findOrFail($id) //Elequent 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category1  $category1
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('category.edit', [
            'category' => Category::findOrFail($id) //Elequent 
        ]);//foldername.filename
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category1  $category1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        // Valiation 1.

        //1. Category Name should be in alphabets
        //2. Category Name should min 3 characters
        //3. Category Name should be mendatory
        $validated = $request->validate([
            'cat_name' => 'required|regex:/^[a-z A-Z]+$/u|min:3',
            'cat_desc' => 'required',
        ]);

        //Validation Pass
        

        Category::updateCategory($request->all()); //Actual arguemtn
        Session::flash('message', 'Category Updated successfully'); 
        return redirect('category/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category1  $category1
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Category::findOrFail($id)->delete();

        Session::flash('message', 'Category Deleted successfully'); 
        return redirect('category');
    }
}
