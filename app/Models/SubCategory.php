<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'priority', 'category_id',

    ];
<<<<<<< HEAD
    public function category(){
=======

    public function category()
    {
>>>>>>> 55d43e69aab00fe0d6f8bca32191066f5fe15706
        return $this->belongsTo(Category::class);
    }
}
