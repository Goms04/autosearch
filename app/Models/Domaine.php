<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom_domaine',
        'date_creation',
        'date_expiration',
        'client_id'

    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
