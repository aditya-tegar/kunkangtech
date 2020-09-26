<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';

    protected $fillable = [
        'nama_customer', 'no_telepon', 'alamat', 'email'
    ];

    public function order()
    {
        return $this->hasMany('App\Order');
    }
}
