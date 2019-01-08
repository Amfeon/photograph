<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class options extends Model
{
    protected $table = 'options';
    public $timestamps = false;

    
    public function optionsUpdate($data){
        $temp=$this->find(1);
        $temp->title =$data->title;
        $temp->text = $data->text;
        $this->save();
    }
}
