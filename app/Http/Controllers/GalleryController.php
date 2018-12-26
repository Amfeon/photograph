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
        $text=$request->input('text');
        $gal=new gallery();
        $gal_id=$gal->createGallery($gallery,$title, $text);
        $img= new photoImage();
        $img->addImages($images,$gal_id);
        return redirect('\show-galleries');

    }
    public  function showGallery(){
        $gal = new gallery();
        $gallery=$gal->all();
        return view('back-end.show-galleries',["data"=>$gallery]);
    }
    public  function delete(Request $request){
        $id=$request->id;
        $img= new photoImage();
        $img->deleteImg($id);
        $gal = new gallery();
        $gal->deleteGallery($id);
        return redirect('/show-galleries');
    }
    public function editGallery(Request $request){
        $a=new gallery();
        $data=$a->getGallery($request->id);
        return view('back-end.edit-gallery');

    }
}
