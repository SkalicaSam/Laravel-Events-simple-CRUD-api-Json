<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $fillable = ['city', 'city_postcode','street','house_number','status','delivery_text','customer_id','order_id','created_at','updated_at'];
    

}
