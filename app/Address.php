<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $table ='address';
    protected $id = 'id';

    protected $fillable = ['street','colony','delegation','postalcode','users_id'];

    


    
}
