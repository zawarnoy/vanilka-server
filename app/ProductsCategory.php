<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ProductsCategory extends Model
{

    public function galleryItems()
    {
        return $this->hasMany('App\Category', 'product_category_id');
    }

}
