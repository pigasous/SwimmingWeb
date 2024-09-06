<?php

namespace App;

use App\Models\Entraineur;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Groupe extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'nom',
        'categorie',

    ];

}
