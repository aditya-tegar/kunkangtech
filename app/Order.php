<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    protected $fillable = [
        'nama_customer', 'no_po', 'tanggal_masuk', 'etd_date', 'qty_barang', 'harga_barang', 'unit_barang'
    ];

    public function barang()
    {
        return $this->belongsTo('App\Barang');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

}
