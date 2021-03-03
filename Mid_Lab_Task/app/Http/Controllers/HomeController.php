<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Physical_store_Channel;
use App\Http\Requests\ProductRequest;

class HomeController extends Controller
{
    //
    public function index(Request $req){
        
            if($req->session()->has('name')){
            return view('home.index', compact('name'));
            } else{
               $req->session()->flash('msg','Invalid user log in first.....');
               echo "somthing wrong";
               //return redirect('/login');
            }                            
    }

    public function create(){

        return  view('home.create');
    }

    public function store(ProductRequest $requ){
        //inset into dab or model
        $physical_store = new Physical_Store_Channel();

        $physical_store->customer_name  =  $requ->customer_name;
        $physical_store->address  =  $requ->address;
        $physical_store->phone      =  $requ->phone;
        $physical_store->product_id       =  $requ->product_id;
        $physical_store->product_name     =  $requ->product_name;
        $physical_store->unit_price   =  $requ->unit_price;
        $physical_store->quantity     =  $requ->quantity;
        $physical_store->total_price      =  $requ->total_price;
        $physical_store->date_sold   =  $requ->current_date;
        $physical_store->payment_type   =  $requ->payment_type;
        $physical_store->status   =  $requ->status;

        $physical_store->save();


        return  redirect('/home/userlist');
       // echo $requ->username;
    }

    public function edit($id){
        //inset into db or model
        //return  redirect('/home/userlist');
        $product = Physical_Store_Channel()::find($id);

        return  view('home.edit')->with('product',$product);
    }

    public function update($id, Request $requ){
        //update into db or model
        $product =  Physical_Store_Channel()::find($id);
        
        $product->ProductName  =  $requ->username;
       // $product->Password   =  $requ->password;
        $product->Price      =  $requ->price;
        $product->Type       =  $requ->productType;
        $product->Status     =  $requ->status;
        $product->Quantity   =  $requ->quantity;
        $product->Review     =  $requ->review;
        $product->Offer      =  $requ->offer;
        $product->SellerId   =  $requ->sId;

        $product->save();


    
         return  redirect('/home/userlist');
        //return  view('home.list')->with('userlist',$update);
         //return  view('home.edit')->with('id',$id);
    }

    public function delete($id, Request $requ){
        //delete from db or model
        $product = Physical_Store_Channel::find($id);
        //print_r($product);
       return  view('home.delete')->with('product',$product);
    }

    public function destroy($id, Request $requ){
        
        if(Physical_Store_Channel::destroy($id))
        {
            return redirect('/home/userlist');
        }else{
            return redirect('/home/delete'.$id);        
        }
    }

    public function show($id){
        $product = Physical_Store_Channel::find($id);

       // echo $id;
        //print_r($product);
        return view('home.details')->with('product',$product);
    }

    public function userlist(){
        // echo "Welcome Home";
       $product = Physical_Store_Channel::all();
      // $product = $this->getUserlist();
       return  view('home.list')->with('product',$product);
     }


}
