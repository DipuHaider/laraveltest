<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Films;

class Films extends Model
{
    protected $fillable = [
        'name', 'description', 'release_date','rating', 'ticket_price', 'country','genre', 'photo',
    ];
}
