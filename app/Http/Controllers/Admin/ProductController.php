<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        $categories = Category::all();
        return view('admin.product.all',compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $products = Product::all();
        $categories = Category::all();
        $roles = Role::all();
        return view('admin.product.create',compact('products','categories','roles'));
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
        $data = $request->all();
        $products = [
            'name' => ['required','string','max:255'],
            'description' => ['required','string','max:255'],
            'price' => ['required','numeric','regex:/^\d+(\.\d{0,2})?$/'],
            'sale' => ['required','numeric','regex:/^\d+(\.\d{1,2})?$/'],
            'status' => ['required'],
            'image' =>['required','mimes:jpg,bmp,png,jpeg'],
            'category_id' =>['required'],
            'role_id' =>['required'],
        ];
        $validator =  Validator::make($data,$products);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($data);
        }

        $productPicture = $request->file('image');
        $picName = time(). "_".$productPicture->getClientOriginalName();
        $productPicture->move('adminpanel\img',$picName);

        $products = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'sale' => $request->sale,
            'status' => $request->status,
            'image' => $picName,
            'category_id'=> $request->category_id,
            'role_id'=> $request->role_id,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product= Product::findOrFail($id);
        return view('admin.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product= Product::findOrFail($id);
        return view('admin.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->all();
        $products = [
            'name' => ['required','string','max:255'],
            'description' => ['required','string','max:255'],
            'price' => ['required','numeric','regex:/^\d+(\.\d{0,2})?$/'],
            'sale' => ['required','numeric','regex:/^\d+(\.\d{1,2})?$/'],
            'status' => ['required'],
            'image' =>['required','mimes:jpg,bmp,png,jpeg'],
        ];
        $validator =  Validator::make($data,$products);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($data);
        }

        $productPicture = $request->file('image');
        $picName = time(). "_".$productPicture->getClientOriginalName();
        $productPicture->move('adminpanel\img',$picName);

        $product = Product::findOrFail($id);
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'sale' => $request->sale,
            'status' => $request->status,
            'image' => $picName,
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::findOrFail($id) ;
        $product->delete();
        return redirect()->back();
    }
}
