<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buy extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
     protected $table = 'buy';
     
          /**
          * The attributes that are mass assignable.
          *
          * @var array
          */
         protected $fillable = [
            'id', 'id_user', 'type', 'sub_type', 'gender', 'time', 'volume', 'price', 'name', 'desc'
         ];
}