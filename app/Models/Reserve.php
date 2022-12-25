<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    protected $fillable = ['description','number','norification_type','reserve_time','type','status','part'];

    public $timestamps = false;


    public function User()
    {
        return $this->belongsTo(User::class);
    }

}
