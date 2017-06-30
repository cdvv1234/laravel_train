<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class download extends Model
{
    //
    protected $table='download';
    protected $fillable = [
      'title',
      'filename',
    ];
}
