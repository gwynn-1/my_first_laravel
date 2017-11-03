<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class foodsModel extends Model
{
    //
    protected $table = "foods";
    public $timestamps = true;

    public function getFoodsToday(){
        return $this->where('today',1)->get();
    }

    public function getAllFoods(){
        return $this->all();
    }
}
