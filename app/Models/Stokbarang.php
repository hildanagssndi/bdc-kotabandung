<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;
use App\Models\User;

class Stokbarang extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'category_id', 'seller_id', 'name', 'stock', 'price', 'description'];

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }
}
