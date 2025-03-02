<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPost extends Model
{
    protected $table = "product_of_post";
    protected $fillable  = ['product_id', 'post_id', 'quantily'];
    public $timestamps = false;

    public function products(){
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }

}
