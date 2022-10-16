<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // public function empl(){
    //     return $this->hasMany(Comapny::class,'companies_id','id');
    // }
    public function company(){
        return $this->hasOne(Company::class,'id','companies_id');
    }
}
