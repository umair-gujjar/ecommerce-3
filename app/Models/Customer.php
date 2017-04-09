<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';

    /**
     * Get the user model assoicated with this customer.
     */
    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}
