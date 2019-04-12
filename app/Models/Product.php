<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /**
     * @var string
     */
    protected $table = 'products';
    /**
     * @var array
     */
    protected $fillable = [
        'image_id',
        'category',
        'title',
        'description',
        'price',
        'color',
        'status',
        'stock',
    ];

    public function withImage()
    {
        return $this->hasMany(Image::class, 'id', 'image_id');
    }

    public function productInfo($category = null)
    {
        if ($category !== null) {
            $category = str_replace('-', ' ', $category);
            return $this->where('category', $category)->with('withImage');
        }

        return $this->whereNotNull('title')->with('withImage');
    }

    public function productById($id)
    {
        return $this->where('id', $id)->with('withImage')->get();
    }
}
