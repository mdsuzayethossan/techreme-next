<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class product extends Model
{
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model)
        {
            $model->custom_id = IdGenerator::generate(['table' => 'products','field'=>'custom_id','length' => 8, 'prefix' =>'TRS-']);
        });
    }
}
