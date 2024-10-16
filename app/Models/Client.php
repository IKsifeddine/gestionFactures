<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function factures(){
        return $this->hasMany(Facture::class);
    }
    protected $fillable=['nom','email'];
}
