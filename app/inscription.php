<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class inscription extends Model
{
    //
    use Notifiable;
    protected $fillable = [
        'nom', 'prenom', 'email','number','pack','montant','duree','status'
    ];
}
