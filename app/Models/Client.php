<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Client extends Model
{
     protected $fillable = [
        'name', 'photo', 'phone', 'nacimiento'
        ];


    public function compras()
	{
		return $this->hasMany('App\Models\Compra');
	}


	public function setPhotoAttribute($photo){
		$this->attributes['photo'] = Carbon::now()->second.$photo->getClientOriginalName();
		$name = Carbon::now()->second.$photo->getClientOriginalName();
		\Storage::disk('local')->put($name, \File::get($photo));
	}

	public function getnacAttribute(){
        
       $fechaa = Carbon::parse($this->nacimiento)->age;  
      
       $fecha2 = Carbon::now()->age;

      //$date1 = Carbon::createFromDate($this->date)->age;

      $resta= $fechaa-$fecha2;
      return $resta;        
    }


}
