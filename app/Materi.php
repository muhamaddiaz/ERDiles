<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    //

    protected $fillable = [
        'link', 'judul'
    ];

    public function user() {
        return $this->hasOne(User::class);
    }

}
