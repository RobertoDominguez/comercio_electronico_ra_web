<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::products()->get();
        return view('administrator.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $discounts=Discount::all();
        return view('administrator.product.create',compact('discounts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credentials = $this->validate(
            request(),
            [
                'name' => 'required',
                'description' => 'required',
                'image' => 'required',
                'price' => 'required',
                'stock' => 'required',
                'discount_id'=>'required'
            ]
        );


        $datos = [
            'active' => true,
            'description' => $request->description,
            'image' => '',
            'name' => $request->name,
            'discount_id'=>$request->discount_id,
            'price' => $request->price,
            'rank' => 0,
            'removed' => false,
            'stock' => $request->stock,
        ];

        if ($request->has('image')) {
            $datos['image'] = $request->image->store('products', 'public');
        }


        Product::create($datos);
        return redirect(route('administrator.product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $discounts=Discount::all();
        return view('administrator.product.edit', compact('product','discounts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $credentials = $this->validate(
            request(),
            [
                'name' => 'required',
                'description' => 'required',
                'price' => 'required',
                'stock' => 'required',
                'discount_id'=>'required'
            ]
        );


        $datos = [
            'description' => $request->description,
            'image' => $product->image,
            'name' => $request->name,
            'discount_id'=>$request->discount_id,
            'price' => $request->price,
            'stock' => $request->stock,
        ];

        if ($request->has('image')) {
            $datos['image'] = $request->image->store('products', 'public');
        }

        $product->update($datos);
        return redirect(route('administrator.product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->update(['removed' => true]);
        return redirect(route('administrator.product.index'));
    }
}
