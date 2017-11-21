<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choferes extends Model
{
    protected $table 		= 'choferes';
    protected $primaryKey 	= 'id';
    protected $fillable 	= [
    	'id', 'user_id' , 'carro_id'
    ];

    /**
     *
     * relation of tables
     * @return object of table the relation
     *
     */
    
    public function r_user()
      {
        return $this->belongsTo('App\User', 'user_id', 'id');
      }
    public function r_carro()
      {
        return $this->belongsTo('App\Carro', 'carro_id', 'id');
      }
}
