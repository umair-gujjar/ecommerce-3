<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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
}
