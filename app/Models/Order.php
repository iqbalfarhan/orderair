<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'status',
        'photo',
    ];

    public function getStatusAliasAttribute()
    {
        if ($this->status == 'queue')
            return 'Masih menunggu di antrian';
        if ($this->status == 'progress')
            return 'Dalam proses dan pengiriman';
        if ($this->status == 'done')
            return 'Selesai';
    }

    public function getStatusColorAttribute()
    {
        if ($this->status == 'queue')
            return 'ghost';
        if ($this->status == 'progress')
            return 'success';
        if ($this->status == 'done')
            return 'primary';
    }

    public function getImageUrlAtrtAttribute(){
        return $this->photo ? Storage::url($this->photo) : url('/noimage.jpg');
    }
}
