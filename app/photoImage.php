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
        //foreach ($data as $image){
            $path = $data->store('photo');
            $img = Image::make('storage/'.$path)->resize(1280,854);
            $img->save('storage/photo/'.$img->basename);
            //$this->insert(array('sourse'=>$path,'gallery_id'=>$id));
            $this->sourse=$path;
            $this->gallery_id=$id;
            $this->save();
      //  }
    }
    public function addImageToBase($path,$id){

    }
    public  function deleteImg($id){
        $images=$this->where('gallery_id',$id)->get();
        foreach ($images as $image){
            Storage::delete($image->sourse);
            $this->destroy($image->id);
        }
    }
    public function getImages($id){
        return $this->where('gallery_id',$id)->get();
    }
}
