<?php

namespace App\Http\Controllers;

use App\Googlefeed;
use App\Product;
use App\Shopify;
use Illuminate\Http\Request;

class shopifyController extends Controller
{
    //

    // dashboard for a new shop
    public function index(){
    return view('welcome');
    }


    // method to create a new store
    public function createstore(Request $request){

         $shopify= new Shopify;

         $shopify->store_name=$request->input('store_name');
         $shopify->store_ur=$request->input('store_ur');
         $shopify->currency=$request->input('currency');
         $shopify->save();

    }

        // create a feed
    public function createfeed(Request $request, $id){
    
        
        $googlefeed = new Googlefeed;


        if($request->input('channel') =='google'){
            $request->validate([
                'channel'=>'required'
            ]);
            

           
            $googlefeed->channel=$request->input('channel');

            $googlefeed->save();

            return $googlefeed->toJson();

        }else{
            return back()->withInput();
        }

     
       

    }

        //method to add product
    public function addproduct(Request $request,$id){

        $product=new Product;
       // $course->programme_id=Programme::where('name','=',$request->input('programme'))->first()->id;

        $product->shopifies_id=$id;
        $product->name=$request->input('name');
        $product->title=$request->input('title');
        $product->brand=$request->input('brand');
        $product->sales_price=$request->input('sales_price');
        $product->description=$request->input('description');
        $product->quantity=$request->input('quantity');

        $product->save();

            return $product->toJson();
    }
}
