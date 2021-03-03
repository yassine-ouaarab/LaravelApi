<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{


    public function getProducts()
    {
        return Product::all();
        //return response()->json(Employee::all,200);
    }

    public function getProductById($id)
    {
        $product = Product::find($id);
            if(is_null($product)) return null;
            else return $product;
    }


    public function AddProduct(Request $request)
    {
        Product::create($request->all());
        return true;
    }

    public function UpdateProduct(Request $request,$id)
    {


        $product = Product::find($id);
        if(is_null($product))
        {return null;}
        else
        {$product -> update($request->all());
        return true;}

    }

    public function DeleteProduct($id)
    {

        $product = Product::find($id);
        if(is_null($product))
        {return null;}
        else
        {$product -> delete();
        return true;}

    }


}
