<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Http\Requests\ProductFormRequest;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blog.Admin.index');
    }

    public function product()
    {
        return view('blog.Admin.products');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.admin.addProducts');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductFormRequest $request)
    {
        $data=$request->validated();

        $product=new Product;
        $product->name=$data['name'];
        $product->slug=$data['slug'];
        $product->description=$data['description'];
        $product->price=$data['price'];
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads',$filename);
            $product->image=$filename;
        }
        $product->status=$request->status==true ? 1:0;
        $product->created_by=Auth::user()->id;
        $product->save();
        return redirect('admin/products')->with('status','New product has been added');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
