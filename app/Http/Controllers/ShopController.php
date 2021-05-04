<?php

namespace App\Http\Controllers;

use App\Product;
use App\category;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class ShopController extends Controller
{
    //
    public function __construct()
    {
       $this->middleware('auth') ;
    }
    public function index(Request $request,$id=null) 
    {
      $categories = Category::all();  
        $products = Product::paginate(6);
        return view('shop.index',compact('products','categories','id'));
    }
    


    public function category($id)
      {
         $categories = Category::all();   
         $products = product::where('category_id',$id)->paginate (6);
         return view('shop.index', compact('products','categories','id'));
      }


    public function show($id)
        {
          $show = Product::findOrFail($id);
          return view('shop.show', compact('show'));
        }

}
