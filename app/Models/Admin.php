<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Model
{
    use HasRoles;

    protected $guarded = [];
    protected $guard_name = 'admin'; // Important
}
