<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public static function getSizeList(){
    	$source = \App\Size::lists('size', 'id');
    	return $source;
    }

    public static function getSizeNameByID($id){
    	$source = \App\Size::find($id);
    	return $source->size;
    }
}
