<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Category;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // retrieve all products
        $products = Product::select('id','name' , 'updated_at')->get();

        return view('admin.products.index', compact('products'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.products.add' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate inputs
        $request->validate(
            [
                'name' =>'required',
                'image' => 'required|mimes:jpeg,bmp,png,gif|max:2048',
                'category_id' => 'required',
                'price' => 'required|regex:/^\d*(\.\d{1,2})?$/'
            ]
        );
        $inputs = $request->except('image');

        // upload image
        $image = $request->image;
        $imageName = uniqid(). time() . $image->getClientOriginalExtension();
        $image->move(public_path('images') , $imageName);
        $inputs['image'] = $imageName;

        // save in database
        Product::create($inputs);

        return redirect()->route('products.index')->with('success' , 'تم إضافة المنتج بنجاح');
    }


    /**
     * Show the form for editing the specified product.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        //
        $product = Product::findOrFail($product);

        $categories = Category::all();
        return view('admin.products.edit' , compact('product' , 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product)
    {
        //validate inputs
        $request->validate(
            [
                'name'=>'required',
                'category_id' => 'required',
                'price' => 'required|regex:/^\d*(\.\d{1,2})?$/'
            ]
        );

        $inputs = $request->except('image');

        if($request->hasFile('image')){
            $request->validate(
                [

                    'image' => 'required|mimes:jpeg,bmp,png,gif|max:2048',

                ]
            );
            $image = $request->image;

            $imageName = $image->getClientOriginalExtension();
            $image->move(public_path('images') , $imageName);

            $inputs['image'] = $imageName;

        }

        Product::findOrFail($product)->update($inputs);

        return redirect()->route('products.index')->with('success' , 'تم تعديل المنتج بنجاح');


    }

    /**
     * Remove the specified product from storage.
     *
     * @param  \App\Product  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Product::findOrfail($id)->delete();

        return redirect()->route('products.index')
            ->with('success','تم حذف المنتج بنجاح');
    }
}
