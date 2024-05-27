<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserData extends Model
{
    use HasFactory, Uuid;

    public $incrementing = false;
    
    protected $table = 'users_datas';
    protected $keyType = 'string';
    protected $guarded = [];

    public function userAdmin()
    {
        return $this->belongsTo(UserAdmin::class);
    }

    public function userCustomer()
    {
        return $this->belongsTo(UserCustomer::class);
    }

}
