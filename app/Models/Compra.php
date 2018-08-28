<?php

namespace App\Models;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
     protected $fillable = [
        'name', 'cantidad', 'date_compra', 'date_render', 'client_id'
        ];


    public function clients()
	{
		return $this->belongsTo('App\Models\Client');
	}



	public function getDifAttribute(){
        
       $fecha1 = Carbon::parse($this->date_render)->day;  
      
       $fecha2 = Carbon::parse($this->date_compra)->day; 

      //$date1 = Carbon::createFromDate($this->date)->age;

      $resta= $fecha1-$fecha2;
      return $resta;        
    }



}
