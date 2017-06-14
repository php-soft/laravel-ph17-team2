<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class create_Shop_table extends Model
{
    protected $fillable = ['name','logo','address','description','user_id'];
    public function->user(){
      return $this->belongsTo('App\User');
}
