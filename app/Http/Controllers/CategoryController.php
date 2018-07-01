<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the Category id, name, updated date.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // retrieve all categories
        $categories = Category::select('id','name' , 'updated_at')->get();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new category.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categories.add');
    }

    /**
     * Store a newly created category and make validation on form .
     * upload image of category with dimension 20px * 20px and save in images folder
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate inputs
        $request->validate(
            [
                'name' => 'required',
                'image' => 'required|mimes:jpeg,bmp,png,gif|dimensions:width=20,height=20|max:2048'
            ]
        );

        $inputs = $request->except(['image']);

        //upload image
        $image = $request->image;
        $imageName= uniqid().time().$image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $inputs['image'] = $imageName;

        Category::create($inputs);

        return redirect()->route('categories.index')->with('success' , 'تم إضافة التصنيف بنجاح');

    }


    /**
     * Show the form for editing the specified category.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($category)
    {
        //
        $category = Category::findOrFail($category);

        return view('admin.categories.edit',compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$category)
    {
        //
        $request->validate(
            [
                'name' => 'required',
            ]
        );

        $inputs = $request->except(['image']);

        if ($request->hasFile('image')) {
            $request->validate(
                [
                    'image' => 'required|mimes:jpeg,bmp,png,gif|dimensions:width=20,height=20|max:2048'
                ]
            );

            $image = $request->image;

            $imageName= uniqid().time().$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            $inputs['image'] = $imageName;
        }

        Category::findOrFail($category)->update($inputs);
        return redirect()->route('categories.index')->with('success'  , 'تم تعديل التصنيف بنجاح');
    }

    /**
     * Remove the specified category from storage.
     * and update product with null which related to that deleted category .
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        Category::findOrFail($id)->delete();

        Product::where('category_id' , $id)->update(['category_id' => null ]);

        return redirect()->route('categories.index')
            ->with('success','تم حذف التصنيف بنجاح');
    }
}
