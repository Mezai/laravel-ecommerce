<?php

namespace App\Models;

use App\ProductInterface;
use Illuminate\Database\Eloquent\Model;

class Category extends Model implements ProductInterface
{
    /**
   * Fields that are mass assignable
   * @author Mezai
   */
  protected $fillable = [
    'title', 'description', 'updated_at'
  ];

    public function getTitle()
    {
        return $this->title;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
