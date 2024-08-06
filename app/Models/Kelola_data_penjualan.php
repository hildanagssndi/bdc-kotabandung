<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelola_data_penjualan extends Model
{
    use HasFactory;

    protected $table = 'kelola_data_penjualans';
    protected $fillable = [
        'date_sale',
        'kelola_data_ksm_id',
        'sale',
        'profit',
        'loss',
    ];

    public function ksm()
    {
        return $this->belongsTo(Kelola_data_ksm::class, 'kelola_data_ksm_id');
    }
}
