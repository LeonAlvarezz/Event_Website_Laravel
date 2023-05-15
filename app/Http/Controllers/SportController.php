<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sport = Sport::all();
        return view('sport.index')->with('sports', $sport);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("sport.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'datetime' => 'required',
            'picture' => 'required|mimes:jpg,jpeg,png,gif',
            'duration' => 'required',
        ]);
                  
        if ($validator->fails()) {
            return redirect('/sport/create')
                ->withInput()
                ->withErrors($validator);
        }
        $picture = $request->file('picture');
        $upload = 'img/';
        $filename = $picture->getClientOriginalName();
        move_uploaded_file($picture->getPathName(), $upload.$filename);
        // Create The Event
        $sport = new Sport();
        $sport->name = $request->name;
        $sport->description = $request->description;
        $sport->datetime = $request->datetime;
        $sport->picture = $filename;
        $sport->duration = $request->duration;
        $sport->save();
        Session::flash('sport_create','New event is created.');
        return redirect('/sport/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function show(Sport $sport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function edit(Sport $sport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sport $sport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
    	$sport = Sport::find($id);
        $sport->delete();
        Session::flash('sport_delete','Sport deleted.');
        return redirect('/sport/index/');
    }   
}
