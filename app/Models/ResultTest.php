<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultTest extends Model
{
    use HasFactory;

    protected $fillable = [
        'ident',
        'name_user',
        'email',
        'ResultadoFinal',
        'user_id'
    ];

    public function Users(){
        //Pertenece a muchos... Moledo Users
        return $this->belongsToMany(User::class);
    }


}
