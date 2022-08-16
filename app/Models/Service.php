<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function company(){
        return $this->hasOne('App\Models\Company',"id",'company_id');
    }

    public function images(){
        return $this->hasMany('App\Models\ServiceImage',"service_id");
    }
}
