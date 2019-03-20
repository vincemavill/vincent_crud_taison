<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Redirect;
use Illuminate\Http\Request;
use App\product_model;
use App\cart_model;
use App\Mail\vince_mail;
use App\Order;

use Illuminate\Support\Facades\Mail;



class product_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = product_model::all();

        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $length = 4;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }


        $data = array(
            'name' => $request->input("name"), 
            'price' => $request->input("price"), 
            'quantity' => $request->input("quantity"), 
            'size' => $request->input("size"), 
            'uniquecode' => $randomString, 
            'api_token' => str_random(60), 

        );
    
        product_model::new_product($data);

        return redirect()->action('home_controller@index');


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array(
            'name' => $request->input("name"), 
            'price' => $request->input("price"), 
            'quantity' => $request->input("quantity"), 
            'size' => $request->input("size"), 

        );

        product_model::update_product($data, $id);

        return redirect()->action('home_controller@index');
    }
    
    public function store_cart(Request $request, $id)
    {
        $data = array(
            'quantity' => $request->input("quantity"), 
            'product_id' => $id, 

        );
        product_model::add_cart($data);

        $result = product_model::findOrFail($id);

        $result = json_decode($result);


        // Mail::to('vincemavill@gmail.com')->send(new vince_mail($request));

        $total = $request->input("quantity") * $result->price;

        Mail::send('themail', ['name' => $result->name ,'quantity' =>  $request->input("quantity"), 'size' => $result->size , 'total' => $total], function ($message)
        {

            $message->from('vince_dontreply@crud.com', 'Vincent CRUD');

            $message->to('vincemavill@gmail.com');
            $message->subject('Vincent CRUD');

        });

 
 
        
        return redirect()->action('home_controller@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = product_model::findOrFail($id);

        $data->delete();

        return redirect()->action('home_controller@index');
    }
}
