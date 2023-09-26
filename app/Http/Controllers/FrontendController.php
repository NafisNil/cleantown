<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dailyupdate;
class FrontendController extends Controller
{
    //

    public  function index(){
        $dailyupdate = Dailyupdate::orderBy('id','desc')->get();
        return view('frontend.index', ['dailyupdate' => $dailyupdate]);
    }

    public function volunteer_apply(){
        return view('frontend.apply-volunteer');
    }
}
