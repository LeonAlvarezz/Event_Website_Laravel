<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sport;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sports = Sport::all();
        return view('frontend.index')->with('sports', $sports);
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
    public function store(Request $request)
    {
        //
    }

    public function list()
    {
        $sports = Sport::all();
        $sports = Sport::orderBy('created_at','DESC')->paginate(4); 
        return view("frontend.list")->with('sports', $sports);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sport = Sport::findOrFail($id);
        return view('frontend.show')->with('sports', $sport);
    }

    public function search(Request $request) {
        $keyword = !empty($request->input('keyword'))?$request->input('keyword'):"";
        if($keyword != ""){
            return view('frontend.search')
                ->with('sports', Sport::where('name', 'LIKE', '%'.$keyword.'%')->paginate(2))
                ->with('keyword', $keyword);
        } else {
            return view('frontend.search')
                ->with('sports', Sport::paginate(4))
                ->with('keyword', $keyword);
        } 
    }
}
