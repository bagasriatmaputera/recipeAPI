<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecipeTutorial extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'recipe_id'
    ];

    public function recipe (){
        return $this->belongsTo(Recipe::class,'recipe_id');
    }
}
