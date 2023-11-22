<?php

namespace App\Models\Config;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Roles;

class Permission extends Model
{
    use HasFactory;
    protected $table = "permissions";

    protected $fillable = ['name','guard_name','group_name','created_at','updated_at'];
    protected $guard = 'web';

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_has_permissions');
    }
}
