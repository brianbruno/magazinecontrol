<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {

    protected $fillable = ['CDPRODUTO','NMPRODUTO'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'produtos';

}
