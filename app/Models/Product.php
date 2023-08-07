<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded;

    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class);
    }
    public function category()
    {
        return $this->sub_category->belongsTo(Category::class);
    }
    public function brand()
    {
<<<<<<< HEAD
        return $this->belongsTo(Brand::class);
    }
=======
        return $this->belongsTo(Brands::class);
    }

>>>>>>> 55d43e69aab00fe0d6f8bca32191066f5fe15706
}
