<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use Uuid;
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'email',

        'first_name',
        'last_name',
        'password',

        'business_name',
        'business_number',
        'business_address',
        'business_phone_code',
        'business_phone_number',
        'business_email',

        'contact_first_name',
        'contact_last_name',
        'contact_phone_code',
        'contact_phone_number',
        'contact_email',
    ];

    public function customerAccounts()
    {
        return $this->hasMany(CustomerAccount::class);
    }

    public function scopeEmail($query, $email)
    {
        return $query->where('email', $email);
    }
}
