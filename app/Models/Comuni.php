<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comuni extends Model
{
    use HasFactory;

    protected $fillable =[

        'name','description','img','user_id',
    ];

    // un comune è legato ad un solo utente
    public function user(){

        return $this->belongsTo(User::class);
    }
}
