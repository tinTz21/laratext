<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Crude;
class Task extends Model
{
    protected $fillable=['completed','crude_id','task'];

    public function crudes(){
    	return $this->belongsTo(Crude::class);
    }

    public function complete($completed=true){
    	$this->update(['completed'=>true]);
    }
}
