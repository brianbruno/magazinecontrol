<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model {

    protected $fillable = ['CDFILIAL','CDCLIENTE', 'CDVENDA', 'TOTALVENDA'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'vendas';

}
