<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    
	public function user()
	{
		return $this->belongsTo('App\Models\User');
	}
    public function getId()
    {
    	return $this->id;
    }

    public function getTotalPaid()
    {
    	return $this->total_paid;
    }

    public function getValid()
    {
	  	return $this->valid;
    }

    public function getPayment()
    {
    	return $this->payment;
    }
}
