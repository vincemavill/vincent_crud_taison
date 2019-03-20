<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Http\Controllers\Redirect;

class product_model extends Model
{
    protected $table = "product_tbl";

    static function new_product($data){

        DB::table('product_tbl')->insert($data);

    }

    
    static function update_product($data, $id){

        DB::table('product_tbl')->where('id',$id)->update($data);

    }

    static function add_cart($data){
        DB::table('cart_tbl')->insert($data);
    }

}
