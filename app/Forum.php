<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable = [
        'judul', 'deskripsi'
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
