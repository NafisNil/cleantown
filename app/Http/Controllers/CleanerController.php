<?php

namespace App\Http\Controllers;

use App\Models\Cleaner;
use Illuminate\Http\Request;
use App\Http\Requests\CleanerRequest;
class CleanerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cleaner = Cleaner::orderBy('id', 'desc')->get();
      
         return view('backend.cleaner.index',['cleaner'=>$cleaner]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.cleaner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CleanerRequest $request)
    {
        //
        $cleaner = Cleaner::create($request->all());
     
         return redirect()->route('cleaner.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cleaner  $cleaner
     * @return \Illuminate\Http\Response
     */
    public function show(Cleaner $cleaner)
    {
        //
        return view('backend.cleaner.show',[
            'cleaner' => $cleaner
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cleaner  $cleaner
     * @return \Illuminate\Http\Response
     */
    public function edit(Cleaner $cleaner)
    {
        //
        return view('backend.cleaner.edit',[
            'edit' => $cleaner
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cleaner  $cleaner
     * @return \Illuminate\Http\Response
     */
    public function update(CleanerRequest $request, Cleaner $cleaner)
    {
        //
        $cleaner->update($request->all());
        return redirect()->route('cleaner.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cleaner  $cleaner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cleaner $cleaner)
    {
        //
        $cleaner->delete();
        return redirect()->route('cleaner.index')->with('status','Data deleted successfully!');
    }
}
