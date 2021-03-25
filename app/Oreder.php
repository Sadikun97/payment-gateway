<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oreder extends Model
{
    protected $fillable = [ 'name','email','phone','amount','address','status','transaction_id','currency' ]; 
}
