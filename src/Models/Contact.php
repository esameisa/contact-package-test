<?php

namespace Esameisa\Contact\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * you should use either 
     * $fillable or $guarded 
     * - not both.
     */

    protected $fillable = ['name', 'email', 'message'];

    // protected $guarded = ['email'];
}
