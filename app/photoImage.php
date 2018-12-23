<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class photoImage extends Model
{
    protected $table = 'images';
    public $timestamps = false;
    public function addImages($data,$id){
        foreach ($data as $image){
            $path = $image->store('photo');
            $img = Image::make('storage/'.$path)->resize(1280,720);
            $img->save('storage\photo\\'.$img->basename);
            $this->sourse=$path;
            $this->gallery_id=$id;
            $this->save();
        }
    }
}
