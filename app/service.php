<?php

namespace App;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model)
        {
            $model->custom_id = IdGenerator::generate(['table' => 'services','field'=>'custom_id','length' => 8, 'prefix' =>'TRS-']);
        });
    }
}
