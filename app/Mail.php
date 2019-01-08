<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $table = 'mails';
    public $timestamps = false;
    public function create($request){
        $this->name=$request->name;
        $this->phone=$request->phone;
        $this->save();
    }
    public function getMail(){
        return $this->all();
    }
    public function deleteMail($id){
        $this->destroy($id);
    }
}
