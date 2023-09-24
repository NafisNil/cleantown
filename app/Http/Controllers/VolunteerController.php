<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use App\Models\Dailyupdate;
use App\Models\User;
use App\Models\Landlord;
use Illuminate\Http\Request;
use App\Http\Requests\VolunteerRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $volunteer = Volunteer::orderBy('id','desc')->get();
        return view('backend.volunteer.index', ['volunteer' => $volunteer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VolunteerRequest $request)
    {
        //
        $volunteer = Volunteer::create($request->all());
        $uniqueCode = 'PMV' . '-' . '0' . $request->word_no . '-' . $request->holding_no;
        $volunteer->update([
            'volunteer_id' => $uniqueCode
       ]);
        return redirect()->back()->with('success','Application submitted successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function show(Volunteer $volunteer)
    {
        //
        return view('backend.volunteer.show',[
            'volunteer' => $volunteer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function edit(Volunteer $volunteer)
    {
        //
        return view('backend.volunteer.edit',[
            'edit' => $volunteer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function update(VolunteerRequest $request, Volunteer $volunteer)
    {
        //
       $volunteer->update($request->all());
        return redirect()->route('volunteer_profile')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volunteer $volunteer)
    {
        //
    }


    public function active($id){
        $volunteer = Volunteer::find($id);
        $user = new User;
        $user->name = $volunteer->name_en;
        $user->phone = $volunteer->phone;
        $user->email = $volunteer->email;
        $user->role ="volunteer";
        $user->user_id = $volunteer->volunteer_id;
        $user->password = Hash::make($volunteer->volunteer_id);

        $volunteer->status = 1;
        $volunteer->save();
        $user->save();
        return redirect()->route('volunteer.index')->with('status','Data updated successfully!');
    }


    public function pending($id){
        $volunteer = Volunteer::find($id);

        $volunteer->status = 0;
        $volunteer->save();
        return redirect()->route('volunteer.index')->with('status','Data updated successfully!');
    }

    //for volunteer
    public function volunteer_profile(){
        $volunteer = Volunteer::where('id', Auth::user()->id)->first();
        return view('backend.volunteer.volunteer_profile', ['volunteer' => $volunteer]);
    }

    public function dailyupdateindex(){
            $dailyupdate  = Dailyupdate::where('volunteer_id', Auth::user()->user_id)->orderBy('id','desc')->get();
            return view('backend.dailyupdate.index', ['dailyupdate' => $dailyupdate]);
    }

    public function get_holding(Request $request){
        $query = $request->input('query');
        $holdingNumbers = Landlord::where('holding_no', 'like', '%' . $query . '%')->pluck('holding_no');

        return response()->json($holdingNumbers);
    }

    public function complain_index_volunteer(){
        $dailyupdate  = Dailyupdate::where('complain', 1)->where('volunteer_id', Auth::user()->user_id)->orderBy('id','desc')->get();
        return view('backend.dailyupdate.complain', ['dailyupdate' => $dailyupdate]);
    }
    
}
