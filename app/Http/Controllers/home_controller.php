<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product_model;
use App\cart_model;

class home_controller extends Controller
{
    public function index()
    {

        $data = product_model::all();

        $data = json_decode($data);

        return view('index', compact('data'));


    }

    public function add()
    {
        return view('add');
    }

    public function edit($id)
    {   
    
        $data = product_model::findOrFail($id);

        $data = json_decode($data);


        return view('edit',compact('data'));
    }


    public function cart()
    {   
    
        $data = cart_model::cart_list();

        $data = json_decode($data);

        return view('cart_list',compact('data'));
    }

    public function get_cart($id)
    {   
    
        $data = product_model::findOrFail($id);

        $data = json_decode($data);


        return view('cart',compact('data'));
    }
}
