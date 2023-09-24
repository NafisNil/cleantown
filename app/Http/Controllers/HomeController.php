<?php

namespace App\Http\Controllers;
use App\Models\Dailyupdate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()  {
        return view('backend.index');
    }

    public function complain_index(){
        $dailyupdate  = Dailyupdate::where('complain', 1)->orderBy('id','desc')->get();
        return view('backend.dailyupdate.complain', ['dailyupdate' => $dailyupdate]);
    }

        
    public function contact(){
        return view('frontend.contact');
    }
}
