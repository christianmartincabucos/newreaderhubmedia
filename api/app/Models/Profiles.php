<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    protected $table = 'profiles';
    protected $primaryKey = 'profile_id';
    protected $fillable = ['firstname', 'lastname', 'middlename', 'lastname', 'extensionname', 'artist_type','birthdate', 'fk_gender_type', 'mobile_no', 'email', 'table_status_id'];

}
