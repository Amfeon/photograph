<?php

namespace App;

//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class gallery extends Model
{
    protected $table = 'galleries';
    public $timestamps = false;

    public function createGallery($request,$title, $text){
            $name= $request->getClientOriginalName();
            $path = $request->storeAs('thumbnail','thumnail_'.$name);
            $image = Image::make('storage/'.$path)->resize(400,265);
            $image->save('storage\thumbnail\\'.$image->basename);
        $this->title=$title;
        $this->thumnail=$path;
        $this->text=$text;
        $this->save();
        return $this->id;
    }
    public function deleteGallery($id)
    {
        $this->destroy($id);
    }
    public function getGallery($id){
       return $this->find($id);
    }
    public function updateGallery(Request $request){
       $temp= $this->getGallery($request->id);
       $temp->title=$request->title;
       $temp->text=$request->text;
       $temp->save();
    }
    public function addAjaxThumnail($request){
        $name= $request->getClientOriginalName();
        $path = $request->storeAs('thumbnail','thumnail_'.$name);
        $image = Image::make('storage/'.$path)->resize(400,265);
        $image->save('storage\thumbnail\\'.$image->basename);
        return $path;
    }

}
