<?php

namespace App\Http\Controllers;

use App\Models\Landlord;
use App\Models\Dailyupdate;
use Illuminate\Http\Request;
use Image;
use App\Http\Requests\LandlordRequest;
class LandlordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $landlord = Landlord::orderBy('id', 'desc')->get();
      
         return view('backend.landlord.index',['landlord'=>$landlord]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.landlord.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LandlordRequest $request)
    {
        //
        $landlord = Landlord::create($request->all());
       $landlord->update([
            'code' => 'PM' . '-' . '0' . $request->ward_no . '-'
            . $request->holding_no . '/'
            . $request->flat_no . '-'
            . $request->ownership
       ]);
       
        return redirect()->route('landlord.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function show(Landlord $landlord)
    {
        //
     
        return view('backend.landlord.show',[
            'landlord' => $landlord
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function edit(Landlord $landlord)
    {
        //
        return view('backend.landlord.edit',[
            'edit' => $landlord
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function update(LandlordRequest $request, Landlord $landlord)
    {
        //
        $landlord->update($request->all());
        return redirect()->route('landlord.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function destroy(Landlord $landlord)
    {
        //
        $landlord->delete();
        return redirect()->route('landlord.index')->with('status','Data deleted successfully!');
    }


    public function active($id){
        $landlord = Landlord::find($id);
        $landlord->status = 1;
        $landlord->save();
        return redirect()->route('landlord.index')->with('status','Data updated successfully!');
    }


    public function pending($id){
        $landlord = Landlord::find($id);
        $landlord->status = 0;
        $landlord->save();
        return redirect()->route('landlord.index')->with('status','Data updated successfully!');
    }

    public function dashboard(){
        return view('frontend.user_login');
    }

    public function login(Request $request){
        $id = $request->user_id;
        $landlord = Landlord::where('code', $id)->first();
       
        return view('backend.landlord.show', ['landlord' => $landlord]);
    }


    public function dailyupdateindex($id){
        $landlord = Landlord::where('id', $id)->first();
        $dailyupdate  = Dailyupdate::where('holding_no', $landlord->holding_no)->orderBy('id','desc')->get();
        return view('backend.dailyupdate.index', ['dailyupdate' => $dailyupdate]);
    }

    public function complain($id){
        $dailyupdate = Dailyupdate::find($id);
        $dailyupdate->complain = 1;
        $dailyupdate->save();
        return redirect()->back()->with('success', 'Complained generated successfully!');
    }
}
