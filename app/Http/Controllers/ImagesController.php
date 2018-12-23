<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// include composer autoload
use Intervention\Image\Facades\Image;
use  App\gallery;



class ImagesController extends Controller
{
    //
    public function index(Request $request){

            $data=$request->file('image');
        foreach ($data as $item){
            $path = $item->store('slider');
            $image = Image::make('storage/'.$path)->resize(1200,800);
            $image->save('storage\slider\\'.$image->basename);
        }

     /*
        $path = $request->file('image')->store('slider');
        $image = Image::make('storage/'.$path)->resize(1200,800);
        $image->save('storage\slider\\'.$image->basename);
        return redirect('/');*/
     /*   $temp_name= $request->file('image')->getClientOriginalName();
        $request->file('image')->move('image/',$temp_name);*/

    }
    public function delete(Request $request){
            $name=$request->except('_token');
            foreach ($name as $data){
                Storage::delete($data);
            }
         return redirect('/admin');
    }

    public function getImage(){
       $files = Storage::files('slider');
       $gallery=gallery::all();
        return view('front-end.home',['data'=>$files,'galleries'=>$gallery]);
    }
    public function edit_slider(){
        $files = Storage::files('slider');
        return view('back-end.show-image',['data'=>$files]);
    }
}
