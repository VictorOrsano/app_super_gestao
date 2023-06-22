<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Site_Contato
//Site_contato
//Site_contatos

class SiteContato extends Model
{
    protected $fillable = ['nome','telefone','email','motivo_contatos_id', 'mensagem'];
}


