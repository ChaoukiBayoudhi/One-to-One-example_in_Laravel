<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable=[
        'street',
        'house_number',
        'province',
        'postal_code',
        'user_id'
    ];
    /**Get the user that have the Address */
    public function user()
    {
        //belongsTo() method is implementing inverse relationship
        //of one to one relationship in laravel.
        return $this->belongsTo(User::class);
    }
}
