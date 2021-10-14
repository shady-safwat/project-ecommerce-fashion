<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('admin.category.all',compact('categories'));
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
        $roles = Role::all();
        return view('admin.category.create',compact('categories','roles'));
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
        $categories = [
            'name' => ['required','string','max:255'],
            'slug' => ['required','string','max:255'],
            'description' => ['required','string','max:255'],
            'role_id' => ['required'],
        ];
        $validator =  Validator::make($data,$categories);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($data);
        }



        $categories = Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'parent_id' => $request->parent_category ? $request->parent_category:0,
            'description' => $request->description,
            'role_id' => $request->role_id
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
        $products = Category::findOrFail($id)->product;
        return view('admin.category.show',compact('products'));
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
        $category = Category::findOrFail($id);
        return view('admin.category.edit',compact('category'));
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
        $categories = [
            'name' => ['required','string','max:255'],
            'slug' => ['required','string','max:255'],
            'parent_category' => ['required'],
            'description' => ['required','string','max:255'],
        ];
        $validator =  Validator::make($data,$categories);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($data);
        }


        $category= Category::findOrFail($id);
        $category-> update([
            'name' => $request->name,
            'slug' => $request->slug,
            'parent_id' => $request->parent_category ? $request->parent_category:0,
            'description' => $request->description,
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
        $product = Category::findOrFail($id) ;
        $product->delete();
        return redirect()->back();
    }
}
