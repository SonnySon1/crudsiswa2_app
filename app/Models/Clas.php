<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
    // nama tabel
    protected $table =  "clases";

    // fillabel | guarded
    protected $guarded = [];    

    // relasi
    public function user(){
        return $this->hasMany(User::class, 'clas_id');
    }
}
