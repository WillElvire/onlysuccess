<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
class administrateur extends Model
{
    //

    use Notifiable;

    protected $fillable=['nom','prenom','email','password'];
}
