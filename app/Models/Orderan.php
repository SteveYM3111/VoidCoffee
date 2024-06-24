<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderan extends Model
{
    use HasFactory;

    protected $table ='orderan';
    protected $primarykey = 'id_orderan';
    protected $fillable = [
        'id_user',
        'id_barang',
        'name',
        'email',
        'whatsapp',
        'picture',

    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function barang(): BelongsTo
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }

}
