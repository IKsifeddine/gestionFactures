<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    protected $fillable=['client_id','description','montant'];
}
