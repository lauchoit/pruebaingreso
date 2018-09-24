<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $table 		= 'carros';
    protected $primaryKey 	= 'id';
    protected $fillable 	= [
    	'marca', 'modelo' , 'placa' , 'user_id'
    ];

    /**
     *
     * relation in table Carros
     * @return object type table relation
     *
     */
    
    public function r_user()
      {
        return $this->belongsTo('App\User', 'user_id', 'id');
      }
    public function r_choferes()
      {
        return $this->hasMany('App\Choferes', 'carro_id', 'id');
      }

}
