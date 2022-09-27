<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
     // указывает, какое поле в таблице будет первичным ключом
    protected $primaryKey='id';
    
    // указывает, что соответствует этому классу модели таблица 'videos';
    protected $table='Videos';
      // указывает, значения каких полей можно будет изменять в дальнейшем в коде.
    protected $fillable=['Userid','videoPath','nameVideo','sizeVideo','formatVideo','GenTimeVi','created_at','updated_at'];
}
