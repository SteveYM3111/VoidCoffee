<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table ='barang_table';
    protected $primarykey = 'id';
    protected $fillable = [
        'name',
        'qty',
        'price',
        'description',
        'picture',
        'status'
    ];
    
}
