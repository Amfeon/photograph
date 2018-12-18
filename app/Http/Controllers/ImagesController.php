<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// include composer autoload
use Intervention\Image\Facades\Image;




class ImagesController extends Controller
{
    //
    public function index(Request $request){
        $path = $request->file('image')->store('slider');
        $image = Image::make('storage/'.$path)->resize(1200,800);
        $image->save('storage\slider\\'.$image->basename);
        return redirect('/');
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
        return view('front-end.home',['data'=>$files]);
    }
}
