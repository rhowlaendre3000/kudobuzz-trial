<?php

namespace App\Http\Controllers;
use App\Googlefeed;
use App\Shopify;
use Illuminate\Http\Request;

class feedsController extends Controller
{
    //

    public function index(){

        $feeds=Googlefeed::all();

        return view('feeds', compact('feeds'));
    

    }

    public function show($id){
      $feeds = Googlefeed::find($id);
        
       return response()->download(public_path('uploads/'.$id));
    }

 
       
      
    
}
