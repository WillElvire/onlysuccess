<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class investissement extends Model
{
    //
    protected $fillable=['user_id','pack','montant','duree','payDay','received','created_at'];
    protected $dates=['payDay','created_at'];
}
