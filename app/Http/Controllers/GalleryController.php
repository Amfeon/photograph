<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\gallery;
use  App\photoImage;
class GalleryController extends Controller
{
    //
    public function create(Request $request){
        $images=$request->file('image');
        $gallery=$request->file('gallery');
        $title=$request->input('title');
        $gal=new gallery();
//        $gal_id=$gal->createGallery($gallery,$title);
        $gal_id=1;
        $img= new photoImage();
        $img->addImages($images,$gal_id);
    }
    public  function editGallery(){
        $gal = new gallery();
        $gallery=$gal->all();
        return view('back-end.show-galleries',["data"=>$gallery]);
    }
}
