<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_name',
        'address',
        'phone_number',
    ];

    public function products() {
        return $this->hasMany(Product::class,'supplier_id');
    }
}
