<?php

namespace App;

use App\ProductInterface;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements ProductInterface
{
    /**
     * Fields that are mass assignable
     * @author Mezai
     */
    protected $fillable = [
      'title', 'description', 'price', 'active', 'updated_at'
    ];

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getReference()
    {
        return $this->reference;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getId()
    {
        return $this->id;
    }

    public function images()
    {
        return $this->belongsTo('App\ProductImage');
    }
}
