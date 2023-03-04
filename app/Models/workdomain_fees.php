<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workdomain_fees extends Model
{
    //use HasFactory;
    protected $fillable=[
        'service_name_en',
        'service_name_ar',
        'service_cost_en',
        'service_cost_ar',
        'service_desc_en',
        'service_desc_ar',
       'id'
    ];

    public function contract()
    {
        return $this->belongsToMany('App\contract','contract_id' );
    }
}
 