<?php

namespace App;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class gallery extends Model
{
    protected $table = 'galleries';
    public $timestamps = false;
    public function createGallery($request,$title){

      //  foreach ($request as $item){
            $name= $request->getClientOriginalName();
            $path = $request->storeAs('thumbnail','thumnail_'.$name);
            $image = Image::make('storage/'.$path)->resize(400,265);
            $image->save('storage\thumbnail\\'.$image->basename);

       // }
        $this->title=$title;
        $this->thumnail=$path;
        $this->save();
        return $this->id;
    }
    public function deleteGallery($id)
    {
        $this->destroy($id);
    }
}
