<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   
    //1. Property
    use HasFactory;
    protected $fillable = [
        'category_name', 'category_desc'
    ];

    //2. Constructor

    //3. method
    public static function getCategory(){
        
        //Query BUilder
        $data = DB::table('categories')->get(); // All records
    

        return $data;
    }

    public static function storeCategory($data){ //formal argument
       // echo 'Model DD';
       // echo $data['cat_name'];
       // echo $data['cat_desc'];
        //dd($data);

        DB::table('categories')->insert([
            'category_name' => $data['cat_name'],
            'category_desc' => $data['cat_desc']
        ]);
    }

    public static function updateCategory($data){ //formal argument
        // echo 'Model DD';
        // echo $data['cat_name'];
        // echo $data['cat_desc'];
         //dd($data);
        DB::table('categories')
         ->where('id', $data['id'])
         ->update([
            'category_name' => $data['cat_name'],
            'category_desc' => $data['cat_desc']
        ]);
     }

}
