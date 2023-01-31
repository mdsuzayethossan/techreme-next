<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
    public function owner()
    {
        return $this->belongsTo(User::class,'owner_name','name');
    }

    public function product()
    {
        return $this->belongsTo(product::class,'product_name','name');
    }

    public function service()
    {
        return $this->belongsTo(service::class,'service_name','name');
    }
}
