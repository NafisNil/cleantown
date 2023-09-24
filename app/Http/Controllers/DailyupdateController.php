<?php

namespace App\Http\Controllers;

use App\Models\Dailyupdate;
use App\Models\Landlord;
use Illuminate\Http\Request;
use Image;
use App\Http\Requests\DailyupdateRequest;
class DailyupdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dailyupdate  = Dailyupdate::orderBy('id','desc')->get();
            return view('backend.dailyupdate.index', ['dailyupdate' => $dailyupdate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $landlord  = Landlord::all();
        return view('backend.dailyupdate.create', ['landlord' => $landlord]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DailyupdateRequest $request)
    {
        //
        $dailyupdate = Dailyupdate::create($request->all());
       
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $dailyupdate);
        }
        return redirect()->route('dailyupdatevolunteer.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dailyupdate  $dailyupdate
     * @return \Illuminate\Http\Response
     */
    public function show(Dailyupdate $dailyupdate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dailyupdate  $dailyupdate
     * @return \Illuminate\Http\Response
     */
    public function edit(Dailyupdate $dailyupdate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dailyupdate  $dailyupdate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dailyupdate $dailyupdate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dailyupdate  $dailyupdate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dailyupdate $dailyupdate)
    {
        //
    }

    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/' . $filename);
            $about->logo = $filename;
            $about->save();
        }
       
    }
}
