<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FileController extends Controller
{
    function index(){
        return view('insert');
    }

    function show(){
        // $product = Product::findOrfail(7);
        // // dd($product);
        // $allimage = json_decode($product->image,true);

        $products = Product::get();
        // dd($products);
        $images=[];
        foreach($products  as $product){
            $images[] = json_decode($product->image,true);


        }
        return view('show',compact('images'));
    }



    // INSERT DATA IN DATABASE

    function insert (Request $request){

       $request->validate([
        'file'=>['required'],

       ]);

       if($request->has('file')){
        $allimage =[];
        $images = $request->file('file');
        foreach( $images as $image ){
            $imagename = time()."_".$image->getClientOriginalName();
           
            $image->storeAS('upload',$imagename,'public');

            $allimage[]=$imagename ;
        }

        $encodeimage = json_encode($allimage);
        Product::create(['image' =>$encodeimage]);

        return back()->with('success','image upload successfylly');
        
       }

    }


}
