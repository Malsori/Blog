<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Http\Requests\ProductFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
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
        $products=Product::all();
        return view('blog.Admin.products',['products'=>$products]);
    }

    public function productUsers()
    {
        $products = Product::with('creator')->get();
        return view('blog.blog',['products'=>$products]);
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
    public function edit($id)
    {
        $products=Product::findOrFail($id);
        return view('blog.Admin.edit',['products'=>$products]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductFormRequest $request, $id)
    {
        $data=$request->validated();

        $product=Product::findOrFail($id);
        $product->name=$data['name'];
        $product->slug=$data['slug'];
        $product->description=$data['description'];
        $product->price=$data['price'];
        

        if($request->hasfile('image'))
        {
            $destination='uploads/'.$product->image;

            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file=$request->file('image');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/',$filename);
            $product->image=$filename;
        }
        $product->status= $request -> status==true ? 1:0;
        $product->created_by=Auth::user()->id;
        $product->update();
        return redirect('admin/products')->with('status','Product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product=Product::findOrFail($id);

        if($product)
        {
            $destination='uploads'.$product->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $product->delete();
             return redirect('admin/products')->with('status','Product deleted sucessfully!');
    
        }
        else
        {
            return redirect('admin/products')->with('status','Product could not be deleted');
        }
    }
}
