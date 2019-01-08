<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\options;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function homeAdmin(){
        $options=DB::table('options')->find(1);
        return view('back-end.admin',['data'=>$options]);
    }
    public function optionsUpdate(Request $request){
        $a=new options();
        $a->optionsUpdate($request);
        return redirect('admin');
        
    }
}
