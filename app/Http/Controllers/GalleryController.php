<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
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
        /*/*-*/
        foreach ($images as $image){
            $img= new photoImage();
            $img->addImages($image,$gal_id);
        }
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
        $b= new photoImage();
        $images=$b->getImages($request->id);
        return view('back-end.edit-gallery',['data'=>$data,'images'=>$images]);
    }
    public function storeUpdate(Request $request){
        $data=$request->file('image'); // images file
        $gallery= new gallery();
        $gallery->updateGallery($request);
        foreach ($data as $image){
            $img= new photoImage();
            $img->addImages($image,$request->id);
        }
        return redirect('/show-galleries');
    }
    public function ajaxLoad(Request $request){
        $file=$request->file();
        $file=$file[0];
        $gallery=new gallery();
        $path=$gallery-> addAjaxThumnail($file);
        return response()->json([
            'path'=>$path
        ]);
    }
    public function photoSession ($id){
        $gal = new gallery();
        $gallery=$gal->find($id);
        $img=new photoImage();
        $images= $img->getImages($id);
        if(empty($gallery)){
            return abort(404);
        }else{
            return view('front-end.photoSession',['gallery'=>$gallery, 'images'=>$images]);
        }

}
}
