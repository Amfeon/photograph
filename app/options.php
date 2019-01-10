<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class options extends Model
{
    protected $table = 'settings';
    public $timestamps = false;

    public function optionsUpdate($request){
        $temp=$this->find(1);
        $temp->title=$request->title;
        $temp->text= $request->text;
        $temp->save();
    }
}
