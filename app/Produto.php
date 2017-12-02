<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Produto extends Model {

    protected $fillable = ['CDPRODUTO','NMPRODUTO'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'produtos';

}
