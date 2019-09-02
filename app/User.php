<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table='users';
    protected $id='id';

    //elementos que se pueden rellenar 

    protected $fillable = ['username','lastname','lastname2','age'];

    public function address()
    {
        return $this->hasMany('App\Address');
    }


}
