<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
   protected $fillable=[
      'user_id',
   'contract_name',
   'contract_client_name',
   'contrcat_status',
   'contract_reft_number',
   'contract_type',
   'introduced_to_ar',
   'introduced_to_en',
   'client_country',
  'agreement_date_ar',
  'agreement_date_en',
   'client_name_ar',
   'client_address_en',
   'client_address_ar',
   'duration',
   'duration_ar',
   'sign_second_party',
   'sign_second_party_mister',
  'contract_date_ar',
  'contract_date_en'
];


   public function workdomain_fees()
   {
       return $this->hasMany('App\Models\workdomain_fees');
}
}