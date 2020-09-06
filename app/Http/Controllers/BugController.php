<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bug;

class BugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('bugs.index')->with('bugs', bug::all());
        $bugs = bug::orderBy('created_at','desc')->paginate(10);
        return view('bugs.index')->with('bugs', $bugs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bugs.create');
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
        // $request->validate([
        //     "name" => "required|unique:courses",
        //     "level_id" => "required:courses",
        //     "department_id" => "required:courses",
        //     "qrcode" => "required|unique:courses",
        //     "coursedate" => "required:courses"
        // ]);

        Course::create([
            "name" => $request->name,
            "qrcode" => $request->qrcode,
            "coursedate" => $request->coursedate,
            "level_id" => $request->levelID,
            "department_id" => $request->departmentID
        ]);

        session()->flash('success', 'Bug was added');

        return redirect(route('courses.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $bug = Post::find($id);
        return view('bugs.show')->with('bug', $bug);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
