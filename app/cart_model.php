<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class cart_model extends Model
{
    protected $table = "cart_tbl";

    static function cart_list(){
        // DB::table('product_tbl')->where('id',$id)->update($data);

        $cart = DB::table('product_tbl')
            ->join('cart_tbl', 'product_tbl.id', '=', 'cart_tbl.product_id')
            ->select('cart_tbl.*', 'product_tbl.name', 'product_tbl.price')
            ->get();

        return $cart;
    }
}
