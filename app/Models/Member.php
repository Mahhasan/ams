<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'number',
        'status',
        'date',
        'designation',
        'department',
        'organization_name',
        'business_type',
        'registration_number',
        'org_email',
        'org_address',
        'affiliation',
        'country',
        'membership_category',
        'membership_price',
        

    ];
}
