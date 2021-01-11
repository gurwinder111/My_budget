<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::with('category')->get();
        $products = DB::table('products')
                        ->leftJoin('categories', 'products.cat_id', '=', 'categories.id')
                        ->leftJoin('tags', 'products.tag_id', '=', 'tags.id')
                        ->select('products.*','categories.name as cat_name','tags.name as tag_name')
                        ->get();
        // echo "<pre>";
        // print_r($products);
        // die();
        return view('product.list',['products'=> $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $categorys =  Category::all();
        return view('product.add',['categorys' => $categorys, 'tags'=>$tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => ['required', 'max:100'],
            'price' => ['required'],
            'cat_id' => ['required'],
            'gender' => ['required'],
            'buy_link' => ['required'],
            'thumb' => ['required'],
        ]);

        $path = "";
        $allowedfileExtension=['jpeg','jpg','png','gif'];
        // Uploade Thumbnail
        if ($request->hasFile('thumb')) {
            $thumb = $request->thumb;
            $ext = $request->thumb->extension();
            $check=in_array($ext,$allowedfileExtension);
            if ($check) {
                $path = $request->thumb->store('product_images');
            }else{
                return redirect('products/create')->with('error', 'Sorry Only Upload png , jpg ,jpeg !');
            }       
        }else{
            return redirect('products/create')->with('error', 'Thumbnail is Required!');
        }

        // Uploade other Images
        $other_images = "";
        if($request->hasfile('other_img'))
        {
            foreach($request->file('other_img') as $file)
            {
                $ext = $file->extension();
                $check=in_array($ext,$allowedfileExtension);
                if ($check) {
                    $other_images .= $file->store('product_images').",";
                }else{
                    return redirect('products/create')->with('error', 'Sorry Only Upload png , jpg ,jpeg !');
                } 
            }
        }

        

        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->buy_link = $request->buy_link;
        $product->gender = $request->gender;
        $product->cat_id = $request->cat_id;
        $product->tag_id = $request->tag_id;
        $product->thumb = $path;
        $product->other_img = $other_images;
        $product->description = $request->description;

        if ($product->save()) {
            return redirect('products/create')->with('status', 'Product Saved Succeessfully!');
        }else {
            return redirect('products/create')->with('error', 'Data Not Saved!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
