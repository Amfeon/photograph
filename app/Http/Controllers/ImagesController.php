<?php

namespace App\Http\Controllers;
use App\photoImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// include composer autoload
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use  App\gallery;



class ImagesController extends Controller
{
    //
    public function index(Request $request){
        $data=$request->file('image');
        foreach ($data as $item){
            $path = $item->store('slider');
            $image = Image::make('storage/'.$path)->resize(1200,800);
            $image->save('storage/slider/'.$image->basename);
        }
        return redirect('/admin');
    }
    public function delete(Request $request){
            $name=$request->except('_token');
            foreach ($name as $data){
                Storage::delete($data);
            }
         return redirect('/admin/slider/edit');
    }

    public function getImage(){
       $files = Storage::files('slider');
       $gallery=gallery::all();
        $options=DB::table('settings')->find(1);
        return view('front-end.home',['data'=>$files,'galleries'=>$gallery,'options'=>$options]);
    }
    public function edit_slider(){
        $files = Storage::files('slider');
        return view('back-end.show-image',['data'=>$files]);
    }
    public function deleteImageGallery(Request $request){
        $request=$request->except('_token');
        //foreach ($request as $data){
        $images=new photoImage();
        $images->deleteImgGallery($request);
          return redirect('/admin');
       // }

    }
}
