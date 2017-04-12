<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Address;

class Customer extends Model
{
    protected $table = 'customer';

    /**
     * Get the user model associated with this customer.
     */
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    /**
     * Get the address models owned by this customer.
     */
    public function addresses()
    {
    	return $this->hasMany(Address::class);
    }
}
