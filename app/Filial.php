<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Filial extends Model {

    protected $fillable = ['CDFILIAL','NMFILIAL'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'filial';

}
