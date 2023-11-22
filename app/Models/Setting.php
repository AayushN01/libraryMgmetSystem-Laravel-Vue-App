<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = "settings";

    protected $fillable = [
        'website_name',
        'description',
        'contact_1',
        'contact_2',
        'email',
        'po_box',
        'url',
        'facebook',
        'instagram',
        'twitter',
        'linkedin',
        'google_plus',
        'youtube',
        'tiktok',
        'google_map',
        'logo',
        'favicon',

    ];
}
