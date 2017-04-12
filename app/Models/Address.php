<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Country;

class Address extends Model
{

    protected $table = 'address';

    /**
     * Get the parent customer model associated with this address.
     */
    public function customer()
    {
    	return $this->belongsTo(Customer::class);
    }

    /**
     * Get the country model associated with this address.
     */
    public function country()
    {
    	return $this->belongsTo(Country::class);
    }
}
